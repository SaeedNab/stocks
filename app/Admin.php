<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticable
{
    //
    use Notifiable;
//    public $primaryKey = 'id';
    protected $guard = 'admin';
    protected $table = 'admins';

    protected $fillable = ['name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
