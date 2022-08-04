<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CustomerIndex extends Component
{
    protected $listeners = [
        'customerStored' => 'handleCustomerStored',
        'customerUpdated' => 'handleCustomerUpdated'
    ];
    public $editCustomer = false;

    public function render()
    {
        return view('livewire.customer-index', [
            'categories' => Customer::latest()->paginate(5)
        ]);
    }


    public function handleCustomerStored($customer)
    {
        session()->flash('message', 'Customer ' . $customer['name'] . '  Successfully Created');
    }

    public function handleCustomerUpdated($customer)
    {
        session()->flash('message', 'Customer ' . $customer['name'] . '  Successfully Updated');
        $this->editCustomer = false;
    }

    public function getCustomer($id)
    {
        $this->editCustomer = true;

        $customer = Customer::findOrfail($id);

        $this->emit('getCustomer', $customer);
    }

    public function destroy($id)
    {
        $customer = Customer::findOrfail($id);

        if ($customer) {
            $customer->delete();
        }

        session()->flash('message', 'Customer ' . $customer['name'] . '  Deleted');

        if ($this->editCustomer) {
            $this->editCustomer = false;
        }
    }
}
