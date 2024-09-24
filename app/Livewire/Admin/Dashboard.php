<?php

namespace App\Livewire\Admin;

<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
<<<<<<< HEAD
        $clientCount = User::query()
            ->whereHas('roles', function ($query) {
                $query->where('name', 'client');
            })
            ->where('is_active', true)
            ->count();

        $clientPaidCount = User::query()
            ->whereHas('roles', function ($query) {
                $query->where('name', 'client');
            })
            ->where('is_active', true)
            ->whereHas('subscriptions', function ($query) {
                $query->whereHas('plan', function ($query) {
                    $query->where('is_free', false);
                })
                ->where('status', 'active')
                ->where('end_date', '>', now());
            })
            ->count();

        return view('livewire.admin.dashboard', [

            'clientCount'  => $clientCount,
            'clientPaidCount' => $clientPaidCount,
        ]);
=======
        return view('livewire.admin.dashboard');
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
    }
}
