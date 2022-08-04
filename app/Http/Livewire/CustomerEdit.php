<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CustomerEdit extends Component
{
    public $name;
    public $address;
    public $phone;
    public $status;
    public $description;
    public $customerId;

    protected $listeners = [
        'getCustomer' => 'showCustomer'
    ];
    public function render()
    {
        return view('livewire.customer-edit');
    }

    public function showCustomer($customer)
    {
        $this->name = $customer['name'];
        $this->address = $customer['address'];
        $this->phone = $customer['phone'];
        $this->status = $customer['status'];
        $this->description = $customer['description'];
        $this->customerId = $customer['id'];
    }

    public function updateCustomer()
    {
        $this->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:3'
        ]);

        if ($this->id) {
            $customer = Customer::findOrfail($this->customerId);
            $customer->update([
                'name' => $this->name,
                'address' => $this->address,
                'phone' => $this->phone,
                'status' => $this->status,
                'description' => $this->description
            ]);
        }

        $this->emit('customerUpdated', $customer);
    }
}
