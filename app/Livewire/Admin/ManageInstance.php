<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Instance;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Notification;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Services\InstanceCancellingService;

class ManageInstance extends Component
{
    use WithPagination, LivewireAlert, AuthorizesRequests;

    protected $paginationTheme = 'bootstrap';

    public function confirmUserDeletion($id)
    {
        // Récupérer le nom de l'instance (facultatif, pour les messages)
        $name_instance = Instance::where('id', $id)->pluck('name')->first();
        
        // Supprimer l'instance par ID
        $instance = Instance::find($id); // Récupérer l'instance par ID
        if ($instance) {
            $cancellingService = new InstanceCancellingService();
            $instancesDetails = $cancellingService->cancelInstance($name_instance);

            if (!$instancesDetails) {
                $this->alert('error', 'Une erreur est survenue lors de la suppression de l\'instance');
                return; // Quitter la méthode si une erreur s'est produite
            }

            // Supprimer l'enregistrement
            $instance->delete();

            // Afficher un message de succès
            $this->alert('success', 'Votre instance a été supprimée avec succès.');
        } else {
            $this->alert('error', 'Instance non trouvée.');
        }
    }

    public function render()
    {
        return view('livewire.admin.manage-instance', [
            'instances' => Instance::latest()->paginate(10),
        ]);
    }
}
