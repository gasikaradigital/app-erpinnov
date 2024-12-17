<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Http\JsonResponse;

class PlanController extends Controller
{
    /**
     * Récupérez tous les plans de la base de données.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function plan(Request $request): JsonResponse
    {
        // Récupérer tous les plans de la base de données
        $plans = Plan::all();

        // Vérifiez si des plans ont été trouvés
        if ($plans->isEmpty()) {
            return response()->json([
                'message' => 'No plans found.'
            ], 404);
        }

        // Retourner une réponse JSON avec les plans
        return response()->json($plans, 200);
    }
}