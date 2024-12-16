<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function plan(Request $request){
        //Récupérer tous les plans de la base de données
        $plan = Plan::all();

        // Vérifiez si des plans ont été trouvés
        if ($plans->isEmpty()) {
            return response()->json([
                'message' => 'No plans found.'
            ], 404);
        }

        //Renvoyer une réponse JSON avec les plans
        return response()->json($plans);
    }
}
