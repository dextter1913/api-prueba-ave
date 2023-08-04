<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\Sanctum;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(
                [
                    'message' => 'Unauthorized'
                ],
                401
            );
        }

        $user = User::where('email', $request['email'])->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;


        return response()->json(
            [
                'message'     => 'Hola ' . $user->name,
                'accessToken' => $token,
                'token_type'  => 'Bearer',
                'user'        => $user
            ],
            200
        );
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}
