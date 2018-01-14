<?php

use App\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Mohamedathik\PhotoUpload\Upload;

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
    Route::get('/create/{new_role}', function($new_role) {
        $role = Role::create(['name' => $new_role]);
        return redirect('/home');
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


Route::get('/photo', function () {
    return view('photoTest');
});

Route::post('/photo', function (Request $request) {
    // The original file from rquest
    $file = $request->image;

    // Give it any file name you want (make sure to include the extension)
    $file_name = $file->getClientOriginalName();

    // Location that the file would be upload (Do not include the filename)
    $location = "/images";

    // Uploading of orignal image (this would return the location for original image including the filename)
    $url_original = Upload::upload_original($file, $file_name, $location);

    // Uploading of thumnail image (this would return the location for thumbnail image including the filename)
    $url_thumbnail = Upload::upload_thumbnail($file, $file_name, $location);

    echo $url_original."<br>".$url_thumbnail;
});

Route::get('/photo/delete', function () {
    // Deleting the thumbnail imaege
    $delete_thumbnail_image = Upload::delete_image('/images/original/1515931209-ID Back.JPG');
    // The variable above will always return a true or false vakue
    // true if image is deleted 
    // and false if image could not be found
    if ($delete_thumbnail_image) {
        return 'Successfully deleted';
    } else {
        return 'Image could not be found';
    }
});