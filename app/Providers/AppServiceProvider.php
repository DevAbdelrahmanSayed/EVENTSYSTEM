<?php

namespace App\Providers;

use App\Models\Event;
use App\Models\Post;
use Auth;
use Illuminate\Support\ServiceProvider;
use View;

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
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $lastViewedPosts = Auth::user()->last_viewed_posts??now();
                $lastViewedEvents = Auth::user()->last_viewed_events??now();
                $newPostsCount = Post::where('created_at', '>', $lastViewedPosts)->count();
                $newEventsCount = Event::where('created_at', '>', $lastViewedEvents)->count();
                $view->with('newPostsCount', $newPostsCount)
                    ->with('newEventsCount', $newEventsCount);
            }


        });

    }
}
