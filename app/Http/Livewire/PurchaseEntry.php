<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\Setting;
use Livewire\Component;

class PurchaseEntry extends Component
{
    public $product_id;
    public $quantity;
    public $unit;
    public $price;
    public $grand_total;
    public $delivery_fee;
    public $purchaseId;
    public $setting;


    public function render()
    {
        return view('livewire.purchase-entry',[
            'products' => Product::select(['id','name'])->get()
        ]);
    }

    public function mount()
    {
        $this->setting = Setting::OrderBy('id','desc')->first();
    }

    public function updatedProductId()
    {
        $product = Product::find($this->product_id);

        $this->unit = $product->unit->symbol;
        $this->price = $product->price;
        $this->quantity = null;
    }

    public function updatedQuantity()
    {
        $this->grand_total = (int) $this->quantity * $this->price;
        $this->delivery_fee = (int) $this->grand_total * $this->setting->margin;
    }

    public function addEntry()
    {
        $this->validate([
            'product_id' => 'required|min:1',
            'quantity' => 'required'
        ]);

        $purchase = Purchase::findOrfail($this->purchaseId);
        // update stock (quantity)
        // $product = Product::findOrfail($this->product_id);
        // $product->quantity = (int) $product->quantity + (int) $this->quantity;
        // $product->save();

        $purchase->products()->attach(
            $this->product_id,[
            'quantity' => $this->quantity,
            'grand_total' => $this->grand_total,
            'delivery_fee' => $this->delivery_fee
            ]);
        
        $products = $purchase->products;

        $this->resetInput();

        $this->emit('purchaseEntryAdded', $products);
    }

    public function resetInput()
    {
        $this->product_id = null;
        $this->quantity = null;
    }
}
