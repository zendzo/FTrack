<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $start_date = Carbon::parse(now('Asia/Jakarta'))->startOfMonth()->toDateString();
        $end_date = Carbon::parse(now('Asia/Jakarta'))->endOfMonth()->toDateString();

        $purchases = Purchase::whereHas('products')->orderBy('id','DESC')->take(10)->get();

        $topProducts = Product::has('purchase')->with('purchase')->take(3)->get();

        $customers = Customer::whereHas('purchases.products')->orderBy('id', 'DESC')->take(10)->get();
        // customers this month
        $newCustomers = Customer::whereBetween(
            DB::raw("DATE(created_at)"),
            [
                Carbon::createFromFormat('Y-m-d', $start_date ?: Date('Y-m-d'))->toDateString(),
                Carbon::createFromFormat('Y-m-d', $end_date ?: Date('Y-m-d'))->toDateString()
            ])->count();

        $newOrders = Purchase::whereBetween(
            DB::raw("DATE(created_at)"),
            [
                Carbon::createFromFormat('Y-m-d', $start_date ?: Date('Y-m-d'))->toDateString(),
                Carbon::createFromFormat('Y-m-d', $end_date ?: Date('Y-m-d'))->toDateString()
            ]
        )->count();

        // purchase start to end month
        $pur = Purchase::has('products')->whereBetween(
            DB::raw("DATE(purchase_date)"),
            [
                Carbon::createFromFormat('Y-m-d', $start_date ?: Date('Y-m-d'))->toDateString(),
                Carbon::createFromFormat('Y-m-d', $end_date ?: Date('Y-m-d'))->toDateString()
            ]
        )->with('products')->get();

        $sales = Sale::has('products')->with('products')->get();

        $saleProducts = [];
        foreach ($sales as $key => $sale) {
            foreach ($sale->products as $key => $product) {
                array_push($saleProducts, $product->pivot->grand_total);
            }
        }

        $purchaseProducts = [];
        foreach ($pur as $key => $purchase) {
            foreach ($purchase->products as $product) {
                array_push($purchaseProducts, $product->pivot->delivery_fee);
            }
        }

        return view('administrator.dashboard',[
            'purchases' => $purchases,
            'customers' => $customers,
            'purchaseProducts' => $purchaseProducts,
            'saleProducts' => $saleProducts,
            'newCustomers' => $newCustomers,
            'newOrders' => $newOrders,
            'topProducts' => $topProducts
        ]);
    }
}
