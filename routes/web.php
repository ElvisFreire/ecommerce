<?php

use Illuminate\Support\Facades\Route;

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
Route::bind('product', function($slug){
    return App\Product::where('slug',$slug)->first();
});

Route::get('/ejm', function () {
    return view('ejemplo');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/form-sorteo', function () {
    return view('sorteo');
});

Route::get('/comoComprar', function () {
    return view('comoComprar');
});
Route::get('/contactenos', function () {
    return view('contactenos');
});

Route::get('/miCompra', function () {
    return view('listaCompra');
});

Route::get('/', 'HomeController@index');
Route::get('/producto', 'ProductosController@index');
Route::get('/aggitem', 'ListaController@aggitem');
Route::get('/brritem', 'ListaController@brritem');
Route::get('/verlista', 'ListaController@verlista');

Route::post('/form-val','SorteoController@addForm');