<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * @group Authentification
     *
     * Connexion de l'utilisateur.
     *
     * @bodyParam email string required L'adresse email de l'utilisateur. Exemple: user@example.com
     * @bodyParam password string required Le mot de passe de l'utilisateur. Exemple: password123
     *
     * @response 200 {
     *   "user": {
     *     "id": 1,
     *     "name": "John Doe",
     *     "email": "user@example.com",
     *   },
     *   "token": "2|AbcdEfGhIjKlMnOpQrStUvWxYz"
     * }
     * @response 422 {"message": "Les informations de connexion sont incorrectes."}
     */

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Les informations de connexion sont incorrectes.'],
            ]);
        }

        return response()->json([
            'user' => $user,
            'token' => $user->createToken('auth-token')->plainTextToken
        ]);
    }

    /**
     * @group Authentification
     *
     * Inscription d'un nouvel utilisateur.
     *
     * @bodyParam name string required Le nom de l'utilisateur. Exemple: John Doe
     * @bodyParam email string required L'adresse email de l'utilisateur. Exemple: user@example.com
     * @bodyParam password string required Le mot de passe de l'utilisateur. Exemple: password123
     * @bodyParam password_confirmation string required Confirmation du mot de passe. Exemple: password123
     *
     * @response 201 {
     *   "user": {
     *     "id": 1,
     *     "name": "John Doe",
     *     "email": "user@example.com",
     *   },
     *   "token": "2|AbcdEfGhIjKlMnOpQrStUvWxYz"
     * }
     * @response 422 {"message": "Le champ email doit être unique."}
     */

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'user' => $user,
            'token' => $user->createToken('auth-token')->plainTextToken
        ], 201);
    }

    /**
     * @group Authentification
     *
     * Déconnexion de l'utilisateur.
     *
     * @authenticated
     *
     * @response 200 {"message": "Déconnecté avec succès"}
     */

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Déconnecté avec succès']);
    }

    /**
     * @group Authentification
     *
     * Récupérer les informations de l'utilisateur actuellement authentifié.
     *
     * @authenticated
     *
     * @response 200 {
     *   "id": 1,
     *   "name": "John Doe",
     *   "email": "user@example.com"
     * }
     */

    public function user(Request $request)
    {
        // Vérifier si l'utilisateur est authentifié
        if (!$user) {
            return response()->json([
                'message' => 'Non authentifié'
            ], 401);
        }

        //Récupère les informations de l'utlisateurs
        $user = $request->user();

        //Récupère les instances liés à l'utilisateur
        $instance = $user->instances;

        //Récupère les entreprise liés à l'utilisateur
        $entreprise = $user->entreprises;

        //Récupère la subscriptions de l'utilisateur
        $subscription = $user->subscriptions;
        
        return response()->json([
            'user' => $user
        ]);
    }
}