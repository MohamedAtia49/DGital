<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersCreate extends Component
{
    public $name ,$count ,$icon;

    public function rules()
    {
        return [
            'name' => 'required',
            'count' => 'required|numeric',
            'icon' => 'required',
        ];
    }
    public function submit()
    {
        //validate Data
        $data = $this->validate();
        //save data in db
        Counter::create($data);
        //reset the $name , $count and $icon when you want more create
        $this->reset(['name','count','icon']);
        //hide modal
        $this->dispatch('createModalToggle');
        //refresh data in page
        $this->dispatch('refreshData')->to(CountersData::class);
        session()->flash('created_message','Data Updated Successfully');
    }
    public function render()
    {
        return view('admin.counters.counters-create');
    }
}
