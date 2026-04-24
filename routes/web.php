<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Models\Page;

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/

// Homepage route
Route::get('/', function () {
    $page = Page::where('slug', 'home')->first();

    if (!$page) {
        $page = (object) [
            'slug' => 'home',
            'title' => 'Home',
        ];
    }

    return view('frontend.home', compact('page'));
})->name('home');

Route::get('/wifi-services', function () {
    $page = Page::where('slug', 'wifi-services')->first();
    if ($page) return view('frontend.page', compact('page'));

    return view('frontend.wifi-services');
})->name('wifi-services');

Route::get('/voucher', function () {
    $page = Page::where('slug', 'voucher')->first();
    if ($page) return view('frontend.page', compact('page'));

    return view('frontend.voucher');
})->name('voucher');

require __DIR__ . '/auth.php';

/*
|--------------------------------------------------------------------------
| Dashboard (auth only)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Authenticated routes (profile)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Admin Pages (CRUD)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.pages.index');
    })->name('dashboard');

    Route::resource('pages', PageController::class);
});

// Dynamic pages by slug (keep last so it doesn't override other routes)
Route::get('/{slug}', function (string $slug) {
    $page = Page::where('slug', $slug)->first();

    if (!$page) abort(404, 'Page not found.');

    return view('frontend.page', compact('page'));
})->where('slug', '^(?!admin$).+')->name('page.show');
