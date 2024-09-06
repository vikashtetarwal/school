<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function dashboard(){
        return view('admin/dashboard');
    }


    public function admin_changeprofile(){
        $admin = Auth::user();
        // dd($admin);
        return view('admin/change_profile', compact('admin'));
     }

     public function admin_changepassword(){
        return view('admin/change_password');

     }

    //  public function admin_profile_update(Request $request) {
    //     $validated = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
    //         'password' => 'nullable|string|min:8|confirmed',
    //     ]);
    //     $admin = auth()->user();
    //     $admin->name = $validated['name'];
    //     $admin->email = $validated['email'];
    //     if (!empty($validated['password'])) {
    //         $admin->password = bcrypt($validated['password']);
    //     }
    //     $admin->update();
    //     return redirect()->back()->with('success', 'Admin User Profile Updated Successfully');
    // }
}
