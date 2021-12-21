<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        $user = User::where('id', auth()->id())->get();

        return response()->json([
            'data' => $user
        ]);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        try {
            $user->delete();

            return response()->json([
                'message' => 'Delete success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 400);
        }
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'username' => 'bail|nullable|string|unique:users,username,' . $id,
            'password' => 'bail|nullable|string',
            'phone' => 'bail|nullable|string',
            'email' => 'bail|nullable|email|unique:users,email,' . $id,
            'address' => 'bail|nullable|string',
            'name'  => 'bail|nullable|string'
        ]);

        if ($request->has('password')) {
            $validated['password'] = Hash::make($validated['password']);
        }

        try {
            $user->update($validated);

            return response()->json([
                'success' => [
                    'message' => 'Edit Data Success'
                ]
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'errors' => [
                    'message' => $e->getMessage()
                ]
            ]);
        }
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        if ($user->id != auth()->id()) {
            return response()->json([
                'errrors' => [
                    'message' => 'Unauthorized'
                ]
            ], 401);
        }

        return response()->json([
            'data' => $user
        ]);
    }
}
