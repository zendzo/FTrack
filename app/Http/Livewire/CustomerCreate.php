<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CustomerCreate extends Component
{
    public $name;
    public $address;
    public $phone;
    public $status = true;
    public $description;

    public function render()
    {
        return view('livewire.customer-create');
    }

    public function addCustomer()
    {
        $this->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:5'
        ]);
        
        $customer = Customer::create([
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone,
            'status' => $this->status,
            'description' => $this->description
        ]);

        $this->resetInput();

        $this->emit('customerStored',$customer);
    }

    public function resetInput()
    {
        $this->name = null;
        $this->address = null;
        $this->phone = null;
        $this->status = null;
        $this->description = null;
    }
}
