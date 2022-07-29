<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// Website pages
Route::get('/', function () {
        return Inertia::render('Home');
    }
)->name( 'homepage' );

Route::get('/technologies', function () {
    return Inertia::render('Technologies');
}
)->name( 'technologies' );

Route::get('/house-plans', function () {
        return Inertia::render('HousePlans');
    }
)->name( 'house-plans' );

Route::get('/gallery', function () {
        return Inertia::render('Gallery');
    }
)->name( 'gallery' );

Route::get('/prices', function () {
    return Inertia::render('Prices');
}
)->name( 'prices' );

Route::get('/contact', function () {
    return Inertia::render('Contact');
}
)->name( 'contact' );
