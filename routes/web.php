<?php

/*
Route::get('/users', ['uses' => 'UsersController@index', 'as' => 'users.index']);

Route::get('/users/create', ['uses' => 'UsersController@create', 'as' => 'users.create']);
Route::post('/users',['uses' => 'UsersController@store', 'as' => 'users.store']);

Route::get('/users/{user}', ['uses' => 'UsersController@show', 'as' => 'users.show']);

Route::get('/users/{user}/edit', ['uses' => 'UsersController@edit', 'as' => 'users.edit']);
// method put
Route::put('/users/{user}',['uses' => 'UsersController@update', 'as' => 'users.update']);

// method delete
Route::delete('/users/{user}',['uses' => 'UsersController@delete', 'as' => 'users.delete']);
*/

Route::get('/login', ['uses' => 'LoginController@showlogin', 'as' => 'login'])->middleware('guest');
Route::post('/login', ['uses' => 'LoginController@login', 'as' => 'login.store'])->middleware('guest');
Route::post('/logout', ['uses' => 'LoginController@logout', 'as' => 'logout'])->middleware('auth');
                              
Route::get('/register', ['uses' => 'RegisterController@showRegister', 'as' => 'register']);
Route::post('/register', ['uses' => 'RegisterController@register', 'as' => 'register.register']);

Route::get('home',function(){return view ('home');})->name('home')->middleware('auth');
