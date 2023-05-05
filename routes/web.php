<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PatientController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
/**MainPage */
Route::get('/',[MainPageController::class,'index']);
Route::post('/appointment',[MainPageController::class,'appointment']);

Route::get('/home',[DashboardController::class,'redirect']);

/**Admin */
Route::get('/add-doctor',[AdminController::class,'adddoctor']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::get('/show-doctors',[AdminController::class,'showdoctors']);
Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);
Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::get('/show-appointments',[AdminController::class,'showappointments']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/cancelled/{id}',[AdminController::class,'cancelled']);
Route::get('/emailview/{id}',[AdminController::class,'emailview']);
Route::get('/sendemail/{id}',[AdminController::class,'sendemail']);

/**Patient */
Route::get('/appointments',[PatientController::class,'addview']);
Route::get('/messages',[PatientController::class,'addview1']);
Route::get('/billing',[PatientController::class,'addview2']);
Route::get('/careplans',[PatientController::class,'addview3']);
Route::get('/forms',[PatientController::class,'addview4']);
Route::get('/history',[PatientController::class,'addview5']);
Route::get('/labres',[PatientController::class,'addview6']);
Route::get('/medrec',[PatientController::class,'addview7']);
Route::get('/reports',[PatientController::class,'addview8']);
Route::get('/support',[PatientController::class,'addview9']);
Route::get('/webmd',[PatientController::class,'addview0']);
Route::get('/prescriptions',[PatientController::class,'addview01']);


/**Test Page */
Route::get('/test',[MainPageController::class,'test']);