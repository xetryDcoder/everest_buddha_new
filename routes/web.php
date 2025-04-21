<?php

use App\Http\Controllers\ContactController;
use App\Models\Country;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/country/{slug}', function ($slug) {
    // Assuming you have a Country model and you want to fetch the country by slug
    $country = Country::where('slug', $slug)->firstOrFail();
    return view('country', compact('country'));
   
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/scholarships', function () {
    return view('scholarships');
});

Route::get('/ielts', function () {
    return view('ielts');
});

Route::get('/gre', function () {
    return view('gre');
});

Route::get('/pte', function () {
    return view('pte');
});

Route::get('/gmat', function () {
    return view('gmat');
});

Route::get('/about', function () {
    return view('about');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
