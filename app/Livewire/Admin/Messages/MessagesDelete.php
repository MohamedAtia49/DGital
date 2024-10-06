<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesDelete extends Component
{
    public $message;
    protected $listeners = ['messageDelete'];

    public function messageDelete($id){
        //fill $message with the eloquent model of the same id
        $this->message = Message::find($id);
        //show the delete modal
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        $this->message->delete();
        //hide the delete modal
        $this->dispatch('deleteModalToggle');
        //refresh the page data
        $this->dispatch('refreshData')->to(MessagesData::class);
        session()->flash('deleted_message','Data Deleted Successfully');
    }
    public function render()
    {
        return view('admin.messages.messages-delete');
    }
}
