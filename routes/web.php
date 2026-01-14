<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Price;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'home');
Route::view('/custom-gold', 'custom-gold.index');
Route::view('/blog', 'blog.index');
Route::view('/about-us', 'about.index');
Route::get('/{category}', [ProductController::class, 'index'])
    ->whereIn('category', ['gold', 'dinar']);
Route::get('/prices/{category}', [PriceController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::post('/admin/login', function () {
    $credentials = request()->only('email', 'password');

    if (Auth::attempt($credentials)) {
        request()->session()->regenerate();
        return redirect('/admin');
    }

    return back()->with('error', 'Invalid credentials');
});

Route::post('/admin/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/admin/login');
});

/*
|--------------------------------------------------------------------------
| Admin Protected Routes
|--------------------------------------------------------------------------
*/

Route::middleware('admin.auth')->group(function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/gold', function () {
        $products = Product::orderBy('type')
            ->orderBy('weight')
            ->get();

        return view('admin.gold.index', compact('products'));
    });

    // ✅ EDIT
    Route::get('/admin/gold/{product}/edit', function (Product $product) {
        return view('admin.gold.edit', compact('product'));
    });

    // ✅ UPDATE
    Route::post('/admin/gold/{product}', function (Product $product) {
        request()->validate([
            'price' => 'required|numeric|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        $product->update([
            'price' => request('price'),
            'is_active' => request()->has('is_active'),
        ]);

        return redirect('/admin/gold')->with('success', 'Price updated');
    });

});

/*
|--------------------------------------------------------------------------
| Default Laravel Auth (DO NOT TOUCH)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';