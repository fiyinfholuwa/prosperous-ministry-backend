<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\EventAttendee;
use App\Models\ProgramEvent;
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

                $event_count = ProgramEvent::count();
                $attendance_count = EventAttendee::count();
                $view->with('event_count', $event_count);
                $view->with('attendance_count', $attendance_count);
            }
        });
    }
}
