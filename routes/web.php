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
        Route::get('admin/category/view', 'admin_category_view')->name('admin.category.view');
        Route::post('admin/category/add/', 'admin_category_add')->name('admin.category.add');
        Route::post('admin/category/delete/{id}', 'admin_category_delete')->name('admin.category.delete');
        Route::post('admin/category/update/{id}', 'admin_category_update')->name('admin.category.update');

        Route::get('admin/blog/view', 'admin_blog_view')->name('admin.blog.view');
        Route::get('admin/blog/edit/{id}', 'admin_blog_edit')->name('admin.blog.edit');
        Route::post('admin/add/blog/save', 'admin_add_blog')->name('admin.add.blog');
        Route::post('admin/blog/update/{id}', 'admin_blog_update')->name('admin.blog.update');
        Route::get('admin/blog/all', 'admin_blog_all')->name('admin.blog.all');
        Route::get('admin/comment/all', 'admin_comment_all')->name('admin.comment.all');
        Route::post('admin/blog/delete/{id}', 'admin_blog_delete')->name('admin.blog.delete');
        Route::post('admin/comment/delete/{id}', 'admin_comment_delete')->name('admin.comment.delete');


        Route::get('admin/testimonial/view', 'admin_testimonial_view')->name('admin.testimonial.view');
        Route::get('admin/testimonial/all', 'admin_testimonial_all')->name('admin.testimonial.all');
        Route::post('admin/testimonial/save/', 'admin_testimonial_save')->name('admin.testimonial.save');
        Route::get('admin/testimonial/edit/{id}', 'admin_testimonial_edit')->name('admin.testimonial.edit');
        Route::post('admin/testimonial/update/{id}', 'admin_testimonial_update')->name('admin.testimonial.update');
        Route::post('admin/testimonial/delete/{id}', 'admin_testimonial_delete')->name('admin.testimonial.delete');
    });



});

Route::controller(ContactController::class)->group(function () {

    Route::get('/admin/contact/all', 'get_all_message')->name('contact.all');
    Route::post('/admin/contact/delete/{id}', 'message_delete')->name('contact.delete');
    Route::get('/admin/booking/all', 'get_all_bookings')->name('booking.all');
    Route::post('/admin/booking/delete/{id}', 'message_delete')->name('booking.delete');
});

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/insights', 'insights')->name('insights');
    Route::get('/testimonials', 'testimonials')->name('testimonials');
    Route::get('/resources', 'resources')->name('resources');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/save', 'contact_save')->name('contact.save');
    Route::get('/booking', 'booking')->name('booking');
    Route::get('/pca', 'pca')->name('pca');
    Route::get('/nurse', 'nurse')->name('nurse');
    Route::get('/nursing', 'nursing')->name('nursing');
    Route::get('/policy', 'policy')->name('policy');
    Route::get('/terms', 'terms')->name('terms');
    Route::get('/pediatrics', 'pediatrics')->name('pediatrics');
    Route::get('/therapy', 'therapy')->name('therapy');
    Route::get('/live-in-care', 'live_care')->name('live.care');
    Route::post('/booking/save', 'booking_save')->name('booking.save');
});


Route::get('logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('logout');


require __DIR__.'/auth.php';
