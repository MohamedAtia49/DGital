<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class TestimonialsUpdate extends Component
{
    use WithFileUploads;

    public $testimonial , $name , $position , $image , $description ;

    protected $listeners = ['testimonialUpdate'];


    public function rules()
    {
        return [
            'name' => 'required',
            'position' => 'required',
            'image' => 'nullable|image|mimes:png,jpeg,jpg',
            'description' => 'required',
        ];
    }

    public function testimonialUpdate($id)
    {
        $this->testimonial = Testimonial::find($id);
        $this->name = $this->testimonial->name;
        $this->position = $this->testimonial->position;
        $this->description = $this->testimonial->description;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }

    public function submit(){
        $data = $this->validate();
        //save image in db
        if ($this->image){
            unlink($this->testimonial->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('testimonials', $imageName , 'public');
            $data['image'] = 'storage/testimonials/' . $imageName;
        }else{
            unset($data['image']);
        }
        //save data in db
        $this->testimonial->update($data);
        $this->reset(['name','position','image','description']);
        //hide create modal
        $this->dispatch('editModalToggle');
        //refresh Data in the page
        $this->dispatch('refreshData')->to(TestimonialsData::class);
        session()->flash('updated_message','Data Updated Successfully');
    }
    public function render()
    {
        return view('admin.testimonials.testimonials-update');
    }
}
