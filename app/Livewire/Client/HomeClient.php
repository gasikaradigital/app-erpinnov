<?php

namespace App\Livewire\Client;

use Livewire\Component;
<<<<<<< HEAD
use App\Models\Instance;
use App\Models\Subscription;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class HomeClient extends Component
{
    use WithPagination, LivewireAlert;

    public $paidInstancesCount;
    public $activeInstancesCount;
    public $expiredInstancesCount;
    public $totalInstancesCount;
    public $currentPlan;
    public $remainingInstances;

    protected $listeners = ['planChanged' => 'loadStatistics'];

    public function mount()
    {
        $this->loadStatistics();
    }

    public function loadStatistics()
    {
        $user = Auth::user();
        $userInstances = $user->instances();

        $this->paidInstancesCount = $userInstances->whereHas('subscription.plan', function ($query) {
            $query->where('is_free', false);
        })->count();

        $this->activeInstancesCount = $userInstances->where('status', 'active')->count();
        $this->expiredInstancesCount = $userInstances->where('status', 'expired')->count();
        $this->totalInstancesCount = $userInstances->count();

        $this->currentPlan = $user->activePlan();
        if ($this->currentPlan) {
            $this->remainingInstances = $this->currentPlan->instance_limit === null
                ? 'Illimité'
                : max(0, $this->currentPlan->instance_limit - $this->totalInstancesCount);
        } else {
            $this->remainingInstances = 0;
        }
    }

    public function changePlan($planId)
    {
        $user = Auth::user();
        $newPlan = Plan::findOrFail($planId);

        // Ici, vous devriez implémenter la logique de paiement si nécessaire

        $user->subscriptions()->where('status', 'active')->update(['status' => 'expired']);

        Subscription::create([
            'user_id' => $user->id,
            'plan_id' => $newPlan->id,
            'start_date' => now(),
            'end_date' => now()->addDays($newPlan->duration_days),
            'status' => 'active'
        ]);

        $this->alert('success', 'Votre plan a été mis à jour avec succès.');
        $this->loadStatistics();
    }

    public function render()
    {
        return view('livewire.client.home-client', [
            'paidInstancesCount' => $this->paidInstancesCount,
            'activeInstancesCount' => $this->activeInstancesCount,
            'expiredInstancesCount' => $this->expiredInstancesCount,
            'totalInstancesCount' => $this->totalInstancesCount,
            'currentPlan' => $this->currentPlan,
            'remainingInstances' => $this->remainingInstances,
            'plans' => Plan::all(),
            'subscriptionPlans' => new SubscriptionPlans(),
        ])->layout('layouts.homeClient');
=======

class HomeClient extends Component
{
    public function render()
    {
        return view('livewire.client.home-client')->layout('layouts.homeClient');
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
    }
}
