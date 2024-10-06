<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
    public $service;
    protected  $listeners = ['serviceDelete'];

    public function serviceDelete($id){
        $this->service = Service::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        //delete the record
        $this->service->delete();
        //reset the $skill when you delete to ignore same id read error
        $this->reset('service');
        //hide delete modal
        $this->dispatch('deleteModalToggle');
        //refresh the data after Delete
        $this->dispatch('refreshData')->to(ServicesData::class);
        session()->flash('deleted_message','Data Deleted Successfully');
    }
    public function render()
    {
        return view('admin.services.services-delete');
    }
}
