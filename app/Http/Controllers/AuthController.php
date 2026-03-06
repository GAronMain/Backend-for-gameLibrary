<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Resources\RegisterUserResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $user = User::create($request->validated());

        $token = $user->createToken('api-token');

        return response()->json([
            'message' => 'User registered successfully',
            'user'    => $user,
            'token'   => $token->plainTextToken
        ], 201); // 1|329au9DQSHlhRQEHsgvBdVIDc6AhuJ1NbhROdnHX4f366402
        //2|N4UsJA6H0nilXYycupdCHxOAumZqzQ0cRmrn1zA53b0448d1
    }

    public function login(LoginUserRequest $request)
    {
        if (!Auth::attempt($request->validated())) {
            return response()->json(['message' => 'Credentials do not match'], 401);
        }

        $user = $request->user();

        $token = $user->createToken('api-login-token');

        return response()->json([
            'user'  => $user,
            'token' => $token->plainTextToken,
        ], 201);
    }

    public function logout() {
         $user = Auth::user();
        $user -> currentAccessToken()->delete();
        return response()->json(["message" => "Succesfully logged out"], 201);
    }


    //test
    // public function getBackAllUsers(){
    //     return UserResource::collection(User::all());
    // }
}
