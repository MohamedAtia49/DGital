<?php

namespace App\Livewire\Front\Components;

use App\Models\Counter;
use Livewire\Component;

class CountersComponent extends Component
{
    public function render()
    {
        return view('front.components.counters-component',[
            'data' => Counter::take(4)->get()
        ]);
    }
}
