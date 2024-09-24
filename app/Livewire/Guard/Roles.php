<?php

namespace App\Livewire\Guard;

use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
<<<<<<< HEAD
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
=======
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c

class Roles extends Component
{
    use WithPagination, LivewireAlert, AuthorizesRequests;
<<<<<<< HEAD

    protected $paginationTheme = 'bootstrap';

    public $name, $selected_id, $permissions;
    public $selected_permission = [];
    public $rolePermissions = [];
    public $modules;

    public function mount()
    {
        $this->modules = Permission::select('module')->distinct()->orderBy('module')->pluck('module');
    }

    public function render()
    {
        $this->authorize('read_role_and_permission');
        $roles = Role::orderBy('name', 'asc')->paginate(5);
        $this->permissions = Permission::orderBy('module')->orderBy('name')->get();

        // Compter les utilisateurs pour chaque rôle
        $roleCounts = DB::table('model_has_roles')
            ->select('role_id', DB::raw('count(*) as user_count'))
            ->groupBy('role_id')
            ->pluck('user_count', 'role_id')
            ->toArray();

        $this->permissions = Permission::all();

        return view('livewire.guard.roles', [
            'roles' => $roles,
            'roleCounts' => $roleCounts,
        ]);
    }
    public function save()
    {
        $this->authorize('create_role_and_permission');
        $this->validate([
            'name' => 'required|unique:roles,name',
            'selected_permission' => 'required|array',
        ]);

        $role = Role::create(['name' => $this->name]);

        // Récupérer les noms des permissions à partir des ID sélectionnés
        $permissionNames = Permission::whereIn('id', $this->selected_permission)->pluck('name')->toArray();

        $role->syncPermissions($permissionNames);

        $this->reset();
        $this->alert('success', 'Utilisateur ajouté avec succès.');
        return redirect()->route('roles.listes');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $this->selected_id = $id;
        $this->name = ucfirst($role->name);
        $this->selected_permission = $role->permissions()->pluck('id')->toArray();
    }

    public function update()
    {
        $this->authorize('update_role_and_permission');
        $this->validate([
            'name' => 'required',
            'selected_permission' => 'required|array',
        ]);

        $role = Role::findOrFail($this->selected_id);

        $role->name = $this->name;
        $role->save();

        // Récupérer les noms des permissions à partir des ID sélectionnés
        $permissionNames = Permission::whereIn('id', $this->selected_permission)->pluck('name')->toArray();

        $role->syncPermissions($permissionNames);

        $this->reset();
        $this->alert('success', 'Utilisateur ajouté avec succès.');
        return redirect()->route('roles.liste');
    }

    public function delete($id)
    {
        $this->authorize('update_role_and_permission');
        Role::findOrFail($id)->delete();
        $this->showMessage('Role supprimé!');
    }

    public function toggleAllPermissions()
    {
        $this->selected_permission = $this->selected_permission == $this->permissions->pluck('id')->toArray()
            ? []
            : $this->permissions->pluck('id')->toArray();
    }
}

=======
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.guard.roles');
    }
}
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
