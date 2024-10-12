<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::controller(\App\Http\Controllers\BlogController::class)->group(function () {
        Route::get('admin/event/view', 'admin_event_view')->name('admin.event.view');
        Route::get('admin/event/all', 'admin_event_all')->name('admin.event.all');
        Route::post('admin/event/save/', 'admin_event_save')->name('admin.event.save');
        Route::get('admin/event/edit/{id}', 'admin_event_edit')->name('admin.event.edit');
        Route::post('admin/event/update/{id}', 'admin_event_update')->name('admin.event.update');
        Route::post('admin/event/delete/{id}', 'admin_event_delete')->name('admin.event.delete');
        Route::post('admin/event/report', 'admin_attendee_report')->name('admin.attendee.report');


    });



});

Route::controller(ContactController::class)->group(function () {

    Route::get('/admin/attendance/all', 'get_all_message')->name('contact.all');
    Route::post('/admin/contact/delete/{id}', 'message_delete')->name('contact.delete');
});

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/event', 'event')->name('event');
    Route::get('/event/detail/{slug}', 'event_detail')->name('event.detail');

    Route::post('/attendance/save', 'attendance_save')->name('attendance.save');
});


Route::get('logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('logout');


require __DIR__.'/auth.php';
