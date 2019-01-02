<?php

namespace App\Http\Middleware;

use Closure;
use App\Curriculum;

class FormCurriculumMiddleware
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
        # Verificar si existe un registro en la tabla Curriculum con id del usuario autenticado
        # Verificar que el curriculum al que intenta acceder pertenesca a el usuario autenticado

        $curriculum = Curriculum::find($request->user()->id);

        if ($curriculum)
        {
            return redirect()->route('administrator.curriculum.edit', $request->user()->id);
        }

        return $next($request);
    }
}
