<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

/**
 *  Front Routes
 */
Route::prefix('/')->name('front.')->group(function(){

    ############################## Index Page ##############################
    Route::view('','front.index')->name('index');

    ############################## About Page ##############################
    Route::view('about','front.about')->name('about');

    ############################## Contact Page ##############################
    Route::view('contact','front.contact')->name('contact');

    ############################## Projects Page ##############################
    Route::view('projects','front.projects')->name('projects');

    ############################## Services Page ##############################
    Route::view('services','front.services')->name('services');

    ############################## Team Page ##############################
    Route::view('team','front.team')->name('team');

    ############################## Testimonial Page ##############################
    Route::view('testimonial','front.testimonial')->name('testimonial');

});


/**
 * Admin Routes
 */
############################### Multi Languages ###############################
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    ],
    function(){
    Route::view('/admin/login','admin.auth.login')->middleware('guest:admin')->name('admin.login');
    Route::get('/admin/logout',[AuthController::class,'logout'])->name('admin.logout');
    Route::group([
        'prefix' => '/admin/',
        // 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function(){
            ################################## Admin Routes ##################################
        Route::middleware('admin')->name('admin.')->group(function () {
            ###################### Index Page ############################
            Route::view('','admin.index')->name('index');
            ###################### Settings Page #########################
            Route::view('settings','admin.settings.index')->name('settings');
            ###################### Skills Page ###########################
            Route::view('skills','admin.skills.index')->name('skills');
            ###################### Subscribers Page ######################
            Route::view('subscribers','admin.subscribers.index')->name('subscribers');
            ###################### Counters Page #########################
            Route::view('counters','admin.counters.index')->name('counters');
            ###################### Services Page #########################
            Route::view('services','admin.services.index')->name('services');
            ###################### Messages Page #########################
            Route::view('messages','admin.messages.index')->name('messages');
            ###################### Categories Page #########################
            Route::view('categories','admin.categories.index')->name('categories');
            ###################### Projects Page #########################
            Route::view('projects','admin.projects.index')->name('projects');
            ###################### Testimonial Page #########################
            Route::view('testimonials','admin.testimonials.index')->name('testimonials');
            ###################### Members Page #########################
            Route::view('members','admin.members.index')->name('members');
        });
    });
});
