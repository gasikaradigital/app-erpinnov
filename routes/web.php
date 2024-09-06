<?php

use App\Livewire\HomePage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\HomeSuperAdmin;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;


Route::get('/', HomePage::class)->name('homepage');

// roles redirect
Route::get('/redirect', function () {
    $user = Auth::user();

    if ($user->hasRole('superadmin')) {
        return redirect()->route('superAdmin');
    }

    if ($user->hasRole('manager')) {
        return redirect()->route('espaceManager');
    }

    if ($user->hasRole('client')) {
        return redirect()->route('espaceClient');
    }

    return redirect()->route('404');

})->middleware(['auth', 'verified']);

// routes listes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::middleware(['role:superadmin'])->prefix('fulladmin')->group(function () {

        Route::get('/', HomeSuperAdmin::class)->name('superAdmin');

    });

    Route::middleware(['role:manager'])->prefix('espace-manager')->group(function () {
        Route::get('/manager', function () {
            return view('manager');
        })->name('espaceManager');
    });

    Route::middleware(['role:client'])->prefix('client-espace')->group(function () {
        Route::get('/client', function () {
            return view('client');
        })->name('espaceClient');
    });

});

