<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Http\Traits\ApiResponse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use ApiResponse;

    public function register(RegisterRequest $request)
    {
          $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user' 
        ]);
            return $this->successResponse( new UserResource($user),'user registerd successfully',201); 
    }

    public function login(LoginRequest $request)
    {
            $user = User::where('email', $request['email'])->first();
        if (!$user || !Hash::check($request['password'], $user->password)) {
            return $this->errorResponse('invalid email or password', 401);
        }
            $token = $user->createToken('Personal Access Token')->plainTextToken;
       return $this->successResponse([
            'user' => new UserResource($user),
            'token' => $token]
            , 'Login successfully', 200);
    }

    public function logout(Request $request){
        $user=$request->user();
        $user->currentAccessToken()->delete();
        return $this->successResponse(new UserResource($user),'logout successfully',200);
    }
}
