<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
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
        if(session('usuario')) {
            return $next($request);
        } else {
            return redirect()->route('site.login')->with('error', 'Usuario nao autenticado!');
        } 
    }
}
