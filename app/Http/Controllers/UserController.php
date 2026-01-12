<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $users = [];
        if($request->role)
        {
            $users = User::role($request->role)->get();

        }

        return view('portal.user.index', get_defined_vars());
    }


    public function show($id)
    {
        $user = User::where('id', $id)->first();

        return view('portal.user.show', get_defined_vars());
    }
}
