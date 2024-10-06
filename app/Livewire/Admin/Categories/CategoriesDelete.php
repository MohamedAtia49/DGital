<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesDelete extends Component
{
    public $category;
    protected $listeners = ['categoryDelete'];

    public function categoryDelete($id){
        $this->category = Category::find($id);
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        $this->category->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(CategoriesData::class);
        session()->flash('deleted_message','Data Deleted Successfully');
    }
    public function render()
    {
        return view('admin.categories.categories-delete');
    }
}
