<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsUpdate extends Component
{
    public $skill , $name , $progress ;
    protected $listeners = ['skillUpdate'];

    public function rules(){
        return [
            'name' => 'required',
            'progress' => 'required|numeric',
        ];
    }
    public function skillUpdate($id)
    {
        //fill $skill with the eloquent with the same id
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
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
        $this->skill->update($data);
        //Hide Modal from the creating page
        $this->dispatch('editModalToggle');
        //Refresh Skills Page
        $this->dispatch('refreshData')->to(SkillsData::class);
        session()->flash('updated_message','Data Updated Successfully');
    }
    public function render()
    {
        return view('admin.skills.skills-update');
    }
}
