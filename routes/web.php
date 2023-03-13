<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\DoctorController;
use App\http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ProfilesettingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Input;
use App\Models\User;


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



  //Home page controller ////home page route
Route::get('/',[HomeController::class,'index']);
                        
Auth::routes();



/*----------------------------------------
All Super Admin Routes List
--------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/super_admin', [HomeController::class, 'admin']);
    Route::resource('specialities', SpecializationController::class);
    Route::get('doctors', [AdminController::class, 'doctor']);
    Route::get('patients', [AdminController::class, 'patient']);
    Route::get('/search', [AdminController::class, 'search']);
    Route::resource('ratings', RatingController::class);
    Route::resource('appointment', BookingController::class);
    
});

/*------------------------------------------
All Doctors Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:doctor'])->group(function () {
  
    Route::get('/doctor', [HomeController::class, 'doctor']);
    Route::get('/delete_appointment/{id}', [HomeController::class,'delete_appointment']);
    Route::get('/doctor_profile',[ProfilesettingController::class,'setting']);
    Route::post('doctor_profile_store',[ProfilesettingController::class,'store']);
    Route::get('appointment_detail',[ProfilesettingController::class,'appointment']);
    Route::get('patient_detail',[ProfilesettingController::class,'patient']);
    Route::get('schedule_time',[ProfilesettingController::class,'schedule']);
    Route::get('review_detail',[ProfilesettingController::class,'reviewdetail']);
    Route::get('change_password',[ProfilesettingController::class,'changepassword']);
    
});


/*------------------------------------------
All patients Routes List
--------------------------------------------*/
Route::middleware(['auth', 'user-access:patient'])->group(function () {
  
    Route::get('/patient', [HomeController::class, 'patient']);
    Route::get('/patient_profile_setting', [PatientController::class, 'patientprofilesetting']);
    Route::get('/password_setting', [PatientController::class, 'password']);
    Route::get('/search_doctor', [PatientController::class, 'searchdoctor']);
    Route::get('/appointment_doctor/{id}', [PatientController::class, 'appointment']);
    Route::get('/view_profile/{id}', [PatientController::class, 'viewprofile']);
    Route::post('patient_profile_store',[PatientController::class,'store']);

    //doctor_appointment_store
    Route::post('/doctor_appointment_store', [PatientController::class, 'appointment_store']);
    
});
Route::get('/admin/doctors/delete/{id}', [AdminController::class, 'delete']);
Route::get('/admin/patients/destory/{id}', [AdminController::class, 'destory']);
Route::get('/admin/appointment/destory/{id}', [BookingController::class, 'destory']);
Route::post('search_booking', [BookingController::class, 'search'])->name('search_booking');

/////////////////
