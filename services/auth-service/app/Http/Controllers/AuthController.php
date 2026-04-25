<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request): JsonResponse
    {
        return response()->json(['success' => true, 'message' => 'register endpoint scaffold']);
    }

    public function login(Request $request): JsonResponse
    {
        return response()->json(['success' => true, 'message' => 'login endpoint scaffold']);
    }

    public function refresh(Request $request): JsonResponse
    {
        return response()->json(['success' => true, 'message' => 'refresh endpoint scaffold']);
    }

    public function logout(Request $request): JsonResponse
    {
        return response()->json(['success' => true, 'message' => 'logout endpoint scaffold']);
    }

    public function me(Request $request): JsonResponse
    {
        return response()->json(['success' => true, 'message' => 'me endpoint scaffold']);
    }
}
