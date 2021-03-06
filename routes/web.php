<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PrivateController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

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

// Route::resource('/guitars', GuitarController::class)->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/private', 'PrivateController@index')->middleware('auth');

Route::get('/public', 'PublicController@index');




Route::get('/guitars', 'DashboardController@index')->name('public.guitars.index');

Route::get('/guitars/{guitar}', 'DashboardController@show')->name('public.guitars.show');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {

        Route::resource('/guitars', GuitarController::class);

});
