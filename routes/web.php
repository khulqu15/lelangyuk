<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Page\Home;
use App\Models\Transaction;
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

Route::get('transaction/auction/{auctionId}', [TransactionController::class, 'create'])->name('transaction.create');
Route::get('transaction/{id}/auction/{auctionId}', [TransactionController::class, 'edit'])->name('transaction.edit');
Route::post('transaction', [TransactionController::class, 'store'])->name('transaction.store');
Route::patch('transaction/{id}', [TransactionController::class, 'update'])->name('transaction.update');
Route::delete('transaction/{id}', [TransactionController::class, 'destroy'])->name('transaction.destroy');
Route::get('transaction/{id}/final', [TransactionController::class, 'finalization'])->name('transaction.final');

Route::get('profile', [PageController::class, 'profile'])->name('profile');
Route::post('auction', [AuctionController::class, 'store'])->name('addAuction');
Route::post('update/user/{id}', [UserController::class, 'update'])->name('updateUser');
Route::post('update/password/{id}', [UserController::class, 'updatePassword'])->name('updatePassword');
Route::post('send/email', [ContactController::class, 'store'])->name('sendEmail');

Route::get('home', [Home::class, 'render']);

Route::group(['middleware' => ['multi.auth', 'auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard-product', [PageController::class, 'dashboardProduct'])->name('dashboard.product');
    Route::get('/dashboard-auction', [PageController::class, 'dashboardAuction'])->name('dashboard.auction');
    Route::get('/dashboard-transaction', [PageController::class, 'dashboardTransaction'])->name('dashboard.transaction');
    Route::get('/dashboard-user', [PageController::class, 'dashboardUser'])->name('dashboard.user');
    Route::get('/edit/product/{id}', [PageController::class, 'editProduct'])->name('editProduct');
    Route::post('/store/product', [ProductController::class, 'store'])->name('storeProduct');
    Route::post('/update/product/{id}', [ProductController::class, 'update'])->name('updateProduct');
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

