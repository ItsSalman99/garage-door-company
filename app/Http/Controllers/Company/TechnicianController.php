<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TechnicianController extends Controller
{
    public function index()
    {
        $users = User::role('technician')->get();

        return view('portal.technicians.index', get_defined_vars());
    }
}
