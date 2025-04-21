<?php

use App\Models\Country;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/country/{slug}', function ($slug) {
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

Route::get('/about', function () {
    return view('about');
});
