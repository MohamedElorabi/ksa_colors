<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('dashboard.login');
    }



    public function login(Request $request)
    {


       $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard/index')
                        ->withSuccess('Signed in');
        }
  
        return redirect("admin.login")->withSuccess('Login details are not valid');
    }
    

    public function logout(){

        Auth::logout();
        return redirect('admin.login');
    }
}
