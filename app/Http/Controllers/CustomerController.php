<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class CustomerController extends Controller
{
    public function index()
    {
        return view('administrator.customer.index'); 
    }
}
