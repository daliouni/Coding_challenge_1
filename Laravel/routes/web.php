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
use App\Http\Controllers\CategoriesController;
Route::get('/', function () {
    return view('welcome');
});
route::get('/categories',function($data){
    return Response::json(array('branche' => 'jhkjjhk ','gf' => 404));}
);

Route::get('/categories', [CategoriesController::class,'show']);
    