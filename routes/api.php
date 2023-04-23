<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/user', function () {
    return response()->json([
        'authenticated' => auth()->check(),
        'user' => auth()->user()
    ]);
});
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::get('/slideList', [\App\Http\Controllers\Main\SlideController::class, 'show']);

Route::get('/member/{id}', [App\Http\Controllers\Main\MainController::class, 'showMember']);
