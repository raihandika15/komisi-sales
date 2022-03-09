<?php

namespace App\Http\Middleware;

// use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     // if (! $request->expectsJson()) {
    //     //     return route('login');
    //     // }
    //     if ($request->session()->get('login') != 1)
    //     {
    //         return redirect('/login');
    //     }
        
    //     return $request;
    // }

    public function handle($request, Closure $next)
    {
        if ($request->session()->get('login') != 1)
        {
            return redirect('/login');
        }

        return $next($request);
    }
}
