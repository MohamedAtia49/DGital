<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesUpdate extends Component
{
    public $category , $name;
    protected $listeners = ['categoryUpdate'];

    public function rules(){
        return [
            'name' => 'required',
        ];
    }
    public function categoryUpdate($id){
        $this->category = Category::find($id);
        $this->name = $this->category->name;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }

    public function submit()
    {
        $data = $this->validate();
        $this->category->update($data);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(CategoriesData::class);
        session()->flash('updated_message','Data Updated Successfully');
    }
    public function render()
    {
        return view('admin.categories.categories-update');
    }
}
