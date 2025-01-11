<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProuductController;
use Illuminate\Support\Facades\Route;



//! for test only ----------------------------------------
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/aboutus', function () {
//     return view('aboutus');
// });

// Route::get('/blog', function () {
//     return view('blog');
// });

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

// Route::get('/track', function () {
//     return view('track');
// });
Route::get('/cart', function () {
    return view('cart');
})->name('cart');

// Route::get('/checkout', function () {
//     return view('checkout');
// });


Route::get('/myaccount', function () {
    return view('myaccount');
})->name('myaccount');
// Route::get('/product', function () {
//     return view('product');
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
