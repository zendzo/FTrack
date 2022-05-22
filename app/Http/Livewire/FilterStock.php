<?php

namespace App\Http\Livewire;

use App\Models\PurchasesType;
use Livewire\Component;
use App\Models\SalesType;

class FilterStock extends Component
{
    public $start_date;
    public $end_date;
    public $type;
    public $page;

    public function render()
    {
        return view('livewire.filter-stock');
    }

    public function searchQuery()
    {
        $this->validate([
            'start_date' => 'required',
            'end_date' => 'required',
            'type' => 'required'
        ]);

        $this->emit('queryEntered',  $this->start_date, $this->end_date, $this->type);
    }
}
