<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Purchase;
use App\Models\PurchasesType;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Str;

class PurchaseCreate extends Component
{
    public $supplier_id;
    public $code;
    public $purchase_type_id;
    public $purchase_date;
    public $sent_date;
    public $address;
    public $recipient;

    public function render()
    {
        return view('livewire.purchase-create',[
            'purchasesType' => PurchasesType::all(),
            'suppliers' => Supplier::all()
        ]);
    }

    public function mount()
    {
        $this->code = strtoupper(Str::random(10));
    }

    public function addPurchases()
    {
        $this->validate([
            'supplier_id' => 'required|min:1',
            'code' => 'required|min:3',
            'purchase_type_id' => 'required|min:1',
            'purchase_date' => 'required',
            'sent_date' => 'required',
            'address' => 'required|min:5',
            'recipient' => 'required|min:5'
        ]);
        
        $purchases = Purchase::create([
            'supplier_id' => $this->supplier_id,
            'code' => $this->code,
            'purchase_type_id' => $this->purchase_type_id,
            'purchase_date' => $this->purchase_date,
            'sent_date' => $this->sent_date,
            'address' => $this->address,
            'recipient' => $this->recipient
        ]);

        $this->resetInput();

        $this->emit('purchasesStored',$purchases);

        if (Auth::user()->role_id === 2) {
            return redirect()->route('cashier.purchases.show', $purchases->id);
        }
        
        return redirect()->route('admin.purchases.show', $purchases->id);
    }

    public function resetInput()
    {
        $this->supplier_id = null;
        $this->code = null;
        $this->purchase_type_id = null;
        $this->purchase_date = null;
        $this->sent_date = null;
        $this->address = null;
        $this->recipient = null;
    }
}
