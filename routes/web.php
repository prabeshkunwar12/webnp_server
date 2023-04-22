<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Search\SearchController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\DiscussionPostController;
use App\Http\Controllers\DiscussionCommentController;
use App\Http\Controllers\DiscussionLikeController;


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

Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);

Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
            ->name('password.request');

Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('password.email');

Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
            ->name('password.reset');

Route::post('reset-password', [NewPasswordController::class, 'store'])
            ->name('password.store');


Route::resource('discussion_posts', DiscussionPostController::class)->middleware('auth');
Route::post('discussion_posts/{discussion_post}/comments', [DiscussionCommentController::class, 'store'])->middleware('auth')->name('discussion_comments.store');
Route::post('discussion_posts/{discussion_post}/likes', [DiscussionLikeController::class, 'store'])->middleware('auth')->name('discussion_likes.store');
Route::delete('discussion_posts/{discussion_post}/likes', [DiscussionLikeController::class, 'destroy'])->middleware('auth')->name('discussion_likes.destroy');
            
Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('verify-email', [EmailVerificationPromptController::class, 'invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, 'invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});




