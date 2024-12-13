<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    /**
     * Register a new user.
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('PlantCareApp-NewUserToken' . now()->format('Y-m-d'))->accessToken;

        return response()->json(['token' => $token,'user' => $user], 201);
    }

    /**
     * Login user and create token.
     */
    public function login(Request $request)
    {
        
        $validator = Validator::make($request->all(), [            
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->only('email', 'password');
        // Check if user exists
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['error' => 'Email not found'], 404);
        }

        // Debug hashed password
        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Invalid password'], 401);
        }
        
        if (Auth::attempt($credentials)) {
            
            $user = Auth::user();            
            if (!$user) {                
                return response()->json(['error' => 'No authenticated user'], 404);
            }
            
            if (!method_exists($user, 'createToken')) {                
                return response()->json(['error' => 'Passport not configured properly'], 500);
            }
            $tokenResult =  $user->createToken('PlantCareApp-NewUserToken' . now()->format('Y-m-d'));
            // Access the plain text token
            $plainTextToken = $tokenResult->accessToken;            
            // Access the expiration date
            $expiresAt = $tokenResult->token->expires_at;
           return response()->json(['token' => $plainTextToken,'expires_at' => $expiresAt], 200);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function logout(Request $request){
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['error'=> 'No authenticated user'], 404);
        }
        Auth::logout();
        return response()->json(['success'=> true],200);
    }
}