<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Admin;
use App\Models\Category;
use App\Notifications\CreateCategory;
use Illuminate\Support\Facades\Notification;
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
        //validate
        $data = $this->validate();
        //create category
        $category = Category::create($data);
        //send notification
        $category_name = $category->name;
        $admins = Admin::where('id','!=',auth()->guard('admin')->user()->id)->get();
        $admin_create = auth()->guard('admin')->user()->name;
        Notification::send($admins, new CreateCategory($category->id,$admin_create, $category_name));
        //reset the input after create
        $this->reset('name');
        //hide create modal
        $this->dispatch('createModalToggle');
        //refresh the data on the page without refresh the page
        $this->dispatch('refreshData')->to(CategoriesData::class);
        //add flash message
        session()->flash('created_message','Data Created Successfully');
    }
    public function render()
    {
        return view('admin.categories.categories-create');
    }
}
