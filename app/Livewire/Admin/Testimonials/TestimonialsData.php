<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class TestimonialsData extends Component
{

    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }
    protected $listeners = ['refreshData' => '$refresh'];
    public function render()
    {
        return view('admin.testimonials.testimonials-data',
        ['data' => Testimonial::where('name' , 'like' ,'%'. $this->search .'%')->paginate(5)]);
    }
}
