<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class Authcontroller extends Controller
{

    public function login()
    {
        return view('admin.login');
    }

    public function admin_login(Request $request){


        $email = $request->email;
        $password = $request->password;
            if(Auth::attempt(['email' => $email , 'password' => $password]))
            {
                Alert::success('You are Successfully Logged In');
                return redirect('/dashboard');
            }else{
                return redirect('admin/login');
            }
    }

    // public function admin_login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         // $request->session()->regenerate();
    //         Alert::success('You are Successfully Logged In');
    //         return redirect('/dashboard');
    //     } else {
    //         return redirect('admin/login');
    //     }
    // }



    

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('admin/login')
            ->withSuccess('You have logged out successfully!');
    }

    // public function logout(){
    //     Auth::logout();
    //     return redirect('admin/login');
    // } 

}
