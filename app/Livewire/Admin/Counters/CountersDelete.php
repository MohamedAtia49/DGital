<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{
    public $counter;
    protected  $listeners = ['counterDelete'];

    public function counterDelete($id){
        $this->counter = Counter::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        //delete the record
        $this->counter->delete();
        //reset the $skill when you delete to ignore same id read error
        $this->reset('counter');
        //hide delete modal
        $this->dispatch('deleteModalToggle');
        //refresh the data after Delete
        $this->dispatch('refreshData')->to(CountersData::class);
        session()->flash('deleted_message','Data Deleted Successfully');
    }
    public function render()
    {
        return view('admin.counters.counters-delete');
    }
}
