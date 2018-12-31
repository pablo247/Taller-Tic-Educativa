<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

# Rutas del Layout de la Aplicaión (Páginas Estaticas)
Route::prefix('template')->group(function () {

    Route::view('/blog', 'template.blog.index');
    Route::view('/article', 'template.article.index');
    Route::view('/cv', 'template.cv.index');
    Route::view('/administrator', 'template.administrator.dashboard');

});


#-------------------------------------------------------------
#
# Inicio de rutas del aplicativo
#
#-------------------------------------------------------------

Route::prefix('administrator')->group(function () {

    Auth::routes();
    Route::match(['get', 'post'], 'register', function(){ 
        return redirect('/'); 
    });
    
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('/usuario', 'UsuarioController', 
        ['except' => [
            'destroy'
        ]]
    );

});
