<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Articulo;
use DB;

use Carbon\Carbon;

class BlogController extends Controller
{
    
    public function index($month = null, $year = null)
    {
        if ($month === null && $year === null) $query_date = Carbon::now();
        else $query_date = Carbon::createFromDate(intval($year), intval($month));
        $date_format = $query_date->format('M, Y');
        $query_date_Y_m = $query_date->format('Y-m');
        $query_date = $query_date->format('Y-m-d');

        # Obtener todas las fechas hasta hoy y filtrar por Mes-Año
        $dates = DB::table('articulo')
                    ->selectRaw("DATE_FORMAT(fecha_publicacion, '%Y-%m') as date")
                    ->where('publicado', 1)
                    ->whereRaw('fecha_publicacion <= NOW()')
                    ->groupBy('date')
                    ->orderBy('date', 'asc')
                    ->get();

        $have_date = $dates->filter(function ($value, $key) use ($query_date_Y_m) {
            return $query_date_Y_m === $value->date;
        });

        if ( empty($have_date->toArray()) ) return view('site.blog.index', ['empty' => true]);

        $dates = $dates->toArray();
        
        # Obtener publicaciones solo del mes especificado y hasta el día de hoy
        $publications = DB::table('articulo')
                            ->selectRaw("id, titulo, alias, imagen, introduccion, DATE_FORMAT(fecha_publicacion, '%d') as day, DATE_FORMAT(fecha_publicacion, '%M %d, %Y') as date")
                            ->where('publicado', 1)
                            ->whereRaw("DATE_FORMAT(fecha_publicacion, '%Y-%m') = DATE_FORMAT('$query_date', '%Y-%m')")
                            ->whereRaw('fecha_publicacion <= NOW()')
                            ->orderBy('day', 'desc')
                            ->get()->toArray();

        return view('site.blog.index', compact('date_format', 'dates', 'publications'));
    }

    public function show($nombre_publicacion)
    {
        $article = Articulo::where('alias', $nombre_publicacion)->firstOrFail(['id', 'titulo', 'imagen', 'contenido', 'fecha_publicacion', 'usuario_id']);
        return view('site.article.index', compact('article'));
    }

}
