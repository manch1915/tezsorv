<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Main\SlideController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\WallController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/slideList', [SlideController::class, 'show'])->name('slideList');

Route::get('/threadList/{category?}/{subcategory?}', [ThreadController::class, 'show'])->name('threadList');

Route::get('wall/{id}', [WallController::class, 'index'])->name('wall.index');

Route::get('/sexes', [SlideController::class, 'showSexes'])->name('sexes');

Route::get('/member/{username}', [App\Http\Controllers\Main\MainController::class, 'showMember'])->name('member.username');
