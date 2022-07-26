<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Mail\TestMail;
use App\Models\Admin;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/


Route::get('/create', function () {
    Admin::create([
        'name' => 'Adedaramola',
        'email' => 'mailstokindle@gmail.com',
        'password' => bcrypt('adedaramol')
    ]);

    return "success";
});

Route::get('/', [SiteController::class, 'index']);

Route::get('/register', [SiteController::class, 'registerShow']);
Route::post('/register', [SiteController::class, 'register']);

Route::get('/logout', [SiteController::class, 'logout']);

Route::get('/login', [SiteController::class, 'loginShow']);
Route::post('/login', [SiteController::class, 'login']);

Route::get('/shop', [SiteController::class, 'shop']);
Route::get('/shop/category/{id}', [SiteController::class, 'shopCategory']);
Route::get('/short-description/{id}', [SiteController::class, 'short_description']);

Route::get('/collection', [SiteController::class, 'collection']);

Route::get('/cart', [SiteController::class, 'cart']);

Route::get('/checkout', [SiteController::class, 'checkout']);

Route::post('/order', [SiteController::class, 'order']);

Route::get('/blogs', [SiteController::class, 'blogs']);
Route::get('/blog/{id}', [SiteController::class, 'blog']);

Route::get('/payment', [SiteController::class, 'payment']);
