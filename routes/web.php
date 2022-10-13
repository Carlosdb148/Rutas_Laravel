<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyController;
use App\Http\Controllers\BikeController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//ruta a la que se llega con el metodo get y la ruta es /ruta1 y devuelve el texto hola mundo
Route::get('ruta1', function () {
 return 'Hello World';
});

Route::get('ruta2', function () {
    return view('welcome');
});

Route::get('bike', function () {
    return view('bike.index');
});

Route::delete('delete', [DummyController::class ,'delete']) -> name('dummy.delete');//[controlador, metodo]
Route::get('get', [DummyController::class , 'get']) -> name('dummy.get');
Route::post('post', [DummyController::class , 'post']) -> name('dummy.post');
Route::put('put', [DummyController::class , 'put']) -> name('dummy.put');
Route::any('any', [DummyController::class , 'any']) -> name('dummy.any');

//Route::resource('bike', BikeController::class) -> name('bike.index');
Route::delete('bike/{id}', [BikeController::class ,'destroy']) -> name('bike.destroy');//[controlador, metodo]
Route::get('bike/{id}/edit', [BikeController::class , 'edit']) -> name('bike.edit');
Route::get('show/{id}', [BikeController::class , 'show']) -> name('bike.show');
Route::get('bike/create', [BikeController::class , 'create']) -> name('bike.create');
