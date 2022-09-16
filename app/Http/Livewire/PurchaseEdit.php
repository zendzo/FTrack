<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\PurchasesType;
use App\Models\Setting;
use Livewire\Component;

class PurchaseEdit extends Component
{
    public $supplier_id;
    public $setting_id;
    public $code;
    public $purchase_type_id;
    public $purchase_date;
    public $sent_date;
    public $address;
    public $recipient;
    public $purchaseId;

    protected $listeners = [
        'getPurchases' => 'showPurchases'
    ];
    public function render()
    {
        return view('livewire.purchase-edit',[
            'purchasesType' => PurchasesType::all(),
            'suppliers' => Supplier::all(),
            'recipients' => Customer::all(),
            'settings' => Setting::all()
        ]);
    }

    public function showPurchases($purchase)
    {
        $this->supplier_id = $purchase['supplier_id'];
        $this->setting_id = $purchase['setting_id'];
        $this->code = $purchase['code'];
        $this->purchase_type_id = $purchase['purchase_type_id'];
        $this->purchase_date = $purchase['purchase_date'];
        $this->sent_date = $purchase['sent_date'];
        $this->address = $purchase['address'];
        $this->recipient = $purchase['recipient'];
        $this->purchaseId = $purchase['id'];
    }

    public function updatePurchase()
    {
        $this->validate([
            'supplier_id' => 'required|min:1',
            'address' => 'required|min:3'
        ]);

        if ($this->id) {
            $purchase = Purchase::findOrfail($this->purchaseId);
            $purchase->update([
                'supplier_id' => $this->supplier_id,
                'setting_id' => $this->setting_id,
                'purchase_type_id' => $this->purchase_type_id,
                'purchase_date' => $this->purchase_date,
                'sent_date' => $this->sent_date,
                'adress' => $this->address,
                'recipient' => $this->recipient
            ]);
        }

        $this->emit('purchasesUpdated', $purchase);
    }
}
