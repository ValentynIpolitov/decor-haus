<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ContactPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/contacts', [\App\Http\Controllers\Admin\ContactsController::class, 'index'])->name('contacts');
});
require __DIR__.'/auth.php';


// // NEW routes
// Route::get('/new', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

