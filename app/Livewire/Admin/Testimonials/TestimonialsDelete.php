<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;

class TestimonialsDelete extends Component
{
    public $testimonial;

    protected $listeners = ['testimonialDelete'];

    public function testimonialDelete($id)
    {
        $this->testimonial = Testimonial::find($id);
        $this->dispatch('deleteModalToggle');
    }

    public function submit(){
        unlink($this->testimonial->image);
        $this->testimonial->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(TestimonialsData::class);
        session()->flash('deleted_message','Data Deleted Successfully');
    }
    public function render()
    {
        return view('admin.testimonials.testimonials-delete');
    }
}
