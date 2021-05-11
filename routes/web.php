<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/home', [HomeController::class, 'home']);
Route::get('/about', [HomeController::class, 'about'])->name('post.index');
// Route::get('/contact', [HomeController::class, 'contact'])->name('newspost.index');
Route::get('/newspost', [HomeController::class, 'contact'])->name('newspost.index');

//News Crud
Route::get('/newspost/create', [HomeController::class, 'create'])->name('newspost.create');
//Save the data
Route::post('/newspost/save', [HomeController::class, 'save'])->name('newspost.save');

Route::get('/newspost/{slug}/create', [HomeController::class, 'edit'])->name('newspost.edit');
//Update
Route::get('/newspost/update', [HomeController::class, 'edit'])->name('newspost.update');


//News Post
Route::get('/newspost/{slug}', [HomeController::class, 'newspost'])->name('newspost.single');





//Blog Post
Route::get('/blog', [HomeController::class, 'blog_post']);
Route::get('/postslug/{slug}', [HomeController::class, 'blog_post_single']);
Route::get('/posts/{slug}', [HomeController::class, 'posts'])->name('post.single');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
