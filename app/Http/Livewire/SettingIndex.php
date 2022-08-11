<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class SettingIndex extends Component
{
    protected $listeners = [
        'settingStored' => 'handleSettingStored',
        'settingUpdated' => 'handleSettingUpdated'
    ];

    public $editSetting = false;

    public function render()
    {
        return view('livewire.setting-index');
    }


    public function handleSettingStored($setting)
    {
        session()->flash('message', 'Setting '.$setting['margin'].'  Successfully Created');
    }

    public function handleSettingUpdated($setting)
    {
        session()->flash('message', 'Setting '.$setting['margin'].'  Successfully Updated');

        $this->editSetting = false;
    }

    public function getSetting($id)
    {
        $this->editSetting = true;
        
        $setting = Setting::findOrfail($id);

        $this->emit('getSetting', $setting);
    }
}
