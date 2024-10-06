<?php

namespace App\Livewire\Front\Components;

use App\Models\Member;
use Livewire\Component;

class MembersComponent extends Component
{
    public function render()
    {
        return view('front.components.members-component',[
            'members' => Member::all()
        ]);
    }
}
