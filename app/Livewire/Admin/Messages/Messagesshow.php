<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class Messagesshow extends Component
{
    public $name , $email , $subject , $message;

    protected $listeners = ['messageShow'];

    public function messageShow($id){
        //fill the $message with the eloquent model of the same id
        $record = Message::find($id);
        $this->name = $record->name;
        $this->email = $record->email;
        $this->subject = $record->subject;
        $this->message = $record->message;
        //show the show modal
        $this->dispatch('showModalToggle');
        //change the status to '1' to be seen
        $record->update(['status' => '1']);
        //refresh the page data
        $this->dispatch('refreshData')->to(MessagesData::class);
    }
    public function render()
    {
        return view('admin.messages.messagesshow');
    }
}
