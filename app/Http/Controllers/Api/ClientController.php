<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ClientController extends Controller
{
    public function client(Request $request){

        //Récupérer l’utilisateur authentifié avec ses entreprises associées
        $user = User::with('entreprises')->where('id', $request->user()->id)->first();

        //Retourne le nom de l'entreprise comme format json
        if($user){
            return response()->json([
                'name' => $user->entreprises->pluck('name')
            ]);
        }
        

    }
}
