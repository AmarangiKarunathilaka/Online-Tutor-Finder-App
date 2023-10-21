<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\tutorRegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/stRegister', function () {
    return view('stRegister');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/tregister', function () {
    return view('tregister');
}); 

Route::get('/studentHome', function () {
    return view('studentHome');
});

Route::get('/classRequest', function () {
    return view('classRequest');
});



Route::get('/tutorHome', function () {
    return view('tutorHome');

});


Route::get('/classMaterial', function () {
    return view('classMaterial');
});


  
Route::get('/classMaterial', function () {
    return view('classMaterial');
}); 


Route::get('/TutorFeedback', function () {
    return view('TutorFeedback');
});
Route::get('/websiteFeedbackForm', function () {
    return view('websiteFeedbackForm');
});



// Example route definition
Route::get('/admin/reports',  'AdminReportController@index');





Route::get('/editTutorProfile', function () {
    return view('editTutorProfile');
});

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');


Route::get('/advertisements/search', [App\Http\Controllers\AdvertisementController::class, 'search'])->name('advertisements.search');


// Submit feedback
Route::post('/submit-feedback', 'FeedbackController@store')->name('feedback.submit');

// Admin accepts feedback
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/feedback', 'FeedbackController@index')->name('feedback.index');
});

// Display feedback to guests
Route::get('/feedback', 'FeedbackController@show')->name('feedback.show');



// edit tutor profile-Gayathtri
Route::resource('user-profiles', 'UserProfileController');

//kavindra
Route::post('/tregister', [tutorRegisterController::class, 'tutorRegister'])->name('tutorRegister');
Route::post('/tutorInput',[tutorRegisterController::class, 'tutorRegisterInput'])->name('tutorRegisterInput');
