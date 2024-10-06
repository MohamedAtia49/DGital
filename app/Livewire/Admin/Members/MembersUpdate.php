<?php

namespace App\Livewire\Admin\Members;

use App\Models\Member;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class MembersUpdate extends Component
{
    use WithFileUploads;

    public $member , $name , $position , $image , $facebook , $twitter , $linkedin , $instagram ;

    protected $listeners = ['memberUpdate'];
    public function rules()
    {
        return [
            'name' => 'required',
            'position' => 'required',
            'image' => 'nullable|image|mimes:png,jpeg,jpg',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
        ];
    }

    public function memberUpdate($id){
        $this->member = Member::find($id);
        $this->name = $this->member->name;
        $this->position = $this->member->position;
        $this->facebook = $this->member->facebook;
        $this->twitter = $this->member->twitter;
        $this->linkedin = $this->member->linkedin;
        $this->instagram = $this->member->instagram;
        $this->dispatch('editModalToggle');
    }
    public function submit(){
        $data = $this->validate();
        //save image in db
        if ($this->image){
            unlink($this->member->image);
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('members', $imageName , 'public');
            $data['image'] = 'storage/members/' . $imageName;
        }else{
            unset($data['image']);
        }
        //save data in db
        $this->member->update($data);
        $this->reset(['name','position','image','facebook','twitter','linkedin','instagram']);
        //hide create modal
        $this->dispatch('editModalToggle');
        //refresh Data in the page
        $this->dispatch('refreshData')->to(MembersData::class);
        session()->flash('updated_message','Data Updated Successfully');
    }
    public function render()
    {
        return view('admin.members.members-update');
    }
}
