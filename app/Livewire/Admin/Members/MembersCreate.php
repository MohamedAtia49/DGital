<?php

namespace App\Livewire\Admin\Members;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithFileUploads;

class MembersCreate extends Component
{

    use WithFileUploads;

    public $name , $position , $image , $facebook , $twitter , $linkedin , $instagram ;

    public function rules()
    {
        return [
            'name' => 'required',
            'position' => 'required',
            'image' => 'required|image|mimes:png,jpeg,jpg',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
        ];
    }

    public function submit(){
        $data = $this->validate();
        //save image in db
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('members', $imageName , 'public');
        //save data in db
        $data['image'] = 'storage/members/' . $imageName;
        Member::create($data);
        $this->reset(['name','position','image','facebook','twitter','linkedin','instagram']);
        //hide create modal
        $this->dispatch('createModalToggle');
        //refresh Data in the page
        $this->dispatch('refreshData')->to(MembersData::class);
        session()->flash('created_message','Data Updated Successfully');
    }
    public function render()
    {
        return view('admin.members.members-create');
    }
}
