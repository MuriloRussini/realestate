<?php

use Illuminate\Support\Facades\Route;

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

// Dashboard
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'is_admin'],
    'as' => 'admin.'
], function() {
    Route::get('/', function () {
        return view('admin/dashboard');
    })->name('dashboard');

    Route::group([
        'prefix' => 'listings',
        'as' => 'listings.'
    ], function(){
        Route::get('/', [\App\Http\Controllers\Admin\ListingController::class, 'index'])->name('index');
        
        Route::get('/create', [\App\Http\Controllers\Admin\ListingController::class, 'create'])->name('create');

        Route::post('/', [\App\Http\Controllers\Admin\ListingController::class, 'store'])->name('store');

        Route::get('/{slug}/{id}/edit', [\App\Http\Controllers\Admin\ListingController::class, 'edit'])->name('edit');

        Route::put('/{slug}/{id}', [\App\Http\Controllers\Admin\ListingController::class, 'update'])->name('update');

        Route::get('/{slug}/{id}/delete', [\App\Http\Controllers\Admin\ListingController::class, 'destroy'])->name('delete');

        // Photo Listing
        
        Route::get('/{slug}/{id}/photos', [\App\Http\Controllers\Admin\PhotoController::class, 'index'])->name('photos');
        
        Route::get('/{slug}/{id}/photos/create', [\App\Http\Controllers\Admin\PhotoController::class, 'create'])->name('photos.create');
        
        Route::post('/{slug}/{id}/photos', [\App\Http\Controllers\Admin\PhotoController::class, 'store'])->name('photos.store');
        
        Route::get('/{slug}/{id}/photos/{photo_id}/delete', [\App\Http\Controllers\Admin\PhotoController::class, 'destroy'])->name('photos.delete');
        
        Route::get('/{slug}/{id}/photos/{photo_id}/featured', [\App\Http\Controllers\Admin\PhotoController::class, 'featured'])->name('photos.featured');
    });
});


// Home Page
Route::get('/', function () {
    return view('pages/home');
});

// Show single listing
Route::get('/listing/{slug}/{id}', function () {
    return view('pages/single-listing');
});

// Show all listings
Route::get('/{property_type}/{listing_type}/{city}', function () {
    return view('pages/listings');
})->name('listings');

// // User Login
// Route::get('/home/login', function () {
//     return view('pages/login');
// });

// // User Register
// Route::get('/home/register', function () {
//     return view('pages/register');
// });

// User Saved Listings
Route::get('/account', function () {
    return view('pages/saved-listings');
})->name('account');

// User Showing Status
Route::get('/account/show-status', function () {
    return view('pages/show-status');
})->name('show-status');

require __DIR__.'/auth.php';

