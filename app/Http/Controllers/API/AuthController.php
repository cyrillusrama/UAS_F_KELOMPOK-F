<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    /**
     * Handle login request
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {

        $validated = $request->validate([
            'username' => 'bail|required|string|exists:users,username',
            'password' => 'bail|required|string'
        ]);

        $result = Auth::attempt(['username' => $validated['username'], 'password' => $validated['password']]);

        if (!$result) {
            return response()->json([
                "errors" => [
                    "password" => ['The provided credentials are incorrect.']
                ]
            ], 400);
        }

        $user = User::where('username', $validated['username'])->firstOrFail();

        if (is_null($user->email_verified_at)) {
            return response()->json([
                "errors" => [
                    "verified" => false,
                    "message" => "Akun belum melakukan verifikasi email"
                ]
            ], 400);
        }

        return response()->json([
            "token" => $user->createToken('token', ['customers'])->plainTextToken
        ]);
    }

    /**
     * Handle register request
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request): JsonResponse
    {

        $validated = $request->validate([
            'username' => 'bail|required|string|unique:users,username',
            'password' => 'bail|required|string',
            'phone' => 'bail|required|string',
            'email' => 'bail|required|email|unique:users,email',
            'address' => 'bail|required|string',
            'name'  => 'bail|required|string'
        ]);

        try {

            $validated['password'] = Hash::make($validated['password']);

            $user = User::create($validated);

            $user->sendEmailVerificationNotification();

            return response()->json([
                "success" => "Check your email for confirmation"
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                "errors" => [
                    "alert" => [$e->getMessage()]
                ]
            ]);
        }
    }
}
