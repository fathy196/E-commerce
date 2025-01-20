<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProuductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/shop', [ProuductController::class, 'index'])->name('shop');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/blog', action: function () {
    return view('blog');
})->name('blog');

Route::get('/blogs', action: function () {
    return view('blogs');
})->name('blogs');

Route::get('/Faqs', action: function () {
    return view('faq');
})->name('faq');

Route::get('/contact', function () {
    return view('contactus');
})->name('contact');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/track', function () {
    return view('track');
})->name('track');
// Route::get('/cart', function () {
//     return view('cart');
// })->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');


Route::get('/myaccount', function () {
    return view('myaccount');
})->name('myaccount');


Route::get('/products/{id}', [ProuductController::class, 'show'])->name('product.show');

// test middleware (is_admin)
// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth', 'is_admin'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::patch('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');



// require __DIR__ . '/auth.php';
