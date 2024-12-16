<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
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
    }
}
