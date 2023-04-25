<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Http\Controllers\DashboardController as Dashboard;
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
Route::get('/logout', function (){
    \Illuminate\Support\Facades\Auth::logout();
});

Route::group(['prefix' => 'main', 'middleware' => 'auth'], function (){
    Route::get('/', [Main::class, 'index'])->name('main');
    Route::get('/member/{id}', [Main::class, 'member'])->name('member');
    Route::post('/avatarUpload', [Main::class, 'avatarUpload'])->name('avatarUpload');

    //account settings routes
    Route::get('/account/personal-details', [Main::class, 'personalDetails'])->name('personalDetails');
    Route::get('/account/contact-details', [Main::class, 'contactDetails'])->name('contactDetails');
    Route::get('/account/upgrade', [Main::class, 'upgrade'])->name('upgrade');
    Route::get('/account/security', [Main::class, 'security'])->name('security');
});

Route::group(['prefix' => 'dashboard'],function (){
    Route::get('/', [Dashboard::class, 'index'])->name('dashboard');
    Route::get('/cheatsheet', [Dashboard::class, 'cheatsheet'])->name('cheatsheet');
    Route::get('/tables',[Dashboard::class, 'tables'])->name('tables');
    Route::get('/forms', [Dashboard::class, 'forms'])->name('forms');
    Route::get('/ui', [Dashboard::class, 'ui'])->name('ui');
    Route::get('/responsive', [Dashboard::class, 'responsive'])->name('responsive');
    Route::get('/style', [Dashboard::class, 'style'])->name('style');
    Route::get('/profile', [Dashboard::class, 'profile'])->name('profile');
    Route::get('/error', [Dashboard::class, 'error'])->name('error');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
