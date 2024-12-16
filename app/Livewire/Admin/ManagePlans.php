<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ManagePlans extends Component
{   

    use LivewireAlert;

    public $plans;
    public $editing;
    public $name;
    public $description;
    public $price;
    public $duration_days;
    public $is_free;
    public $is_default;
    public $instance_limit;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'duration_days' => 'required|integer|min:1',
        'is_free' => 'boolean',
        'is_default' => 'boolean',
        'instance_limit' => 'required|integer|min:1',
    ];

    public function mount()
    {
        $this->loadPlans();
    }

    public function loadPlans()
    {
        $this->plans = Plan::all();
    }

    public function editPlan($planId)
    {
        $this->editing = Plan::findOrFail($planId);
        $this->name = $this->editing->name;
        $this->description = $this->editing->description;
        $this->price = $this->editing->price;
        $this->duration_days = $this->editing->duration_days;
        $this->is_free = $this->editing->is_free;
        $this->is_default = $this->editing->is_default;
        $this->instance_limit = $this->editing->instance_limit;
    }

    public function updatePlan()
    {
        $this->validate();

        $this->editing->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'duration_days' => $this->duration_days,
            'is_free' => $this->is_free,
            'is_default' => $this->is_default,
            'instance_limit' => $this->instance_limit,
        ]);

        $this->alert('success', 'Plan mis à jour avec succès.');
        $this->loadPlans();
        $this->editing = null;
    }

    public function render()
    {
        return view('livewire.admin.manage-plans')->layout('layouts.admin');
    }
}
