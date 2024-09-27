<?php

namespace App\Livewire\Client;

use App\Models\Plan;
use App\Models\Payment;
use Livewire\Component;
use App\Models\Subscription;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PaymentProcess extends Component
{
    use WithPagination, LivewireAlert, AuthorizesRequests;
    public $uuid;
    public $plan;
    public $cardholderName;
    public $cardNumber;
    public $cardExpiry;
    public $cardCVC;
    public $months = 1; // Définissez-le comme un entier par défaut
    public $total; // Total à payer

    protected $rules = [
        'cardholderName' => 'required|string|max:255',
        'cardNumber' => 'required|numeric|digits:16',
        'cardExpiry' => 'required|date_format:m/y',
        'cardCVC' => 'required|numeric|digits:3',
        'months' => 'required|integer|min:1|max:12',
    ];

    public function mount($uuid)
    {
        $this->uuid = $uuid;
        $this->plan = Plan::where('uuid', $uuid)->firstOrFail();
        $this->calculateTotal();
    }

    public function updatedMonths()
    {
        $this->calculateTotal();
    }

    public function calculateTotal()
    {
        $this->total = $this->plan->price * $this->months;
    }

    public function processPayment()
    {
        $this->validate();

        $user = Auth::user();

        $subscription = Subscription::create([
            'user_id' => $user->id,
            'plan_id' => $this->plan->id,
            'start_date' => now(),
            'end_date' => now()->addMonths(intval($this->months)), // Convertit en entier
            'status' => 'active'
        ]);

        $payment = Payment::create([
            'user_id' => $user->id,
            'plan_id' => $this->plan->id,
            'subscription_id' => $subscription->id,
            'amount' => $this->total,
            'status' => 'completed',
            'payment_method' => 'credit_card',
            'transaction_id' => 'sim_' . uniqid(),
            'cardholder_name' => $this->cardholderName,
        ]);

        // dd($subscription);
        // dd($payment);

        $user->subscriptions()->where('id', '!=', $subscription->id)->update(['status' => 'expired']);

        $this->alert('success', 'Paiement effectué avec succès. Votre plan a été mis à jour pour ' . $this->months . ' mois.');

        return redirect()->route('instance.create');
    }

    public function render()
    {
        return view('livewire.client.payment-process')->layout('layouts.homeClient');
    }
}
