<?php

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
// for deployment
//Route::get('/artisan', [\App\Http\Controllers\WebsiteController::class,'artisan'])->name('artisan');
Route::get('/cache', [\App\Http\Controllers\WebsiteController::class,'cache'])->name('cache');
//Route::get('/seed', [\App\Http\Controllers\WebsiteController::class,'seeding'])->name('seed');

Route::get('/storage', [\App\Http\Controllers\WebsiteController::class,'storage'])->name('storage');

/**********************************************************************************/
Route::get('/', [\App\Http\Controllers\WebsiteController::class,'index'])->name('welcome');
Route::get('/about', [\App\Http\Controllers\WebsiteController::class,'about'])->name('about');
Route::get('/categories', [\App\Http\Controllers\WebsiteController::class,'categoryIndex'])->name('categories.index');
Route::get('/shop', [\App\Http\Controllers\WebsiteController::class,'shop'])->name('shop');
Route::get('/shop/{id}-{slug}', [\App\Http\Controllers\WebsiteController::class,'product'])->name('product');
Route::post('newsletter',[\App\Http\Controllers\Admin\NewsLetterController::class,'store'])->name('newsletter.store');
Route::prefix('cart')->name('cart.')->group(static function(){
    Route::get('/',[\App\Http\Controllers\CartController::class,'index'])->name('index');
    Route::get('/checkout',[\App\Http\Controllers\CartController::class,'checkout'])->name('checkout');
    Route::post('/order',[\App\Http\Controllers\CartController::class,'order'])->name('order')
        ->middleware('auth');
    Route::post('/add/{id}',[\App\Http\Controllers\CartController::class,'store'])->name('store');
    Route::put('/update',[\App\Http\Controllers\CartController::class,'update'])->name('update');
    Route::delete('/removeItem/{id}',[\App\Http\Controllers\CartController::class,'removeItem'])->name('remove');
    Route::get('/clear',[\App\Http\Controllers\CartController::class,'clearCart'])->name('clear');
});



Route::get('/contact', [\App\Http\Controllers\ContactController::class,'index'])->name('contact');
Route::post('/contact', [\App\Http\Controllers\ContactController::class,'send'])->name('contact.send');

//Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/order/{id}', [App\Http\Controllers\HomeController::class, 'orderShow'])->name('home.order');
Route::delete('/order/{id}', [App\Http\Controllers\HomeController::class, 'orderDelete'])->name('home.order.delete');


Route::get('/profile/edit',[App\Http\Controllers\HomeController::class,'profileEdit'])->name('profile.edit');
Route::put('/profile/edit',[App\Http\Controllers\HomeController::class,'profileUpdate'])->name('profile.update');
