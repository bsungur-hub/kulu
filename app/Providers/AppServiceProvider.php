<?php

namespace App\Providers;

use App\Models\Blog;
use Illuminate\Support\Facades\View;
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
        View::composer('layouts.footer', function ($view) {
            $recentBlogs = Blog::latest()->take(5)->get();
            $view->with('recentBlogs', $recentBlogs);

            if (app()->environment('production')) {
                \URL::forceScheme('https');
            }
        });

    }
}
