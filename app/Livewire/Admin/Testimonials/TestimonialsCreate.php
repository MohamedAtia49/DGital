<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class TestimonialsCreate extends Component
{
    use WithFileUploads;

    public $name , $position , $image , $description ;

    public function rules()
    {
        return [
            'name' => 'required',
            'position' => 'required',
            'image' => 'required|image|mimes:png,jpeg,jpg',
            'description' => 'required',
        ];
    }

    public function submit(){
        $data = $this->validate();
        //save image in db
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('testimonials', $imageName , 'public');
        //save data in db
        $data['image'] = 'storage/testimonials/' . $imageName;
        Testimonial::create($data);
        $this->reset(['name','position','image','description']);
        //hide create modal
        $this->dispatch('createModalToggle');
        //refresh Data in the page
        $this->dispatch('refreshData')->to(TestimonialsData::class);
        session()->flash('created_message','Data Updated Successfully');
    }
    public function render()
    {
        return view('admin.testimonials.testimonials-create');
    }
}
