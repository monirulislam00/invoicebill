<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserDashboard()
    {
        return view('user.user_dashboard');
    }
    public function AddUser()
    {
        return view('admin.add_user');
    }
}
