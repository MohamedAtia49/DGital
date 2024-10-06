<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsShow extends Component
{
    public $skill ,$name ,$progress ;

    protected $listeners = ['skillShow'];

    public function skillShow($id)
    {
        //fill $skill with the eloquent with the same id
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
        //show show modal
        $this->dispatch('showModalToggle');
    }
    public function render()
    {
        return view('admin.skills.skills-show');
    }
}
