<?php

use App\Http\Controllers\Main\MainController as Main;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
    Route::get('/catalog', [\App\Http\Controllers\IndexController::class, 'catalog'])->name('catalog');
});

Route::group(['prefix' => 'main', 'middleware' => 'auth'], function () {
    Route::get('/', [Main::class, 'index'])->name('main');
    Route::get('/member/{id}', [Main::class, 'member'])->name('member');
    Route::post('/avatarUpload', [Main::class, 'avatarUpload'])->name('avatarUpload');

    Route::get('/thread/new', [\App\Http\Controllers\ThreadController::class, 'newThread'])->name('thread.new');
    Route::get('/thread/{id}', [\App\Http\Controllers\ThreadController::class, 'showThread'])->name('thread.view');
    Route::get('/threads/{category}/{subcategory?}', [\App\Http\Controllers\ThreadController::class, 'showThreads'])->where(['category' => '[0-9]+', 'subcategory' => '[0-9]+'])->name('thread.showThreads');
    Route::post('/thread/new', [\App\Http\Controllers\ThreadController::class, 'storeThread'])->name('thread.store');


    Route::post('/thread/uploadFile', [\App\Http\Controllers\ThreadController::class, 'uploadFile'])->name('thread.uploadFile');

    Route::post('/like', [App\Http\Controllers\LikeController::class, 'like'])->name('like');

    //account settings routes
    Route::get('/account/personal-details', [Main::class, 'personalDetails'])->name('personalDetails');
    Route::get('/account/contact-details', [Main::class, 'contactDetails'])->name('contactDetails');
    Route::get('/account/upgrade', [Main::class, 'upgrade'])->name('upgrade');
    Route::get('/account/security', [Main::class, 'security'])->name('security');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
