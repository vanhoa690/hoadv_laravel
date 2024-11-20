<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $payload = $request->validate([
            "name" => "required|min:2|max:50",
            "email" => "required|email|unique:users,email",
            "username" => "required|alpha_num:ascii|min:4|max:50|unique:users,username",
            "password" => "required|min:6|max:50|confirmed"
        ]);

        try {
            $payload["password"] = Hash::make($payload["password"]);
            User::create($payload);
            return response()->json(["status" => 200, "message" => "Account created successfully!"]);
        } catch (\Exception $err) {
            // Log::info("user_register_err =>" . $err->getMessage());
            return response()->json(["status" => 500, "message" => "Something went wrong!"], 500);
        }
    }
}