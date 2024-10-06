<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsCreate extends Component
{
    use WithFileUploads;

    public $name , $link , $image , $description , $category_id , $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'link' => 'nullable|url',
            'image' => 'required|image|mimes:png,jpeg,jpg',
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

    public function submit(){
        $data = $this->validate($this->rules() , [] , $this->attributes());
        //save image in db
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('projects', $imageName , 'public');
        //save data in db
        $data['image'] = 'storage/projects/' . $imageName;
        Project::create($data);
        $this->reset(['name','link','image','description','category_id']);
        //hide create modal
        $this->dispatch('createModalToggle');
        //refresh Data in the page
        $this->dispatch('refreshData')->to(ProjectsData::class);
        session()->flash('created_message','Data Created Successfully');
    }
    public function render()
    {
        return view('admin.projects.projects-create');
    }
}
