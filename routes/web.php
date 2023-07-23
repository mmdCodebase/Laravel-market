<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::name('auth.')->group(function () {
//     require 'auth.php';
// });

// Route::prefix('admin')->group(function () {
//     Route::middleware(['admin_panel_access'])->group(function () {
//         require 'admin.php';
//     });
// });

// // Profile routes
// Route::middleware(['auth'])->group(function () {
//     Route::get('banned', [ProfileController::class, 'banned'])->name('profile.banned');
//     Route::middleware(['is_banned'])->group(function () {
//         require 'profile.php';
//     });
// });

Route::get('/', [IndexController::class, 'home'])->name('home');
// Route::get('/category/{category}', [IndexController::class, 'category'])->name('category.show');

// Route::get('/login', [IndexController::class, 'login'])->name('login');
// Route::get('/confirmation', [IndexController::class, 'confirmation'])->name('confirmation');

// Route::get('setview/{list}', [IndexController::class, 'setView'])->name('setview');

// // Product routes
// Route::get('product/{product}', [ProductController::class, 'show'])->name('product.show');
// Route::get('product/{product}/rules', [ProductController::class, 'showRules'])->name('product.rules');
// Route::get('product/{product}/feedback', [ProductController::class, 'showFeedback'])->name('product.feedback');
// Route::get('product/{product}/delivery', [ProductController::class, 'showDelivery'])->name('product.delivery');
// Route::get('product/{product}/vendor', [ProductController::class, 'showVendor'])->name('product.vendor');

// // Category routes
// Route::get('category/{category}', [IndexController::class, 'category'])->name('category.show');

// // Vendor routes
// Route::get('vendor/{user}', [IndexController::class, 'vendor'])->name('vendor.show');
// Route::get('vendor/{user}/feedback', [IndexController::class, 'vendorsFeedbacks'])->name('vendor.show.feedback');

// Route::post('search', [SearchController::class, 'search'])->name('search');
// Route::get('search', [SearchController::class, 'searchShow'])->name('search.show');

