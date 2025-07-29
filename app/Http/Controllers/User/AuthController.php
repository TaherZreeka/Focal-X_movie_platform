<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:20|confirmed'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return response()->json([
            'message' => 'user registerd successfully',
            'user' => $user,
            201
        ]);
    }
    public function login(Request $request)
    {
        $request->validate([

            'email' => 'required|string|email',
            'password' => 'required|string|min:8|max:20'
        ]);
        if (!Auth::attempt($request->only('email', 'password')))
            return response()->json(
                [
                    'message' => 'invalid email or password'
                ],
                401
            );
        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'message' => 'login successfully',
            'user' => $user,
            'Token' => $token],
            200
        );
    }
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete;
        return response()->json([
            'message' => 'logout successfully']

        );

    }
}
