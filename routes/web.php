<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
*/

//use App\Http\Controllers\User\HomeController;
//use App\Http\Controllers\User\PostController;
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
/*
Route::get('/', function () {
    return view('blog/pages/home');
});
*/
/*
Route::get('/home', function () {
    return view('blog/pages/home');
})->name('home');
*/

//User Route
Route::group(['namespace' => 'App\Http\Controllers\User'],function(){
	Route::get('/','HomeController@index')->name('home','trang-chu');
	Route::get('post/{post}','PostController@post')->name('post');
	Route::get('danh-muc/{blog}','BlogController@blog')->name('blog','danh-muc');

	Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
	Route::get('post/category/{category}','HomeController@category')->name('category');


    Route::get('ve-blog', function () {
        return view('blog/pages/about');
    })->name('ve-blog');

    Route::get('lien-he', function () {
        return view('blog/pages/contact');
    })->name('lien-he');

    Route::get('danh-muc', function () {
        return view('blog/pages/blog');
    })->name('danh-muc');

	//vue routes
	Route::post('getPosts','PostController@getAllPosts');
	Route::post('saveLike','PostController@saveLike');
});
/*
Route::group(['namespace' => 'User'], function(){
    Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');


    Route::get('/blog', function () {
        return view('blog/pages/blog');
    })->name('blog');

    //Route::get('marketing/{post?}','App.Http.Controllers.User.PostController@post')->name('post');

    //Route::get('/marketing/{post?}', ['as' => 'marketing', 'uses' => [App\Http\Controllers\User\PostController::class, 'post']]);
    Route::get('marketing/{post}', [App\Http\Controllers\User\PostController::class, 'post'])->name('marketing');
    //Route::get('/marketing', 'UserPostController@post')->name('marketing');
    Route::get('/marketing', [App\Http\Controllers\User\PostController::class, 'index'])->name('marketing');
    /*
    Route::get('/blog', function () {
        return view('blog/pages/blog');
    })->name('blog');
    *
    Route::get('/contact', function () {
        return view('blog/pages/contact');
    })->name('contact');

    Route::get('/login', function () {
        return view('blog/pages/login');
    })->name('login');

    Route::get('/register', function () {
        return view('blog/pages/register');
    })->name('register');

    Route::get('/login_success', function () {
        return view('login_success');
    });
});
*/

//Admin Route
Route::group(['namespace' => 'App\Http\Controllers\Admin'],function(){
    Route::get('admin/home','HomeController@index')->name('admin.home');
	// Users Routes
	Route::resource('admin/user','UserController');
	// Roles Routes
	Route::resource('admin/role','RoleController');
	// Permission Routes
	Route::resource('admin/permission','PermissionController');
	// Post Routes
	Route::resource('admin/post','PostController');
	// Tag Routes
	Route::resource('admin/tag','TagController');
	// Category Routes
	Route::resource('admin/category','CategoryController');
	// Admin Auth Routes
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');

});


/*
Route::get('/admin/home', function () {
    return view('admin/pages/home');
})->name('post');
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index']);
