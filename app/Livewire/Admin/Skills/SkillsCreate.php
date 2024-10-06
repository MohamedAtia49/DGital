<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsCreate extends Component
{
    public $name , $progress ;

    public function rules(){
        return [
            'name' => 'required',
            'progress' => 'required|numeric',
        ];
    }

    public function submit()
    {
        //Validation data
        $data = $this->validate();
        //Insert Data
        Skill::create($data);
        //reset the $name and $progress when you want more create
        $this->reset(['name','progress']);
        //Hide Modal from the creating page
        $this->dispatch('createModalToggle');
        //Refresh Skills Page
        $this->dispatch('refreshData')->to(SkillsData::class);
        session()->flash('created_message','Data Updated Successfully');
    }
    public function render()
    {
        return view('admin.skills.skills-create');
    }
}
