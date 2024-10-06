<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsDelete extends Component
{
    public $project;

    protected $listeners = ['projectDelete'];

    public function projectDelete($id)
    {
        $this->project = Project::find($id);
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        unlink($this->project->image);
        $this->project->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(ProjectsData::class);
        session()->flash('deleted_message','Data Deleted Successfully');
    }
    public function render()
    {
        return view('admin.projects.projects-delete');
    }
}
