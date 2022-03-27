<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'index']);

Route::get('/register', [SiteController::class, 'registerShow']);
Route::post('/register', [SiteController::class, 'register']);

Route::get('/logout', [SiteController::class, 'logout']);

Route::get('/login', [SiteController::class, 'loginShow']);
Route::post('/login', [SiteController::class, 'login']);

Route::get('/shop', [SiteController::class, 'shop']);
Route::get('/shop/category/{id}', [SiteController::class, 'shopCategory']);
Route::get('/short-description/{id}', [SiteController::class, 'short_description']);

Route::get('/cart', [SiteController::class, 'cart']);

Route::get('/checkout', [SiteController::class, 'checkout']);

Route::post('/order', [SiteController::class, 'order']);