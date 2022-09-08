<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Purchase;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $purchases = Purchase::whereHas('products')->orderBy('id','DESC')->take(10)->get();

        $customers = Customer::whereHas('purchases.products')->orderBy('id', 'DESC')->take(10)->get();

        return view('administrator.dashboard',[
            'purchases' => $purchases,
            'customers' => $customers
        ]);
    }
}
