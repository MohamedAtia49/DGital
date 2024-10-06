<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettings extends Component
{
    public $settings ;
    public function mount(){
        $this->settings = Setting::find(1);
    }

    public function rules(){
        return [
            'settings.name' => 'required',
            'settings.email' => 'required|email',
            'settings.address' => 'required',
            'settings.phone' => 'required|numeric',
            'settings.facebook' => 'nullable|url',
            'settings.twitter' => 'nullable|url',
            'settings.linkedIn' => 'nullable|url',
            'settings.instagram' => 'nullable|url',
        ];
    }

    public function submit(){
        $this->validate();
        $this->settings->save();
        session()->flash('message','Data Updated Successfully');
    }
    public function render()
    {
        return view('admin.settings.update-settings');
    }
}
