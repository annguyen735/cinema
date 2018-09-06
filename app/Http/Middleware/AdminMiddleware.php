<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if (Auth::check()) {
            if( Auth::user()->is_active == User::IS_ACTIVE) {
                if(Auth::user()->role == User::IS_ADMIN) {
                    return $next($request);
                }
                return redirect('/');
            }
            return view('confirm.confirm');            
        }
        return redirect('/login');
    }
}
