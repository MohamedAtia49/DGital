<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesCreate extends Component
{
    public $name;
    public function rules(){
        return [
            'name' => 'required',
        ];
    }
    public function submit(){
        $data = $this->validate();
        Category::create($data);
        $this->reset('name');
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshData')->to(CategoriesData::class);
        session()->flash('created_message','Data Created Successfully');
    }
    public function render()
    {
        return view('admin.categories.categories-create');
    }
}
