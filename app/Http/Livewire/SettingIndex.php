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
        return view('livewire.setting-index',[
            'settings' => Setting::latest()->paginate(5)
        ]);
    }


    public function handleSettingStored($setting)
    {
        session()->flash('message', 'Setting Successfully Created');
    }

    public function handleSettingUpdated($setting)
    {
        session()->flash('message', 'Setting Successfully Updated');

        $this->editSetting = false;
    }

    public function getSetting($id)
    {
        $this->editSetting = true;
        
        $setting = Setting::findOrfail($id);

        $this->emit('getSetting', $setting);
    }

    public function destroy($id)
    {
        $setting = Setting::findOrfail($id);

        if ($setting) {
            $setting->delete();
        }

        session()->flash('message', 'Setting Deleted');

        if ($this->editSetting) {
            $this->editSetting = false;
        }
    }
}
