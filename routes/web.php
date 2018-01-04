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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog-single', function () {
    return view('blog.detail');
});

Route::get('/user/{role}/{id}', function($id, $role) {
    $user = \App\User::find($id);
    $user->assignRole($role);
    return $user->getRoleNames();
});