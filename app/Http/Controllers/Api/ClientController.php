<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class ClientController extends Controller
{
    /**
     * Récupérez l’utilisateur authentifié et ses entreprises associées.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function client(Request $request): JsonResponse
    {
        // Récupérer l'utilisateur authentifié
        $user = $request->user();

        // Vérifier si l'utilisateur est authentifié
        if (!$user) {
            return response()->json([
                'message' => 'Non authentifié'
            ], 401);
        }

        // Récupérer les entreprises associées à l'utilisateur
        $entreprises = $user->entreprises;

        // Retourner le nom des entreprises au format JSON
        return response()->json([
            'entreprises' => $entreprises->pluck('name')
        ], 200);
    }
}