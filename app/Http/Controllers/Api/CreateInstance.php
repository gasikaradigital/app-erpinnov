<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entreprise;

class CreateInstance extends Controller
{
    public function createInstance(Request $request){

        // Vérifie si l'utilisateur est connecté
        if (!auth()->check()) {
            return response()->json([
                'message' => 'Non authentifié',
                'token_present' => $request->bearerToken() ? 'oui' : 'non',
                'headers' => $request->headers->all()
            ], 401);
        }

        //Valider les données de la requête entrante
        $request->validate([
            'name' => 'required|string|max:255',
            'entreprise' => 'required|string',
        ]);

        

        //Retourner une réponse JSON avec l’entreprise créée
        return response()->json([
            'entreprise' => $entreprise,
        ], 201);
    }
}
