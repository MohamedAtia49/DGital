<?php

namespace App\Livewire\Admin\Members;

use App\Models\Member;
use Livewire\Component;

class MembersDelete extends Component
{
    public $member;

    protected $listeners = ['memberDelete'];
    public function memberDelete($id)
    {
        $this->member = Member::find($id);
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        unlink($this->member->image);
        $this->member->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(MembersData::class);
        session()->flash('deleted_message','Data Deleted Successfully');
    }
    public function render()
    {
        return view('admin.members.members-delete');
    }
}
