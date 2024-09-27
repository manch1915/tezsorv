<?php

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
        'user' => auth()->user(),
    ]);
});

Route::get('/threadList/{category?}/{subcategory?}', [\App\Http\Controllers\ThreadController::class, 'show']);
Route::get('/thread/fetchUrl', [\App\Http\Controllers\ThreadController::class, 'fetchUrl'])->name('thread.fetchUrl');
