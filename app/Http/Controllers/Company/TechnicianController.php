<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TechnicianController extends Controller
{
    public function index()
    {
        $users = User::role('technician')->get();

        return view('portal.technicians.index', get_defined_vars());
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User;
        $user->full_name = $request->full_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->status = 1;

        $user->save();

        // Assign Spatie role
        $user->assignRole('technician');

        $redirect = route('portal.technicians.index');

        return response()->json([
            'status' => true,
            'message' => 'Technician created!',
            'redirect' => $redirect,
        ]);

    }
}
