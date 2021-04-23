<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DevGate
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
        if (! testing() && ! session()->has('dev'))
            return redirect(route('dev.index'));

        return $next($request);
    }
}
