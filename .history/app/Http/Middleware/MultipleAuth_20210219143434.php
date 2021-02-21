<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MultipleAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->level == 'user' && auth()->user()->level == null) {
            return redirect('/');
        }
        return $next($request);
    }
}
