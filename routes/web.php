<?php

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Frontend\CheckoutController;

 use App\Http\Controllers\Web\Backend\Settings\ProfileController;
 use App\Http\Controllers\Web\Backend\Settings\SystemSettingController;
 use App\Http\Controllers\Web\Backend\Settings\MailSettingController;
 use App\Http\Controllers\Web\Backend\Settings\DynamicPageController;
 use App\Http\Controllers\Web\Backend\Settings\StripeSettingController;



//Route::get('/', function () {
//    return view('welcome');
//});

//!Route for HomeController
Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/man', [HomeController::class, 'manCollection'])->name('man.collection');
Route::get('/man/register', [HomeController::class, 'manRegister'])->name('man.register');
Route::get('/man/login', [HomeController::class, 'manLogin'])->name('man.login');
Route::get('/man/forget-password', [HomeController::class, 'manForgetPassword'])->name('man.forget-password');
Route::get('/trending-product', [HomeController::class, 'trendingProduct'])->name('trending.product');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/product/own-design', [HomeController::class, 'productDesign'])->name('product.design');
Route::get('/chat-with-us', [HomeController::class, 'chatWithUs'])->name('chat-with-us');
Route::get('/all-style-product', [HomeController::class, 'allStyleProduct'])->name('all.style.product');
Route::get('/view-profile', [HomeController::class, 'profile'])->name('profile.index');
Route::get('/edit-profile', [HomeController::class, 'editProfile'])->name('profile.edit');
Route::get('/woman', [HomeController::class, 'womanCollection'])->name('woman.collection');

//Route for ShopController
Route::get('/single-product', [ShopController::class, 'singleProduct'])->name('single.product');

//Route for CheckoutController
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');


Route::middleware(['auth'])->group(function () {
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
