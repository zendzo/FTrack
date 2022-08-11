<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class SettingEdit extends Component
{
    public $margin;
    public $settingId = 1;

    protected $listeners = [
        'getSetting' => 'showSetting'
    ];
    public function render()
    {
        $setting = Setting::findOrfail(1);

        return view('livewire.setting-edit',[
            $setting
        ]);
    }

    public function showSetting($setting)
    {
        $this->margin = $setting['margin'];
        $this->settingId = $setting['id'];
    }

    public function updateSetting()
    {
        $this->validate([
            'margin' => 'required',
        ]);

        if ($this->id) {
            $setting = Setting::findOrfail($this->settingId);
            $setting->update([
                'margin' => $this->margin,
            ]);
        }

        $this->emit('settingUpdated', $setting);
    }
}
