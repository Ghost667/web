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
  return view('routes');
});

Route::get('/admin', function(){
	return view('admin');
});

Route::get('/inicio', function(){
	return view('inicio');
});

Route::get('/login', function(){
	return view('login');
});

Route::get('/register', function(){
	return view('register');
});

Route::get('/inicio/sistema', function(){
	return view('sistema');
});

Route::get('/knowledge', function(){
	return view('knowledge');
});

Route::get('/inicio/casos', function(){
	return view('casos');
});

Route::get('/login/confirmation', function(){
	return view('confirmation');
});

Route::get('/ticket', function(){
	return view('ticket');
});

Route::get('/dashboard', function(){
	return view('dashboard');
});

Route::post('/user','loginController@login');

Route::post('/registerUser','singupController@register');
