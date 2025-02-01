<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::controller(SiteController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'about')->name('about-us');
    Route::get('/contact-us', 'contact')->name('contact-us');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/services', 'services')->name('services');
    Route::get('/privacy-policy', 'privacy_policy')->name('privacy-policy');
    Route::get('/terms-and-conditions', 'terms_and_conditions')->name('terms-and-conditions');
    Route::get('/cookie-policy', 'cookie_policy')->name('cookie-policy');
    Route::get('/why-choose-us', 'why_choose_us')->name('why-choose-us');

    Route::get('/service/{id}/{slug}', 'service')->name('service');
    Route::get('/article/{id}/{slug}', 'article')->name('article');
    Route::get('/project/{id}/{slug}', 'project')->name('project');

    Route::post('/contact-us-submission', 'contact_submission')->name('contact-us-submission');
});
