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

/*Route::get('/', function () {
    return view('Dana Ashimova');
});*/

Route::get('/100', function () {
    return "100";
});

Route::get('user/{name?}',function($name="Dana"){
	return $name;
});

Route::get('/post/{id}', function ($id) {
    return "My id number is ". $id;
});

Route::get('login/{name}/{password?}', function ($name,$password) {
    return "Username is ".$name." password is ".$password;
})->where(['password'=>'[a-zA-Z0-9]+']);


