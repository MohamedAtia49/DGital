<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::guard('admin')->logout();
        session()->forget('guard.admin');
        session()->regenerateToken();
        return redirect('/admin/login');
    }
}
