<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticatedByRole
{
    public function handle(Request $request, Closure $next)
    {
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
        // Ajouter d'autres rôles si nécessaire

        return $next($request);
    }
}
