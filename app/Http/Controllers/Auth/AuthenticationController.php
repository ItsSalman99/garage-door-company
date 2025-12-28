<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
            ]);
        }

        // Attempt login
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ], true)) {
            return response()->json([
                'status' => false,
                'message' => 'Invalid email or password',
            ]);
        }

        // Logged in user
        $user = Auth::user();

        // Optional: Block inactive users
        if (isset($user->status) && $user->status == 0) {
            Auth::logout();

            return response()->json([
                'status' => false,
                'message' => 'Your account is inactive',
            ], 403);
        }

        $redirect = route('portal.dashboard');

        return response()->json([
            'status' => true,
            'message' => 'Login successful',
            'redirect' => $redirect,
        ]);

    }
}
