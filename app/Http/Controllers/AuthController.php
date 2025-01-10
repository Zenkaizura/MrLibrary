<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel; // Pastikan menggunakan UserModel yang benar
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = UserModel::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        $token = JWTAuth::fromUser($user);
        return response()->json(['user' => $user, 'token' => $token]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()-> json(['error' => 'kodenya salah lwk bot'], 401);
        }

        return response()-> json(['token' => $token]);
    }

    public function profile()
    { try {
        $user = JWTAuth::parseToken()->authenticate(); // Ambil user dari token
        return response()->json($user);
    } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
        return response()->json(['error' => 'Token is invalid', 'message' => $e->getMessage()], 401);
    } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
        return response()->json(['error' => 'Token expired', 'message' => $e->getMessage()], 401);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Token not found', 'message' => $e->getMessage()], 401);
    }
    }   
}