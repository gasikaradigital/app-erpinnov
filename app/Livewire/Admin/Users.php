<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Notifications\NewUserWelcome;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Users extends Component
{
    use WithPagination, LivewireAlert, AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public $name;
    public $email;
    public $password;
    public $role;
    public $userId;
    public $perPage = 10;

    public $userIdToDelete;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'role' => 'required|in:superadmin,manager,client',
    ];

    public function render()
    {
        return view('livewire.admin.users', [
            'users' => User::with('roles')->latest()->paginate($this->perPage),
        ]);
    }

    public function addUser()
    {
        $this->validate(array_merge($this->rules, ['password' => 'required|min:8', 'email' => 'unique:users']));

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'email_verified_at' => now(),
        ]);

        $user->assignRole($this->role);

        $token = Str::random(60);
        $user->forceFill(['remember_token' => $token])->save();

        $user->notify(new NewUserWelcome($token));

        $this->reset();
        $this->alert('success', 'Utilisateur ajouté avec succès.');
        return redirect()->route('users.liste');
    }

    public function editUser($userId)
    {
        $this->userId = $userId;
        $user = User::findOrFail($userId);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->roles->first()->name ?? '';
    }

    public function updateUser()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . $this->userId,
            'role' => 'required|in:superadmin,manager,client',
        ]);

        $user = User::findOrFail($this->userId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        if ($this->password) {
            $user->update(['password' => Hash::make($this->password)]);
        }

        $user->syncRoles([$this->role]);

        $this->reset();
        $this->alert('success', 'Utilisateur mis à jour avec succès.');
        return redirect()->route('users.liste');
    }

    public function cancel()
    {
        $this->reset(['name', 'email', 'password', 'role', 'userId']);
    }

    public function confirmUserDeletion($userId)
    {
        $this->userIdToDelete = $userId;
        $this->dispatch('openDeleteModal');
    }

    public function deleteUser()
    {
        $user = User::findOrFail($this->userIdToDelete);
        $user->delete();

        $this->alert('success', 'Utilisateur supprimé avec succès.');
        $this->dispatch('closeDeleteModal');
    }
}
