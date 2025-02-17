<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::controller(SiteController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'about')->name('about-us');
    Route::get('/contact-us', 'contact')->name('contact-us');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/case-studies', 'case_studies')->name('case-studies');
    Route::get('/features', 'features')->name('features');
    Route::get('/how-does-it-work', 'how_does_it_work')->name('how-does-it-work');

    Route::get('/feature/{id}/{slug}', 'feature')->name('feature');
    Route::get('/case-study/{id}/{slug}', 'case_study')->name('case-study');
    Route::get('/project/{id}/{slug}', 'project')->name('project');

    Route::post('/contact-us-submission', 'contact_submission')->name('contact-us-submission');
});
