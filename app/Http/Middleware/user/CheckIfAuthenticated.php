<?php

namespace App\Http\Middleware\user;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('user.auth.login_form'); # admin login form
        }
        return $next($request);
    }
}
