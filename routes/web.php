<?php

use App\Http\Controllers\AccountNotificationController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ThreadController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Main\MainController as Main;

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


Route::get('/', [IndexController::class, 'index'])->name('home');


Route::group(['prefix' => 'main', 'middleware' => 'auth'], function () {
    Route::get('/', [Main::class, 'index'])->name('main');
    Route::get('/member/{username}', [Main::class, 'member'])->name('member');
    Route::post('/avatarUpload', [Main::class, 'avatarUpload'])->name('avatarUpload');

    Route::get('/notifications', [Main::class, 'notificationsCount'])->name('notifications');

    Route::get('/thread/new', [ThreadController::class, 'newThread'])->name('thread.new');
    Route::get('/thread/{id}', [ThreadController::class, 'showThread'])->name('thread.view');
    Route::get('/threads/{category}/{subcategory?}', [ThreadController::class, 'showThreads'])->where(['category' => '[0-9]+', 'subcategory' => '[0-9]+'])->name('thread.showThreads');
    Route::get('/threads/favorites', [ThreadController::class, 'showFavorites'])->name('thread.showFavorites');
    Route::post('/thread/new', [ThreadController::class, 'storeThread'])->name('thread.store');
    Route::post('/thread/uploadFile', [ThreadController::class, 'uploadFile'])->name('thread.uploadFile');


    Route::post('/like', [App\Http\Controllers\LikeController::class, 'like'])->name('like');

    Route::resource('wall', App\Http\Controllers\WallController::class)->except('index');

    Route::post('addToFavorites', [App\Http\Controllers\FavoritesController::class, 'addToFavorites'])->middleware('can:add-to-favorites')->name('addToFavorites');

    Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');

    Route::prefix('/account')->group(function () {
        Route::get('/personal-details', [Main::class, 'personalDetails'])->name('personalDetails');
        Route::get('/contact-details', [Main::class, 'contactDetails'])->name('contactDetails');
        Route::get('/upgrade', [Main::class, 'upgrade'])->name('upgrade');
        Route::post('/upgradeRole', [Main::class, 'upgradeRole'])->name('upgradeRole');
        Route::get('/security', [Main::class, 'security'])->name('security');
        Route::get('/notifications', [AccountNotificationController::class, 'show'])->name('account-notification.show');
    });
});

require __DIR__ . '/auth.php';
