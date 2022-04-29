<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout() {
        session()->forget('verfied_user_id');
        session()->forget('verfied_admin_id');
        session()->forget('idTokenString');
        return redirect('login');
    }
}
