<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Booking;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
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
        view()->composer('*', function ($view) {

            if (Auth::check()) {

                $blog_count = Blog::count();
                $booking_count = Booking::count();
                $contact_count = Contact::count();
                $view->with('blog_count', $blog_count);
                $view->with('booking_count', $booking_count);
                $view->with('contact_count', $contact_count);
            }
        });
    }
}
