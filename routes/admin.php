<?php


use Illuminate\Support\Facades\Route;


Route::get('login',[App\Http\Controllers\Admin\Auth\AdminLoginController::class,'index'])->middleware('guest:admin')->name('login');
Route::post('login',[App\Http\Controllers\Admin\Auth\AdminLoginController::class,'login'])->middleware('guest:admin')->name('login.attempt');

Route::get('password/forgot',[App\Http\Controllers\Admin\Auth\AdminForgotPasswordController::class,'showLinkRequestForm'])->middleware('guest:admin')->name('password.forgot');
Route::post('password/forgot',[App\Http\Controllers\Admin\Auth\AdminForgotPasswordController::class,'sendResetLinkEmail'])->middleware('guest:admin')->name('password.email.send');

Route::get('password/reset/{token}',[App\Http\Controllers\Admin\Auth\AdminResetPasswordController::class,'showResetForm'])->middleware('guest:admin')->name('password.reset');
Route::post('password/reset',[App\Http\Controllers\Admin\Auth\AdminResetPasswordController::class,'reset'])->middleware('guest:admin')->name('password.update');

Route::middleware('auth:admin')->group(static function(){
    Route::any('logout',[App\Http\Controllers\Admin\Auth\AdminLoginController::class,'logout'])->name('logout');
//    settings Routes
    Route::get('settings',[App\Http\Controllers\Admin\SettingController::class,'index'])->name('settings.index');
    Route::post('settings',[App\Http\Controllers\Admin\SettingController::class,'update'])->name('settings.update');

    // account management routes
    Route::prefix('accounts')->group(static function(){
        Route::resource('admins',App\Http\Controllers\Admin\AdminController::class)->except('show');
//        Route::resource('users',App\Http\Controllers\Admin\UserController::class);
    });

    Route::resource('categories',App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('types',App\Http\Controllers\Admin\TypeController::class)->except('show');
    Route::resource('forms',App\Http\Controllers\Admin\FormController::class)->except('show');
    Route::resource('consumables',App\Http\Controllers\Admin\ConsumableController::class)->except('show');
    Route::resource('computerConsumables',App\Http\Controllers\Admin\ComputerConsumableController::class)->except('show');
    Route::resource('functionalities',App\Http\Controllers\Admin\FunctionalityController::class)->except('show');
    Route::resource('brands',App\Http\Controllers\Admin\BrandController::class);

    Route::resource('orders',App\Http\Controllers\Admin\OrderController::class)->except(['edit','create','store']);
    Route::resource('products',App\Http\Controllers\Admin\ProductController::class);
    Route::post('products/image/upload',[App\Http\Controllers\Admin\ImageController::class,'store'])->name('products.images.upload');
    Route::get('products/{image}/delete',[App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('products.images.delete');

    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class,'index']  )->name('dashboard');
    Route::get('artisan', [\App\Http\Controllers\Admin\DashboardController::class,'artisan']  )->name('artisan');
    Route::get('newsletter',[\App\Http\Controllers\Admin\NewsLetterController::class,'index'])->name('newsletter.index');
    Route::delete('newsletter/{id}',[\App\Http\Controllers\Admin\NewsLetterController::class,'destroy'])->name('newsletter.destroy');
});
