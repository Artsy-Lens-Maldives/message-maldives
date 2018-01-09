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
Route::get('/blog-single', function () {
    return view('blog.detail');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('roles')->group(function () {
    Route::get('/user/{role}/{id}', function($id, $role) {
        $user = \App\User::find($id);
        $user->assignRole($role);
        return $user->getRoleNames();
    });
});

Route::prefix('admin')->group(function () {
    Route::get('login', function() {
        return view('admin.auth.login');
    });
    Route::get('register', function() {
        return view('admin.auth.register');
    });
    Route::get('home', function() {
        return view('admin.index');
    });
});

