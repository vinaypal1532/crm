<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


use App\Http\Controllers\CategoryController;

use App\Http\Controllers\NotificationController;


Route::get('/', function () {
    return view('welcome');
});

/*----------API Develoment ----------*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


//Route::get('dashboard', [LoginController::class, 'dashboard']); 
Route::get('admin', [LoginController::class, 'loginpage'])->name('admin');
Route::post('customLogin', [LoginController::class, 'customLogin'])->name('customLogin');

Route::middleware(['auth', 'user-access:Admin'])->group(function () {

    Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('contact_list', [LoginController::class, 'user_list'])->name('contact_list');

  Route::get('subcription', [SubscriptionContorller::class, 'subcription'])->name('subcription');
    Route::get('category_edit/{id}', [SubscriptionContorller::class, 'edit'])->name('category_edit');
    Route::get('sub_delete/{id}', [SubscriptionContorller::class, 'sub_delete'])->name('sub_delete');
    Route::get('add_subcription', [SubscriptionContorller::class, 'add_subcription'])->name('add_subcription');
    Route::post('add_subcriptionData', [SubscriptionContorller::class, 'store'])->name('add_subcriptionData');
    Route::put('updateData/{id}', [SubscriptionContorller::class, 'updateData'])->name('updateData');

    Route::get('package_list', [PackageController::class, 'index'])->name('package_list');
    Route::get('add_package', [PackageController::class, 'add_package'])->name('add_package');
    Route::post('add_packageData', [PackageController::class, 'store'])->name('add_packageData');
    Route::get('edit/{id}', [PackageController::class, 'edit'])->name('edit');
    Route::put('updatePackage/{id}', [PackageController::class, 'updatePackage'])->name('updatePackage');

    Route::get('deletePackage/{id}', [PackageController::class, 'delete'])->name('deletePackage');

 
    Route::get('destination_list', [DestinationController::class, 'index'])->name('destination_list');
    Route::get('add_destination', [DestinationController::class, 'add_destination'])->name('add_destination');
    
    Route::get('destination_edit/{id}', [DestinationController::class, 'edit'])->name('destination_edit');
    Route::post('add_destinationData', [DestinationController::class, 'store'])->name('add_destinationData');
    Route::post('updateDestination/{id}', [DestinationController::class, 'updateDestination'])->name('updateDestination');
    
    Route::get('deleteDestination/{id}', [DestinationController::class, 'delete'])->name('deleteDestination');

});

Route::get('package', [PackageController::class, 'index'])->name('package');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\frontend\MainController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\frontend\MainController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\frontend\MainController::class, 'contact'])->name('contact');
Route::post('/insert-data', [MainController::class, 'store'])->name('insert.data');
Route::get('/service', [App\Http\Controllers\frontend\MainController::class, 'service'])->name('service');
Route::get('/package', [App\Http\Controllers\frontend\MainController::class, 'package'])->name('package');

Route::get('/notification', [App\Http\Controllers\frontend\MainController::class, 'sendOfferNotification'])->name('sendOfferNotification');
Route::get('/details/{id}', [App\Http\Controllers\frontend\MainController::class, 'package_details'])->name('details');
Route::get('/domestic', [App\Http\Controllers\frontend\MainController::class, 'domestic'])->name('domestic');
Route::get('/international', [App\Http\Controllers\frontend\MainController::class, 'international'])->name('international');

Route::post('/newsletter-data', [NewsletterController::class, 'insertData'])->name('newsletter.data');

Route::get('/send-notification', [NotificationController::class, 'sendOfferNotification']);
Auth::routes();

Route::fallback(function () {
     abort(404);
      });