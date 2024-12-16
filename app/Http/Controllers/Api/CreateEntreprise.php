<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Entreprise;

class CreateEntreprise extends Controller
{
    public function entreprise(Request $request){

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
            'nif' => 'required|string',
            'ville' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'phone' => 'required|string|max:10',
            'adresse' => 'required|string|max:255'
        ]);

        //Création d'une nouvelle entreprise
        $entreprise = Entreprise::create([
            'user_id' => $request->user()->id,
            'name' => $request->name,
            'nif' => $request->nif,
            'ville' => $request->ville,
            'pays' => $request->pays,
            'phone' => $request->phone,
            'adresse' => $request->adresse
        ]);

        //Retourner une réponse JSON avec l’entreprise créée
        return response()->json([
            'entreprise' => $entreprise,
        ], 201);
    }
}
