<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return View('admin/dashboard/index');
    }

    public function users()
    {
        $users = User::where(['confirmation_status'=>1])->get();
        return View('admin/dashboard/users',['users'=>$users]);
    }
    public function new_users()
    {
        $users = User::where(['confirmation_status'=>0])->get();
        return View('admin/dashboard/new_users',['users'=>$users]);
    }

    public function user_details()
    {

    }

    public function create_admin()
    {
        return View('admin/dashboard/create_admin');
    }
    public function store_admin(AdminRequest $request)
    {
        $username = $request->input('username');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $phone_number = $request->input('phone_number');
        $email = $request->input('email');
        $nation_code = $request->input('nation_code');
        $password = Hash::make('123456');
        $role = 1;
        $status = 0;
        $admin = new Admin();
        $admin->name = $first_name;
        $admin->family = $last_name;
        $admin->username = $username;
        $admin->nation_code = $nation_code;
        $admin->phone_number = $phone_number;
        $admin->email = $email;
        $admin->password = $password;
        $admin->status = $status;
        $admin->role = $role;
        $result = $admin->save();
        if ($result){
            return redirect()->route('admin.admins.admin_list');
        }
        else{
            return redirect()->route('admin.admins.create_admin');
        }


    }

    public function deleteAdmin($user)
    {
        $admin = Admin::find($user);
        if ($result = $admin->delete()){
            return redirect()->route('admin.admins.admin_list');

        }
    }

    public function updateAdmin($admin)
    {
        $admin = Admin::find($admin);

        return View('admin.dashboard.update_admin',['admin'=>$admin]);
    }
    public function editAdmin(AdminRequest $request,$admin)
    {
        $admin = Admin::find($admin);

        return View('admin.dashboard.update_admin',['admin'=>$admin]);
    }

    public function admins()
    {
        $admins = Admin::where(['role'=>1])->get();
        return View('admin.dashboard.admins',['admins'=>$admins]);
    }

    public function accept_confirmation(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($id);
        $user->confirmation_status = 1;
        $result = $user->save();
        if ($result){
            return [
                'success'=>true,
                'msg'=>'درخواست شما با موفقیت انجام شد.'
            ];
        }
        return [
            'success'=>false,
            'msg'=>'خطا در انجام عملیات.'
        ];


    }
    public function decline_confirmation(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($id);
        $result = $user->delete();
        if ($result){
            return [
                'success'=>true,
                'msg'=>'درخواست شما با موفقیت انجام شد.'
            ];
        }
        return [
            'success'=>false,
            'msg'=>'خطا در انجام عملیات.'
        ];


    }
}
