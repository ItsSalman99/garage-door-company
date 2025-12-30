<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function login(Request $request)
    {

        $login_as = $request->login;

        return view('auth.login', get_defined_vars());
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

        if($request->login_as != 'Technician')
        {
            $checkUser = User::where('id', $request->id)->first();
            // dd($checkUser);
            if($checkUser->email != $request->email || !Hash::check($request->password, $checkUser->password)){
                return response()->json([
                    'status' => false,
                    'message' => 'Please login with correct '.$checkUser->full_name.' company details',
                ]);
            }
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

    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->route('index');

    }

}
