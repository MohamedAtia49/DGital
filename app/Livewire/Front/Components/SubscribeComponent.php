<?php

namespace App\Livewire\Front\Components;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribeComponent extends Component
{
    public $email;

    public function rules(){
        return [
            'email' => 'required|email|unique:subscribers,email',
        ];
    }

    public function submit(){
        $data = $this->validate();
        Subscriber::create(['email' => $this->email]);
        $this->reset('email');
        session()->flash('subscribed_message','Subscribes Successfully');
    }
    public function render()
    {
        return view('front.components.subscribe-component');
    }
}
