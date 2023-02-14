<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Invoice;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        $values = Invoice::with('creator')->latest()->get();
        return view('admin/index', compact('values'));
    }
    public function AdminLogin()
    {
        return view('admin/admin_login');
    }
    public function AdminDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $admindata = User::find($id);
        return view('admin.admin_profile_view', compact('admindata'));
    }
    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_image' . $data->photo));
            $filename = date('YmdHis') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_image'), $filename);
            $data['photo'] = $filename;
        }
        $data->save();

        return redirect()->back();
    }
    public function ChangePassword()
    {
        return view('admin.change_password');
    }
    public function UpdatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return redirect()->back()->with('error', 'Old password is incorrect');
        }
        User::where('id', Auth::user()->id)->update([
            'password' => Hash::make($request->new_password),

        ]);
        return redirect()->back()->with('status', 'Password successfully updated');
    }
}
