<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(UserRequest $request)
    {
        $user = new User;
        $user->fill($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json([
            'success' => true,
            'data' => $user,
            'message' => 'User created successfully'
        ], 201);
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (!$email || !$password) {
            return response()->json([
                'success' => false,
                'message' => "Vui lòng nhập đầy đủ email và mật khẩu"
            ], 400);
        }
        $status = Auth::attempt(['email' => $email, 'password' => $password]);
        if ($status) {
            //Tạo token
            $token = $request->user()->createToken('auth');
            return response()->json([
                'success' => true,
                'token' => $token->plainTextToken,
                'message' => 'Đăng nhập thành công'
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => "Email hoặc mật khẩu không chính xác"
        ], 401);
    }

    public function profile(Request $request)
    {
        return response()->json([
            'success' => true,
            'user' => $request->user()
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}
