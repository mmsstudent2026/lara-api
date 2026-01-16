<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeNameRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Resources\ProfileResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Log the user out.
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            "data" => ['message' => 'Logged out successfully']
        ]);
    }

    /**
     * Change password.
     */
    public function changePassword(ChangePasswordRequest $request)
    {
        $user = $request->user();

        if (! Hash::check($request->old_password, $user->password)) {
            return response()->json([
                "data" => ['message' => 'Old password is incorrect']
            ], 401);
        }

        $user->update(['password' => Hash::make($request->new_password)]);
        
        $user->tokens()->delete();

        return response()->json([
            "data" => ['message' => 'Password changed successfully']
        ]);
    }

    /**
     * Change name.
     */
    public function changeName(ChangeNameRequest $request)
    {
        $user = $request->user();
        $user->update(['name' => $request->name]);

        return new ProfileResource($user);
    }

    /**
     * Get user profile.
     */
    public function show(Request $request)
    {
        return new ProfileResource($request->user());
    }
}
