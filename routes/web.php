<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('homepage');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/aboutus', function () {
    return view('aboutUs');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/contact', function () {
    return view('contact');
});

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




