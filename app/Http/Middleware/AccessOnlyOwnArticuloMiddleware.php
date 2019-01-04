<?php

namespace App\Http\Middleware;

use Closure;
use App\Articulo;
use \Illuminate\Http\Response;

class AccessOnlyOwnArticuloMiddleware
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
        if ($request->user()->rol == 'super usuario') return $next($request);

        $articulo = Articulo::find(intval($request->route()->articulo));

        if (!$articulo) return new Response(view('administrator.pages.unauthorized'));

        if ( intval($articulo->usuario_id) !== $request->user()->id )
        {
            return new Response(view('administrator.pages.unauthorized'));
        }

        return $next($request);
    }
}
