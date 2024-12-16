<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ClientController extends Controller
{
    public function client(Request $request){

        $user = User::with('entreprises')->where('id', $request->user()->id)->first();
        return response()->json([
            'name' => $user->entreprises->pluck('name')
        ]);
    }
}
