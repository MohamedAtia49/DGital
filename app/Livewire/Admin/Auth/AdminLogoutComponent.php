<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminLogoutComponent extends Component
{
    public function logout()
    {
        Auth::guard('admin')->logout();
        session()->forget('guard.admin');
        session()->regenerateToken();
        return redirect()->route('admin.login');
    }
    public function render()
    {
        return view('admin.auth.admin-logout-component');
    }
}
