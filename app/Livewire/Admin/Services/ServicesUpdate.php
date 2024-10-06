<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{
    public $service , $name , $description , $icon ;

    protected $listeners = ['serviceUpdate'];
    public function rules(){
        return [
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ];
    }

    public function serviceUpdate($id){
        //fill $skill with the eloquent with the same id
        $this->service = Service::find($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;
        //Reset the Validation
        $this->resetValidation();
        //show edit modal
        $this->dispatch('editModalToggle');
    }

    public function submit(){
        //Validation data
        $data = $this->validate();
        //Insert Data
        $this->service->update($data);
        //Hide Modal from the creating page
        $this->dispatch('editModalToggle');
        //Refresh Skills Page
        $this->dispatch('refreshData')->to(ServicesData::class);
        session()->flash('updated_message','Data Updated Successfully');
    }
    public function render()
    {
        return view('admin.services.services-update');
    }
}
