<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsUpdate extends Component
{
    use WithFileUploads;

    public $project , $name , $link , $image , $description , $category_id , $categories;

    public function mount(){
        $this->categories = Category::all();
    }
    protected $listeners = ['projectUpdate'];

    public function rules()
    {
        return [
            'name' => 'required',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:png,jpeg,jpg',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'category',
        ];
    }
    public function projectUpdate($id)
    {
        $this->project = Project::find($id);
        $this->name = $this->project->name;
        $this->link = $this->project->link;
        // $this->image = $this->project->image;
        $this->description = $this->project->description;
        $this->category_id = $this->project->category_id;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }

    public function submit(){
        $data = $this->validate($this->rules() , [] , $this->attributes());
        //save image in db
        if ($this->image){
            unlink($this->project->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('projects', $imageName , 'public');
            $data['image'] = 'storage/projects/' . $imageName;
        }else{
            unset($data['image']);
        }
        //save data in db
        $this->project->update($data);
        $this->reset(['name','link','image','description','category_id']);
        //hide create modal
        $this->dispatch('editModalToggle');
        //refresh Data in the page
        $this->dispatch('refreshData')->to(ProjectsData::class);
        session()->flash('updated_message','Data Updated Successfully');
    }

    public function render()
    {
        return view('admin.projects.projects-update');
    }
}
