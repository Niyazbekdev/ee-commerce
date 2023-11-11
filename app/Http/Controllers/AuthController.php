<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
           throw ValidationException::withMessages([
              'email' => ['Email not found or password in correct'],
           ]);
        }

        return response()->json([
            'data' => [
                'name' => $user->first_name,
                'email' =>$user->email,
                'token' => $user->createToken($request->email)->plainTextToken,
            ]
        ]);
    }

    public function register()
    {

    }

    public function logout()
    {
        
    }

    public function user(Request $request)
    {
        return $request->user();
    }
}
