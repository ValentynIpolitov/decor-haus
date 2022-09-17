<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ContactPageController;

// Website pages
Route::get('/', function () {
        return Inertia::render('Home');
    }
)->name( 'homepage' );

Route::get('/explore-sip', function () {
    return Inertia::render('Technologies');
}
)->name( 'technologies' );

Route::get('/projects', function () {
    return Inertia::render('Projects');
}
)->name( 'projects' );

Route::get('/services', function () {
        return Inertia::render('Services');
    }
)->name( 'materials' );

Route::get('/contact', [ContactPageController::class, 'index'])->name( 'contact' );
Route::post('/contact', [ContactPageController::class, 'store']);
