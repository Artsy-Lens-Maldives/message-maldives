<?php

use App\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

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
/*
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::get('admin/login', function() {
    if (!Auth::check()) {
        return view('admin.auth.login');    
    } else {
        return redirect('home');
    }
});
Route::get('admin/register', function() {
    if (!Auth::check()) {
        return view('admin.auth.register');
    } else {
        return redirect('home');
    }
});
Route::get('/home', 'HomeController@index')->name('home');
/*
|--------------------------------------------------------------------------
*/
Route::prefix('roles')->group(function () {
    Route::get('/user/{role}/{user}', function($role, User $user) {
        $user->syncRoles([$role]);
        return $user->getRoleNames();
    });
});
/*
|--------------------------------------------------------------------------
*/
Route::middleware(['role:admin'])->prefix('admin')->group(function () {
    Route::get('/', function() {
        return redirect('admin/home');
    });
    Route::get('home', function() {
        return view('admin.index');
    });
    /*
    |--------------------------------------------------------------------------
    */
    Route::prefix('users')->group(function () {
        Route::prefix('role')->group(function () {
            Route::get('/{role}/{user}', function($role, User $user) {
                $user->syncRoles([$role]);
                return $user->getRoleNames();
            });
            Route::get('/{user}', function(User $user) {
                return $user->getRoleNames();
            });
        });
        /*
        |--------------------------------------------------------------------------
        */
        Route::get('/', function() {
            $users = \App\User::all();
            $roles = ['client', 'admin'];
            return view('admin.users.index', compact('users', 'roles'));
        });
        Route::get('/edit/{user}', function(User $user) {
            $roles = ['client', 'admin'];
            $user_role = $user->getRoleNames();
            return view('admin.users.edit', compact('user', 'roles', 'user_role'));
        });
        Route::post('/edit/{user}', function(User $user, Request $request) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->syncRoles([$request->role]);
            return redirect('admin/users');
        });
        Route::get('/delete/{user}', function(User $user) {
            return 'Fake Deleted User (Temp for testing only)';
        });
        /*
        |--------------------------------------------------------------------------
        */
    });
});

