<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Search\SearchController;


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
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/import', function () {
    return view('import');
});


Route::get('/importPosts', function () {
    return view('homepage');
});
Route::post('/importPosts', [PostsController::class, 'importPosts'])->name('importPosts');


Route::get('/tools', function () {
    return view('tools');
});

Route::get('/nursePost', function () {
    return view('nursePost');
});



Route::get('/education', function () {
    return view('education');
});

Route::get('/aboutus', function () {
    return view('aboutUs');
});

Route::get('/articles', function () {
    return view('Articles');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/search', [PostsController::class, 'create'])->name('search.create');

Route::get('/search', [SearchController::class, 'display'])->name('search.display');


Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::resource('posts', 'PostsController');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
