<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/slideList', [\App\Http\Controllers\Main\SlideController::class, 'show'])->name('slideList');

Route::get('/threadList/{category?}/{subcategory?}', [\App\Http\Controllers\ThreadController::class, 'show'])->name('threadList');

Route::get('/sexes', [\App\Http\Controllers\Main\SlideController::class, 'showSexes'])->name('sexes');

Route::get('/member/{id}', [App\Http\Controllers\Main\MainController::class, 'showMember'])->name('member.id');
