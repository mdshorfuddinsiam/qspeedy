<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FootergridtwoController;
use App\Http\Controllers\GeneralsettingController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SociallinkController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ConcernController;
use App\Http\Controllers\AreaController;
use App\Http\Middleware\TrackBlogView;
use App\Models\Banner;
use App\Models\Offer;
use App\Models\Welcome;
use Illuminate\Support\Facades\Route;


Route::get('/cc', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>All Config cleared</h1>';
});

Route::get('/run', function() {
    // Artisan::call('make:model', [
    //     'name' => 'Concern',
    //     '-m' => true,
    //     '-c' => true,
    //     '--resource' => true,
    // ]);
    // Artisan::call('migrate');
    return '<h1>Successfully Created!!</h1>';
});

// --------------------------------------------------------------------
// Frontend (Pages)
Route::get('/',[PageController::class,'index'])->name('index');
Route::get('about',[PageController::class,'aboutPage'])->name('about.page');
Route::get('service',[PageController::class,'servicePage'])->name('service.page');
Route::get('service/details/{slug}',[PageController::class,'serviceDetailsPage'])->name('service.details.page');
Route::get('area-cover/{slug}',[PageController::class,'areaCoverPage'])->name('area-cover.page');
Route::get('contact',[PageController::class,'contactPage'])->name('contact.page');
Route::post('contacts/store',[ContactController::class,'store'])->name('contacts.store');


// // Search Product (main)
// Route::get('/search', [SearchController::class, 'search'])->name('search');
// // Search Blog
// Route::get('/search/blogs', [SearchController::class, 'searchBlogs'])->name('search.blogs');
// ----------------------------------------------------------------


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    // Admin Dashboard
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Admin Profile
    // Route::resource('profiles', AdminProfileController::class);
    Route::get('profiles',[AdminProfileController::class,'index'])->name('profiles.index');
    Route::get('profiles/edit/{user}',[AdminProfileController::class,'edit'])->name('profiles.edit');
    Route::put('profiles/update/{user}',[AdminProfileController::class,'update'])->name('profiles.update');
    Route::post('password/update/{id}',[AdminProfileController::class,'adminPasswordUpdate'])->name('password-update');
    Route::post('email/update/{id}',[AdminProfileController::class,'adminEmailUpdate'])->name('email.update');


    // Website setting
        Route::get('general-setting/edit',[GeneralsettingController::class,'edit'])->name('generalsetting.edit');
        Route::put('general-setting/update/{generalsetting}',[GeneralsettingController::class,'update'])->name('generalsetting.update');

        // Footer Grid Two
        Route::resource('footergridtwos', FootergridtwoController::class);
        Route::get('footergridtwo/delete/{footergridtwo}',[FootergridtwoController::class,'destroy'])->name('footergridtwo.delete');

        // Socail Link
        Route::get('social-link/edit',[SociallinkController::class,'edit'])->name('sociallink.edit');
        Route::put('social-link/update/{sociallink}',[SociallinkController::class,'update'])->name('sociallink.update');

    // Home
        // Banner
        Route::resource('banners', BannerController::class);
        Route::get('banner/delete/{banner}',[BannerController::class,'destroy'])->name('banner.delete');
        // Route::get('banner/edit',[BannerController::class,'edit'])->name('banner.edit');
        // Route::put('banner/update/{banner}',[BannerController::class,'update'])->name('banner.update');

        // Our Concern
        Route::resource('concerns', ConcernController::class);
        Route::get('concern/delete/{concern}',[ConcernController::class,'destroy'])->name('concern.delete');


    // About
    Route::get('about/edit',[AboutController::class,'edit'])->name('abouts.edit');
    Route::put('about/update/{about}',[AboutController::class,'update'])->name('abouts.update');

    // Service
    Route::resource('services', ServiceController::class);
    Route::get('service/delete/{service}',[ServiceController::class,'destroy'])->name('service.delete');
        // Service Image (delete)
        Route::get('service-image/delete/{service}/{serviceimage}',[ServiceController::class,'serviceimageDelete'])->name('serviceimage.delete');

    // Faq
    Route::resource('faqs', FaqController::class);
    Route::get('faq/delete/{faq}',[FaqController::class,'destroy'])->name('faq.delete');

    // Area We Cover
    Route::resource('areas', AreaController::class);
    Route::get('area/delete/{area}',[AreaController::class,'destroy'])->name('area.delete');

    // Contact
    Route::get('contacts',[ContactController::class,'index'])->name('contacts.index');
    Route::get('contact/delete/{contact}',[ContactController::class,'destroy'])->name('contact.delete');

});


