<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class checkUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (Sentinel::forceCheck()) {
            return $next($request);
        } else {
            return redirect('/login');
        }


    }
}
