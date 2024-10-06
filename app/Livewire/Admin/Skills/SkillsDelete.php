<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{

    public $skill;
    protected $listeners = ['skillDelete'];

    public function skillDelete($id)
    {
        //fill $skill with the eloquent with the same id
        $this->skill = Skill::find($id);
        //show delete modal
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        //delete the record
        $this->skill->delete();
        //reset the $skill when you delete to ignore same id read error
        $this->reset('skill');
        //hide delete modal
        $this->dispatch('deleteModalToggle');
        //refresh the data after update
        $this->dispatch('refreshData')->to(SkillsData::class);
        session()->flash('deleted_message','Data Deleted Successfully');
    }

    public function render()
    {
        return view('admin.skills.skills-delete');
    }
}
