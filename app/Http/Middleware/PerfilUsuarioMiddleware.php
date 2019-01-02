<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class PerfilUsuarioMiddleware
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
        if ( intval($request->route()->usuario) !== $request->user()->id && $request->user()->rol != 'super usuario' )
        {
            return new Response(view('administrator.pages.unauthorized'));
        }

        return $next($request);
    }
}
