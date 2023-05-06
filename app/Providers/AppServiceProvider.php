<?php

namespace App\Providers;

use App\Models\Like;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Like::created(function ($like) {
            $likedUser = $like->likedUser;
            $likedUser->increment('likes_count');
        });

        Like::deleted(function ($like) {
            $likedUser = $like->likedUser;
            $likedUser->decrement('likes_count');
        });
    }

}
