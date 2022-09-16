<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class SettingEdit extends Component
{
    public $margin;
    public $description;
    public $default;
    public $settingId;

    protected $listeners = [
        'getSetting' => 'showSetting'
    ];
    public function render()
    {
        return view('livewire.setting-edit');
    }

    public function showSetting($setting)
    {
        $this->margin = $setting['margin'];
        $this->description = $setting['description'];
        $this->default = $setting['default'];
        $this->settingId = $setting['id'];
    }

    public function updateSetting()
    {
        $this->validate([
            'margin' => 'required',
            'description' => 'required|min:5',
            'default' => 'required',
        ]);

        if ($this->id) {
            Setting::where('default',true)->update(['default' => false]);

            $setting = Setting::findOrfail($this->settingId);
            $setting->update([
                'margin' => $this->margin,
                'description' => $this->description,
                'default' => $this->default,
            ]);
        }

        $this->emit('settingUpdated', $setting);
    }
}
