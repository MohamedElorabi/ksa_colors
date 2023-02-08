<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('dashboard.auth.login');
    }


    public function username()
    {
        return 'username';
    }


    public function login(Request $request)
    {
       $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard/index');
        }

        return redirect(route('login.admin'))->with('errors','بيانات الدخول غير صحيحة');
    }

    public function changePassword(Request $request)
    {
        return view('dashboard.auth.change_password');
    }

    public function changePasswordSave(Request $request)
    {

        $this->validate($request, [
            'name'  => 'required',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $auth = Auth::user();

        $user =  User::find($auth->id);
        $user->name = $request->name;
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('success', 'تم تغيير كلمة المرور بنجاح');
    }

    public function logout(){

        Auth::logout();
        return redirect(route('login.admin'));
    }
}
