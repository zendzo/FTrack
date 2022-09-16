<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Setting;

class SettingCreate extends Component
{
    public $margin;
    public $description;
    public $default = true;

    public function render()
    {
        return view('livewire.setting-create');
    }

    public function addSetting()
    {
        $this->validate([
            'margin' => 'required',
            'default' => 'required',
            'description' => 'required|min:5',
        ]);

        if ($this->default) {
            Setting::where('default', true)->update(['default' => false]);
        }
        
        $setting = Setting::create([
            'margin' => $this->margin,
            'user_id' => auth()->user()->id,
            'description' => $this->description,
            'default' => $this->default
        ]);

        $this->resetInput();

        $this->emit('settingStored',$setting);
    }

    public function resetInput()
    {
        $this->margin = null;
        $this->description = null;
        $this->default = true;
    }
}
