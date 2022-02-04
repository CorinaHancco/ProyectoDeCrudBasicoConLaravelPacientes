<?php

use App\Http\Controllers\ComentarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',HomeController::class)->name('home');

Route::get('comentarios',[ComentarioController::class,'index'])->name('comentarios.index');
Route::get('comentarios/create',[ComentarioController::class,'create'])->name('comentarios.create');
Route::post('comentarios/create',[ComentarioController::class,'store'])->name('comentarios.store');
Route::get('comentarios/{comentarios}',[ComentarioController::class,'show'])->name('comentarios.show');

Route::get('comentarios/{comentarios}/edit',[ComentarioController::class,'edit'])->name('comentarios.edit');

Route::put('comentarios/{comentarios}',[ComentarioController::class,'update'])->name('comentarios.update');

Route::delete('comentarios/{comentarios}',[ComentarioController::class,'destroy'])->name('comentarios.destroy');


//Route::resource('comentarios',ComentarioController::class); // TODAS LAS RUTAS EN UNA LINEA



/*Route::get('cursos/create', function () {
    return 'Creacion de cursos';
});
Route::get('cursos/{curso}', function ($curso) {
    return "El curso es: $curso";
});
Route::get('cursos/{curso}/{categoria}', function ($curso,$categoria) {
    return "El curso es: $curso <br> Pertenece a la categoria: $categoria";
});
Route::get('cursos/{curso}/{categoria}', function ($curso,$categoria) {
    if($curso){

    }
});*/
