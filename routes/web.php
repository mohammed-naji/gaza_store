<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix(LaravelLocalization::setLocale())->group(function() {

    Route::get('/', [FrontController::class, 'index'])->name('front.index');
    Route::get('/about-us', [FrontController::class, 'about'])->name('front.about');
    Route::get('/products', [FrontController::class, 'products'])->name('front.products');
    Route::get('/products/{id}', [FrontController::class, 'products_single'])->name('front.products_single');
    Route::get('/category/{id}', [FrontController::class, 'category'])->name('front.category');
    Route::get('/contact-us', [FrontController::class, 'contact'])->name('front.contact');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
});


// Api test routes
Route::get('old-products', [APIController::class, 'products']);
Route::get('weather', [APIController::class, 'weather']);

// test notifications
Route::get('/send', [NotificationController::class, 'send']);
//
