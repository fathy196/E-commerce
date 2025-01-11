<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProuductController;
use Illuminate\Support\Facades\Route;



//! for test only ----------------------------------------


// Display the upload form
Route::get('/upload', function () {
    return view('upload');
});

// Handle the file upload
Route::post('/upload', [ProuductController::class, 'uploadPhoto'])->name('photo.upload');


Route::get('/home', function () {
    return view('home');
});
// Route::get('/aboutus', function () {
//     return view('aboutus');
// });

// Route::get('/blog', function () {
//     return view('blog');
// });

// Route::get('/blogs', function () {
//     return view('blogs');
// });

// Route::get('/cart', function () {
//     return view('cart');
// });

// Route::get('/checkout', function () {
//     return view('checkout');
// });

// Route::get('/contactus', function () {
//     return view('contactus');
// });

// Route::get('/faq', function () {
//     return view('faq');
// });

// Route::get('/myaccount', function () {
//     return view('myaccount');
// });
// Route::get('/product', function () {
//     return view('product');
// });
// Route::get('/shop', function () {
//     return view('shop');
// });
// Route::get('/track', function () {
//     return view('track');
// });
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/wishlist', function () {
//     return view('wishlist');
// });
//!---------------------------------------------------------

// test middleware (is_admin)
// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth', 'is_admin'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {

    // Route::get('/home', function () {
    //     return view('home');
    // });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// require __DIR__ . '/auth.php';
