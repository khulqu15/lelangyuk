<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Livewire\Page\Home;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('products', [PageController::class, 'products'])->name('products');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('product/{id}', [PageController::class, 'product'])->name('product');
Route::get('profile', [PageController::class, 'profile'])->name('profile');
Route::post('auction', [AuctionController::class, 'store'])->name('addAuction');

Route::post('send/email', [ContactController::class, 'store'])->name('sendEmail');

Route::get('home', [Home::class, 'render']);

Route::group(['middleware' => ['multi.auth', 'auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard-product', [PageController::class, 'dashboardProduct'])->name('dashboard.product');
    Route::get('/edit/product/{id}', [PageController::class, 'editProduct'])->name('editProduct');
    Route::post('/store/product', [PageController::class, 'storeProduct'])->name('storeProduct');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     if(Auth::check()) {
//         if(Auth::user()->level == null || Auth::user()->level == 'user') {
//             return redirect()->route('home');
//         } else {
//             return view('dashboard');
//         }
//     }
// })->name('dashboard');

