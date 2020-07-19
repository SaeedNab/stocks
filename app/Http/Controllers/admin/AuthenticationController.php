<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class AuthenticationController extends Controller
{
    protected $redirectTo = '/home';
    //
    public function __construct()
    {
        $this->middleware('guest.admin')->except('logout');

    }


    public function login()
    {
        return View('admin/auth/login_form');
    }

    public function Register()
    {
        return View('admin/auth/register_form');
    }

    public function login_(AdminLoginRequest $request)
    {


            $result = auth('admin')->attempt(['username'=>$request->input('username'),'password'=>$request->input('password')]);
            if ($result){
                return redirect()->route('admin.dashboard');
            }


        return redirect()->route('admin.auth.login_form')->with('wrong_details','نام کاربری یا رمز عبور اشتباه است');

    }


    public function register_(UserRegisterRequest $request)
    {
    }
    public function forgetPassword()
    {
        return View('user/auth/forget_password');
    }
    public function Logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.auth.login_form');

        // do something ...
    }

}
