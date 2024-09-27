<?php

namespace App\Livewire\Client;

use Carbon\Carbon;
use App\Models\Plan;
use Livewire\Component;
use App\Models\Instance;
use Livewire\Attributes\On;
use App\Models\Subscription;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class HomeClient extends Component
{
    use WithPagination, LivewireAlert;

    public $user;
    public $currentPlan;
    public $statistics;
    public $subscriptionEndDate;
    public $daysRemaining;
    public $percentageDaysUsed;
    public $daysUsed;
    public $totalDays;

    public function mount()
    {
        $this->user = Auth::user();
        $this->currentPlan = $this->user->activePlan();
        $this->loadStatistics();
        $this->loadSubscriptionInfo();
    }

    private function loadStatistics()
    {
        $this->statistics = [
            'totalInstances' => $this->user->instances()->count(),
            'activeInstances' => $this->user->instances()->active()->count(),
            'expiredInstances' => $this->user->instances()->expired()->count(),
            'paidInstances' => $this->user->instances()->paid()->count(),
        ];
    }

    public function loadSubscriptionInfo()
    {
        $activeSubscription = $this->user->subscriptions()->where('status', 'active')->latest()->first();

        if ($activeSubscription && $this->currentPlan) {
            $this->subscriptionEndDate = $activeSubscription->end_date;
            $startDate = $activeSubscription->start_date;
            $this->totalDays = intval($this->currentPlan->duration_days);

            // Calculer les jours utilisés et forcer l'arrondi à l'entier
            $now = Carbon::now();
            $this->daysUsed = intval($startDate->diffInDays($now) + 1);

            // S'assurer que daysUsed ne dépasse pas totalDays
            $this->daysUsed = min($this->daysUsed, $this->totalDays);
        } else {
            $this->subscriptionEndDate = null;
            $this->daysUsed = 0;
            $this->totalDays = 0;
        }
    }

    #[On('planChanged')]
    public function handlePlanChanged()
    {
        $this->currentPlan = $this->user->fresh()->activePlan();
    }

    public function changePlan($planId)
    {
        $newPlan = Plan::findOrFail($planId);
        $this->user->changePlan($newPlan);
        $this->currentPlan = $newPlan;
        $this->dispatch('planChanged');
        $this->alert('success', 'Votre plan a été mis à jour avec succès.');
    }

    public function cancelSubscription()
    {
        $this->user->cancelSubscription();
        $this->currentPlan = $this->user->fresh()->activePlan();
        $this->dispatch('planChanged');
        $this->alert('success', 'Votre abonnement a été annulé. Vous êtes maintenant sur le plan gratuit.');
    }

    public function render()
    {
        return view('livewire.client.home-client', [
            'plans' => Plan::all(),
            'subscriptionEndDate' => $this->subscriptionEndDate,
            'daysRemaining' => $this->daysRemaining,
            'percentageDaysUsed' => $this->percentageDaysUsed,
        ])->layout('layouts.homeClient');
    }
}
