<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{

    public function index()
    {
        return view('portal.services.categories.index');
    }

}
