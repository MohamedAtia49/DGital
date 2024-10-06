<?php

namespace App\Livewire\Front\Components;

use App\Models\Service;
use Livewire\Component;

class Services2Component extends Component
{
    public function render()
    {
        return view('front.components.services2-component',[
            'data' => Service::take( 3)->get()
        ]);
    }
}
