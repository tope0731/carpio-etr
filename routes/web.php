<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequirementsController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('requirements.index');
});

// Route::resource('/requirements.index', RequirementsController::class);

 
Route::get('/application', [RequirementsController::class, 'application']);
Route::get('/admission', [RequirementsController::class, 'admission']);
Route::get('/contact', [RequirementsController::class, 'contact']);

Route::get('/selection', [RequirementsController::class, 'selection']);
Route::match(['get', 'post'], '/getPrograms', [RequirementsController::class, 'getPrograms'])->name('getPrograms');
// Route::get('/admission', [AdmissionController::class, 'showForm'])->name('admission.form');
// Route::post('/admission', 'AdmissionController@store')->name('admission.store');

Route::get('/admission/form', [AdmissionController::class, 'showForm'])->name('admission.form');
Route::post('/admission/store', [AdmissionController::class, 'store'])->name('admission.store');

Route::get('/admission/search', [AdmissionController::class, 'search'])->name('admission.search');
Route::post('/admission/store', [AdmissionController::class, 'store'])->name('admission.store');
Route::get('/admission/{id}', [AdmissionController::class, 'show'])->name('admission.show');

Route::get('/admin/admissions', [AdmissionController::class, 'index'])->name('admissions.index');
Route::get('/admin/admission/{id}', [AdmissionController::class, 'showAll'])->name('admission.showAll');

Route::get('/admin/accepted-admissions', [AdmissionController::class, 'showAccepted'])->name('admissions.accepted');
Route::post('/admission/accept/{id}', [AdmissionController::class, 'accept'])->name('admission.accept');

Route::get('/admin/rejected-admissions', [AdmissionController::class, 'showRejected'])->name('admissions.rejected');
Route::post('/admission/reject/{id}', [AdmissionController::class, 'reject'])->name('admission.reject');

Route::get('/admin/waitlisted-admissions', [AdmissionController::class, 'showWaitlisted'])->name('admissions.waitlisted');
Route::post('/admission/waitlist/{id}', [AdmissionController::class, 'waitlist'])->name('admission.waitlist');






