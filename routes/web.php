<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Models\Product;
use App\Models\Price;
use App\Services\ProductService;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\PriceController as AdminPriceController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/{category}', [ProductController::class, 'index'])
    ->whereIn('category', ['gold', 'dinar']);
Route::get('/prices/{category}', [PriceController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Static Pages
|--------------------------------------------------------------------------
*/
Route::prefix('/')->group(function () {
    Route::get('about-us', [PageController::class, 'about'])
        ->name('pages.about');

    Route::get('custom-gold', [PageController::class, 'customGold'])
        ->name('pages.custom-gold');
});

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
    Route::get('{slug}', [BlogController::class, 'show'])->name('blog.show');
});

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
| Admin Middleware Group
|--------------------------------------------------------------------------
*/

Route::middleware('admin.auth')->group(function () {

    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/gold', [AdminProductController::class, 'index']);
    Route::get('/admin/gold/{product}/edit', [AdminProductController::class, 'edit']);
    Route::post('/admin/gold/{product}', [AdminProductController::class, 'update']);
    Route::get('/admin/prices/{category}', [AdminPriceController::class, 'index'])
    ->whereIn('category', ['gold', 'dinar']);
    Route::get('/admin/prices/{price}/edit', [AdminPriceController::class, 'edit']);
    Route::post('/admin/prices/{price}', [AdminPriceController::class, 'update']);

    Route::prefix('admin')->middleware('admin.auth')->group(function () {

    Route::get('/blog', [AdminBlogController::class, 'index'])
        ->name('admin.blog.index');

    /*|--------------------------------------------------------------------------
    | Blog Management Routes
    |--------------------------------------------------------------------------*/
    Route::get('/blog/create', [AdminBlogController::class, 'create'])
        ->name('admin.blog.create');

    Route::post('/blog', [AdminBlogController::class, 'store'])
        ->name('admin.blog.store');

    Route::get('/blog/{post}/edit', [AdminBlogController::class, 'edit'])
        ->name('admin.blog.edit');

    Route::put('/blog/{post}', [AdminBlogController::class, 'update'])
        ->name('admin.blog.update');
    });

    Route::delete('/admin/blog/{post}', [AdminBlogController::class, 'destroy'])
        ->name('admin.blog.destroy');
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