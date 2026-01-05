<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $companies = User::role('company')->get();
        // dd($companies);
        $categories = Category::where('type', 'product')->with('products')->get();

        return view('portal.products.index', get_defined_vars());

    }
}
