<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        // return $next($request);
        if(in_array($request->user()->level,$levels)){
            return $next($request);
        }
        return redirect('/');

    // $roles = array_slice(func_get_args(), 2);

    // foreach ($roles as $role) { 
    //     $user = \Auth::user()->role;
    //     if( $user == $level){
    //         return $next($request);
    //     }
    // }
    }
}
