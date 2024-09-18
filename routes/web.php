<?php

use App\Livewire\HomePage;
use App\Livewire\Admin\Users;
use App\Livewire\Guard\Roles;
use App\Livewire\Admin\DetailUser;
use App\Livewire\Client\HomeClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\HomeSuperAdmin;
use App\Livewire\Admin\ManageInstance;
use App\Livewire\Client\FactureClient;
use App\Livewire\Client\InstanceListes;
use App\Livewire\Client\CreateInstances;


Route::get('/', HomePage::class)->name('homepage');

// roles redirect
Route::get('/redirect', function () {
    $user = Auth::user();

    if ($user->hasRole('superadmin')) {
        return redirect()->route('superAdmin');
    }

    if ($user->hasRole('manager')) {
        return redirect()->route('superAdmin');
    }

    if ($user->hasRole('client')) {
        return redirect()->route('espaceClient');
    }

    return redirect()->route('404');

})->middleware(['auth', 'verified']);

// routes listes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    // Route for SuperAdmin
    Route::middleware(['role:superadmin|manager'])->prefix('fulladmin')->group(function () {

        Route::get('/', HomeSuperAdmin::class)->name('superAdmin');
        Route::get('/users-liste', Users::class)->name('users.liste');
        Route::get('/detail-user/{id}', DetailUser::class)->name('users.detail');

        Route::get('/gestion-instance', ManageInstance::class)->name('instance.gestion');
        Route::get('/roles', Roles::class)->name('roles.liste');
    });


    // Route for Client
    Route::middleware(['role:client'])->prefix('client-espace')->group(function () {

        Route::get('/client', HomeClient::class)->name('espaceClient');

        Route::get('/facturation', FactureClient::class)->name('client.facture');

        Route::get('/instance/create', CreateInstances::class)->name('instance.create');
        Route::get('/instances', InstanceListes::class)->name('instances.list');

    });

});

