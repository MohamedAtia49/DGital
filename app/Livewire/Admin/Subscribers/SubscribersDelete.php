<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribersDelete extends Component
{
    public $subscriber;
    protected $listeners = ['subscriberDelete'];

    public function subscriberDelete($id)
    {
        //fill $subscriber with the eloquent with the same id
        $this->subscriber = Subscriber::find($id);
        //show delete modal
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        //delete the record
        $this->subscriber->delete();
        //reset the $subscriber when you delete to ignore same id read error
        $this->reset('subscriber');
        //hide delete modal
        $this->dispatch('deleteModalToggle');
        //refresh the data after update
        $this->dispatch('refreshData')->to(SubscribersData::class);
        session()->flash('deleted_message','Data Deleted Successfully');
    }
    public function render()
    {
        return view('admin.subscribers.subscribers-delete');
    }
}
