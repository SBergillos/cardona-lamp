<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

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


Route::get('/hello', function () {
    return view('hello');
});

Route::get('/error', function () {
    throw new Exception('Error!');
});

Route::get('/hello_report', function () {
    try {
        throw new Exception('Someone accessed hello world page! Report, but show the view!');
    } catch (Throwable $e) {
        report($e);
    }
    return view('hello');
});
