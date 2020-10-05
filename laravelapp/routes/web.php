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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/post', function () {
    return view('post/input');
});
Route::get('/post/input', 'inputController@index');
Route::get('/list', 'listController@index');
// Route::get('/post/input', function () {
//     return view('post/input');
// });

Route::get('/other', function () {
    return view('index');
});

Route::get('/testjs', function () {
    return view('test/js');
});
