<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
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
    public function StoreUser(Request $request)
    {
        $request->validate([
            'name' =>'required|max:255',
            'email' =>'required|email|unique:users',
            'password' =>'required|confirmed',
            'role' =>'required|in:admin,user',
        ]);
        User::insert([
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'role'          => $request->role,
            'password'      => Hash::make($request->password),
            'created_at'    => Carbon::now()
        ]);
        return redirect()->back()->with('status', 'Account Created successfully');
    }
    public function AllUser(){
        return view('admin.all_user');
    }
}
