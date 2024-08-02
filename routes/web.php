<?php

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\DashboardController;

use App\Http\Controllers\Web\Backend\Settings\ProfileController;
use App\Http\Controllers\Web\Backend\Settings\SystemSettingController;
use App\Http\Controllers\Web\Backend\Settings\MailSettingController;
use App\Http\Controllers\Web\Backend\Settings\DynamicPageController;
use App\Http\Controllers\Web\Backend\Settings\StripeSettingController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // !Route for ProfileController
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.setting');
    Route::post('/update-profile', [ProfileController::class, 'UpdateProfile'])->name('update.profile');
    Route::post('/update-profile-password', [ProfileController::class, 'UpdatePassword'])->name('update.Password');
    Route::post('/update-profile-picture', [ProfileController::class, 'UpdateProfilePicture'])->name('update.profile.picture');

    //! Route for SystemSettingController
    Route::get('/system-setting', [SystemSettingController::class, 'index'])->name('system.index');
    Route::post('/system-setting', [SystemSettingController::class, 'update'])->name('system.update');

    //! Route for MailSettingController
    Route::get('/mail-setting', [MailSettingController::class, 'index'])->name('mail.setting');
    Route::post('/mail-setting', [MailSettingController::class, 'update'])->name('mail.update');

    //!Route for DynamicPageController
    Route::get('/dynamic-page', [DynamicPageController::class, 'index'])->name('dynamic_page.index');
    Route::get('/dynamic-page/create', [DynamicPageController::class, 'create'])->name('dynamic_page.create');
    Route::post('/dynamic-page/store', [DynamicPageController::class, 'store'])->name('dynamic_page.store');
    Route::get('/dynamic-page/edit/{id}', [DynamicPageController::class, 'edit'])->name('dynamic_page.edit');
    Route::post('/dynamic-page/update/{id}', [DynamicPageController::class, 'update'])->name('dynamic_page.update');
    Route::delete('/dynamic-page/delete/{id}', [DynamicPageController::class, 'destroy'])->name('dynamic_page.destroy');
    Route::get('/dynamic-page/status/{id}', [DynamicPageController::class, 'status'])->name('dynamic_page.status');

    //! Route for StripeSettingController
    Route::get('/stripe-setting', [StripeSettingController::class, 'index'])->name('stripe.index');
    Route::post('/stripe-setting', [StripeSettingController::class, 'update'])->name('stripe.update');
});

require __DIR__.'/auth.php';
