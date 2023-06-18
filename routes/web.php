<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Http\Controllers\Main\MainController as Main;

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


Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/catalog', [\App\Http\Controllers\IndexController::class, 'catalog'])->name('catalog');


Route::group(['prefix' => 'main', 'middleware' => 'auth'], function () {
    Route::get('/', [Main::class, 'index'])->name('main');
    Route::get('/member/{username}', [Main::class, 'member'])->name('member');
    Route::post('/avatarUpload', [Main::class, 'avatarUpload'])->name('avatarUpload');

    Route::get('/notifications', [Main::class, 'notificationsCount'])->name('notifications');

    Route::get('/thread/new', [\App\Http\Controllers\ThreadController::class, 'newThread'])->name('thread.new');
    Route::get('/thread/{id}', [\App\Http\Controllers\ThreadController::class, 'showThread'])->name('thread.view');
    Route::get('/threads/{category}/{subcategory?}', [\App\Http\Controllers\ThreadController::class, 'showThreads'])->where(['category' => '[0-9]+', 'subcategory' => '[0-9]+'])->name('thread.showThreads');
    Route::get('/threads/favorites', [\App\Http\Controllers\ThreadController::class, 'showFavorites'])->name('thread.showFavorites');
    Route::post('/thread/new', [\App\Http\Controllers\ThreadController::class, 'storeThread'])->name('thread.store');
    Route::post('/thread/uploadFile', [\App\Http\Controllers\ThreadController::class, 'uploadFile'])->name('thread.uploadFile');


    Route::post('/like', [App\Http\Controllers\LikeController::class, 'like'])->name('like');

    Route::post('addToFavorites', [App\Http\Controllers\FavoritesController::class, 'addToFavorites'])->middleware('can:add-to-favorites')->name('addToFavorites');

    Route::post('/comment/store', [\App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');

    Route::prefix('/account')->group(function () {
        Route::get('/personal-details', [Main::class, 'personalDetails'])->name('personalDetails');
        Route::get('/contact-details', [Main::class, 'contactDetails'])->name('contactDetails');
        Route::get('/upgrade', [Main::class, 'upgrade'])->name('upgrade');
        Route::post('/upgradeRole', [Main::class, 'upgradeRole'])->name('upgradeRole');
        Route::get('/security', [Main::class, 'security'])->name('security');
        Route::get('/notifications', [\App\Http\Controllers\AccountNotificationController::class, 'show'])->name('account-notification.show');
    });
});

require __DIR__ . '/auth.php';
