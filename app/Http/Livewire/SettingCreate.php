<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Setting;

class SettingCreate extends Component
{
    public $margin;
    public $symbol;

    public function render()
    {
        return view('livewire.setting-create');
    }

    public function addSetting()
    {
        $this->validate([
            'margin' => 'required',
        ]);
        
        $setting = Setting::create([
            'margin' => $this->margin,
        ]);

        $this->resetInput();

        $this->emit('settingStored',$setting);
    }

    public function resetInput()
    {
        $this->margin = null;
    }
}
