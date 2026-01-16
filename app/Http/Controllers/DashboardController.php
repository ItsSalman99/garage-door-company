<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\QuotationOrder;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $authUser = auth()->user();


        $totalTechnicians = User::role('technician')->count();

        $totalProducts = Product::count();
        $totalServices = Service::count();

        $totalQuotations = 0;

        if($authUser->hasRole('admin'))
        {
            $totalQuotations = QuotationOrder::count();
        }
        else if($authUser->hasRole('admin'))
        {
            $totalQuotations = QuotationOrder::count();
        }
        else if($authUser->hasRole('company')){
            $totalQuotations = QuotationOrder::where('company_id', $authUser->id)->count();
        }  else if($authUser->hasRole('technician')){
            $totalQuotations = QuotationOrder::where('technician_id', $authUser->id)->count();
        }

        return view('portal.dashboard', get_defined_vars());
    }
}
