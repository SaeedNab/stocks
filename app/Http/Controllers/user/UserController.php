<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    //
    public function dashboard()
    {
        return View('user/dashboard/index');
    }

    public function showTop()
    {
        return View('user.dashboard.top');
    }

    public function showBelow()
    {
        return View('user.dashboard.below');
    }
}
