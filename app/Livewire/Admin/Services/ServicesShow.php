<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesShow extends Component
{
    public $service , $name , $description , $icon ;

    protected $listeners = ['serviceShow'];

    public function serviceShow($id){
        $this->service = Service::find($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;
        $this->dispatch('showModalToggle');
    }
    public function render()
    {
        return view('admin.services.services-show');
    }
}
