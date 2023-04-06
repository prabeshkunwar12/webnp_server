<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Search\SearchController;


//

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


Route::get('/articleList', function () {
    return view('articleList');
})->name('articleList');

Route::post('/save_session_articles', [App\Http\Controllers\ArticlesController::class, 'setSessionValue'])->name('save_session_articles');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::resource('posts', 'App\Http\Controllers\PostsController');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});




