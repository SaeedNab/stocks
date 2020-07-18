<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserLoginRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AuthenticationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest.user')->except('logout');

    }

    public function login()
    {
        return View('user/auth/login_form');
    }

    public function Register()
    {
        return View('user/auth/register_form');
    }

    public function login_(UserLoginRequest $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        try {
            $result = Auth::attempt(['username'=>$request->input('username'),'password'=>$request->input('password')]);
            if ($result){
                return redirect()->route('user.dashboard');
            }

        }catch(\Exception $e){
            dd($e->getMessage());
    }
    return redirect()->route('user.auth.login_form')->with('wrong_details','نام کاربری یا رمز عبور اشتباه است');

    }

    public function register_(UserRegisterRequest $request)
    {

        $user = new User();
        $user->name = $request->input('name');
        $user->family = $request->input('last_name');
        $user->nation_code = $request->input('nation_code');
        $user->username = $request->input('nation_code');
        $user->phone_number = $request->input('phone_number');
        $user->intro_code = $request->input('intro_code');
        $user->email = $request->input('email');
        $user->password = Hash::make('123456');
        $result = $user->save();
        if ($result){
            return redirect()->route('user.auth.login_form');
        }
        else{
            return redirect()->route('user.auth.register_form');
        }

    }
    public function Logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('user.auth.login_form');

        // do something ...
    }

    public function forgetPassword()
    {
        return View('user/auth/forget_password');
    }
}
