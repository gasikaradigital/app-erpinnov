<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class SubscriptionPlans extends Component
{
    use WithPagination;

    public $plans;
    public $currentPlan;
    public $remainingInstances;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount()
    {
        $this->loadPlans();
        $this->loadCurrentPlan();
    }

    public function loadPlans()
    {
        $this->plans = Plan::all();
    }

    public function loadCurrentPlan()
    {
        $user = Auth::user();
        $this->currentPlan = $user->activePlan();
        $this->remainingInstances = $user->remainingInstances();
    }

    public function changePlan($planId)
    {
        $user = Auth::user();
        $newPlan = Plan::findOrFail($planId);

        // Ici, vous devriez implémenter la logique de paiement si nécessaire
        // Par exemple, rediriger vers une page de paiement ou utiliser un service de paiement

        $user->subscriptions()->where('status', 'active')->update(['status' => 'expired']);

        $user->subscriptions()->create([
            'plan_id' => $newPlan->id,
            'start_date' => now(),
            'end_date' => now()->addDays($newPlan->duration_days),
            'status' => 'active'
        ]);

        $this->emit('planChanged');
        $this->loadCurrentPlan();
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Votre plan a été mis à jour avec succès.']);
    }

    public function render()
    {
        return view('livewire.client.subscription-plans');
    }
}
