<?php

namespace App\Http\Middleware\user;

use Closure;

class RedirectIfAuthenticated
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
        if (\Auth::check()) {
            return redirect()->route('user.dashboard'); # admin dashboard
        }
        return $next($request);
    }
}
