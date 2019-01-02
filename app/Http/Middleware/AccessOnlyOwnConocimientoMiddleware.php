<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Http\Response;

use App\Conocimiento;

class AccessOnlyOwnConocimientoMiddleware
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
        $conocimiento = Conocimiento::find(intval($request->route()->conocimiento));

        if (!$conocimiento) return new Response(view('administrator.pages.unauthorized'));

        if ( intval($conocimiento->curriculum_id) !== $request->user()->id )
        {
            return new Response(view('administrator.pages.unauthorized'));
        }

        return $next($request);
    }
}
