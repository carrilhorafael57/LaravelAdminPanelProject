<?php

use App\Http\Controllers\CategoryController;
use App\Models\Category;
use App\Models\Post;
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

Route::get('/', function () {
    return view('welcome');
});

//creating a group of logged user in order to access the dashboard for edting
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {

        $post = Post::all();

        return view('dashboard', compact('posts'));
    })->name('dashboard');

    Route::group(['middleware' => 'is_admin'], function () {
        Route::resource('categories', \App\Http\Controllers\CategoryController::class);
        Route::resource('posts', \App\Http\Controllers\PostController::class);
    });
});





require __DIR__ . '/auth.php';
