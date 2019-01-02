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
            'destroy', 'show'
        ]]
    );


    // Route::resource('/curriculum', 'CurriculumController');
    // Route::get('/curriculum', 'CurriculumController@index')->name('administrator.curriculum.index');
    Route::get('/curriculum/create', 'CurriculumController@create')->name('administrator.curriculum.create');
    Route::post('/curriculum', 'CurriculumController@store')->name('administrator.curriculum.store');
    // Route::get('/curriculum/{curriculum_id}', 'CurriculumController@show')->name('administrator.curriculum.show');
    Route::get('/curriculum/{curriculum_id}/edit', 'CurriculumController@edit')->name('administrator.curriculum.edit');
    Route::put('/curriculum/{curriculum_id}', 'CurriculumController@update')->name('administrator.curriculum.update');
    // Route::delete('/curriculum/{curriculum_id}', 'CurriculumController@destroy')->name('administrator.curriculum.destroy');


    Route::resource('/redsocial', 'RedSocialController', 
        ['names' => [
            'index' => 'administrator.redsocial.index',
            'create' => 'administrator.redsocial.create',
            'store' => 'administrator.redsocial.store',
            'edit' => 'administrator.redsocial.edit',
            'update' => 'administrator.redsocial.update'
        ]],
        ['except' => [ 'show', 'destroy' ]]
    );

});

Route::get('/curriculum/{user_id}', function ($id) {
    
    $curriculum = App\Curriculum::find($id);
    dd($curriculum->toArray());

})->name('curriculum.template');
