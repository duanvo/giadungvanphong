<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class CheckAdmin
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
        if(Auth::check()){
            $user_level = Auth::user()->level;
            return $next($request);
        }else{
            return redirect()->route('login');
        }
        return redirect()->route('home');
    }
}
