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

Route::get('/projects', function () {
    return Inertia::render('Projects');
}
)->name( 'projects' );

Route::get('/materials', function () {
        return Inertia::render('Materials');
    }
)->name( 'materials' );

Route::get('/contact', function () {
    return Inertia::render('Contact');
}
)->name( 'contact' );
