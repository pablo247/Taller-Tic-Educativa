<?php

namespace App\Http\Middleware;

use Closure;
use App\Curriculum;

class HaveCurriculumMiddleware
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
        $curriculum = Curriculum::find($request->user()->id);

        if ( ! $curriculum)
        {
            return redirect()->route('administrator.curriculum.create')->with('warning', 'Necesita generar su curriculum antes de crear un artículo.');
        }

        return $next($request);
    }
}
