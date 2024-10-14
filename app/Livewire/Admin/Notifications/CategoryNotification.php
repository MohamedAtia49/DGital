<?php

namespace App\Livewire\Admin\Notifications;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CategoryNotification extends Component
{

    public function markAsRead($category_id)
    {
        // Find and mark the notification as read or remove it
        $getID = DB::table('notifications')->where('data->category_id',$category_id)->pluck('id');
        // Optionally, reload the notifications after marking as read
        DB::table('notifications')->where('id',$getID)->update(['read_at' => now()]);
        $userUnreadNotification = auth()->guard('admin')->user()->unreadNotifications->where('id', $getID)->first();
        // dd($userUnreadNotification);
        // if($userUnreadNotification) {
        //     dd($userUnreadNotification);
        //     $userUnreadNotification->markAsRead();
        // }
    }
    public function render()
    {
        return view('admin.notifications.category-notification',[
            'notifications' => Auth::guard('admin')->user()->unreadNotifications,
        ]);
    }
}
