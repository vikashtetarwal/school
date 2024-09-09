<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

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

     public function admin_profile_update(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
      
        ]);
        $admin = auth()->user();
        $admin->name = $validated['name'];
        $admin->email = $validated['email'];
      
        $admin->update();
        return redirect()->back()->with('success', 'Admin User Profile Updated Successfully');
    }


    public function admin_password_update(Request $request){

        // dd($request->all());
        $request->validate([
            'new password' => 'required|min:8',
            'retype-password' => 'required|same:password',

        ]);
        $admin = auth()->user();
        $admin = Hash::make($request->password);
        dd($admin);
        // $admin->save();
        return redirect()->back()->with('success', 'Admin User Password Change Successfully');
    }

    public function change_admin_photo(Request $request){

        $validated = $request->validate([
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image

        ]);
        $admin = Auth::user();

        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/admin/' . $filename;
            $file->move(public_path('uploads/admin'), $filename);
            $file_data = public_path('uploads/admin');
            if(file_exists($file_data)){
                unlink($file_data);
            }
            $admin->profile_photo = $filePath;
        }
        $admin->save();
        return redirect()->back()->with('success', 'Admin user profile updated successfully.');
    


    }
}
