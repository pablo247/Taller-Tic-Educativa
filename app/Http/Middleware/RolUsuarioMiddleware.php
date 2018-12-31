<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class RolUsuarioMiddleware
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
        if ($request->user() && $request->user()->rol != 'super usuario')
        {
            return new Response(view('administrator.pages.unauthorized')->with('role', 'SUPER USUARIO'));
        }
        return $next($request);
    }
}
