<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        return view('administrator.purchase.index');
    }

    public function show($id)
    {
        $purchase = Purchase::find($id);
       return view('administrator.purchase.show',[
           'purchase' => $purchase
       ]);
    }

    public function invoice($id)
    {
        $purchase = Purchase::find($id);
        
        if ($purchase->products->count() < 1 ) {
            return redirect()->back()->with([
                'message' => 'Item Tidak Boleh Kosong',
                'status' => 'danger'
            ]);
        }
        
        $purchase->completed = true;
        $update = $purchase->save();

        if ($update) {
            return view('administrator.purchase.invoice', [
                'purchase' => $purchase
            ]);
        }
    }

    public function payment($id)
    {
        $purchase = Purchase::find($id);
        $purchase->confirmed_by_admin = true;
        $update = $purchase->save();

        if ($update) {
            return view('administrator.purchase.invoice', [
                'purchase' => $purchase
            ]);
        }
    }
}
