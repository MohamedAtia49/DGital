<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersUpdate extends Component
{
    public $counter , $name , $count , $icon;

    protected $listeners = ['counterUpdate'];

    public function rules(){
        return [
            'name' => 'required',
            'count' => 'required|numeric',
            'icon' => 'required',
        ];
    }

    public function counterUpdate($id)
    {
        //fill $skill with the eloquent with the same id
        $this->counter = Counter::find($id);
        $this->name = $this->counter->name;
        $this->count = $this->counter->count;
        $this->icon = $this->counter->icon;
        //Reset the Validation
        $this->resetValidation();
        //show edit modal
        $this->dispatch('editModalToggle');
    }

    public function submit()
    {
        //Validation data
        $data = $this->validate();
        //Insert Data
        $this->counter->update($data);
        //Hide Modal from the creating page
        $this->dispatch('editModalToggle');
        //Refresh Skills Page
        $this->dispatch('refreshData')->to(CountersData::class);
        session()->flash('updated_message','Data Updated Successfully');
    }
    public function render()
    {
        return view('admin.counters.counters-update');
    }
}
