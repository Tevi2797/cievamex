<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class LostresMiddleware
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
        if(Auth::check() && Auth::user()->tipo=='Administrador' || Auth::user()->tipo=='campo'
            || Auth::user()->tipo=='tecnico')
            return $next($request);

        return redirect('alertas');
    }
}
