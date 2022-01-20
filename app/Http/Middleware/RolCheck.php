<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RolCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (auth()->user()['role'] === $role) {
            return $next($request);
        } else {
            return redirect('/');
        }
    }

//     public function handle($request, Closure $next, $rol)
// {
//  if (auth()->user()->rol === $rol)
//  return $next($request);
//  else
//  return redirect('/');
// }


    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('login');
    //     }
    // }
}
