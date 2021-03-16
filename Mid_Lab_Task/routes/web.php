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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@verify');
Route::get('/home/user','HomeController@user');
Route::get('/home/admin','HomeController@admin');
Route::get('/logout','LogoutController@index');
Route::get('/registration','RegistrationController@index');
Route::post('/registration','RegistrationController@store');
Route::get('/system/sales','SalesController@index');
Route::get('/sales/physical_store','SalesController@physicalstore');
Route::get('/sales/social_media','SalesController@socialmedia');
Route::get('/sales/ecommerce','SalesController@ecommerce');
