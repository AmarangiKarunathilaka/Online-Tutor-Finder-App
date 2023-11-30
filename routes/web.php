<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\tutorRegisterController;
use App\Http\Controllers\studentRegisterController;
use App\Http\Controllers\PasswordResetLinkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\UserProfileController;
use App\Models\Advertisement;


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

Route::get('/login', [LoginController::class,'showLoginForm'])->name('login');

Route::get('/registration', function () {
    return view('registration');
});



Route::get('/sRegister', function () {
    return view('sRegister');

});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/tregister', function () {
    return view('tregister');
}); 

//Amarangi

// Route::get('/studentHome', function () {
//     return view('studentHome');
// });

Route::get('/studentdashboard', function () {
    return view('studentdashboard');
});

Route::get('/student', function () {
    return view('student');
});

Route::get('/studentHomeContent', function () {
    return view('studentHomeContent');
});


Route::get('/classMaterial', function () {
    return view('classMaterial');
});

Route::middleware('auth:tutor')->group(function() {
    Route::get('/tutorHome', function () {
        return view('tutorHome');
    });
});

Route::middleware('auth:student')->group(function() {
    Route::get('/studentHome', function () {
        return view('studentHome');
    });
});

Route::middleware('auth:admin')->group(function() {
    Route::get('/adminHome', function () {
        return view('adminHome');
    });
});



Route::get('/tutorHomeContent', function () {
    return view('tutorHomeContent');
});

 
Route::get('/classMaterialUpload', function () {
    return view('classMaterialUpload');
}); 


Route::get('/TutorFeedback', function () {
    return view('TutorFeedback');
});
Route::get('/websiteFeedbackForm', function () {
    return view('websiteFeedbackForm');
});
Route::get('/popupBox', function () {
    return view('popupBox');
});


// Route::get('/adminHome', function () {
//     return view('adminHome');
// });

Route::get('/classRequest', function () {
    return view('classRequest');
});

Route::get('/adminAdvertisementList', function () {
    return view('adminAdvertisementList');
});


Route::get('/adminStudentList', function () {
    return view('adminStudentList');
});

Route::get('/adminTutorList', function () {
    return view('adminTutorList');
});

Route::get('/classRequest', function () {
    return view('classRequest');
});






// Ramal Start

Route::get('/admin/reports',  'AdminReportController@index');

Route::get('/report', function () {
    return view('report');
});

Route::get('/chat', function () {
    return view('chat');
});

// Ramal End






Route::get('/editTutorProfile', function () {
    return view('editTutorProfile');
});

Route::get('/advertismentUpload', function () {
    return view('advertismentUpload');
});

Route::get('/classRequestList', function () {
    return view('classRequestList');
});
Route::get('/tutorDashboard', function () {
    return view('/tutorDashboard');
});

//Amarangi

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

//Amarangi - advertisements
Route::post('/advertisementUpload', [AdvertisementController::class, 'advertisements'])->name('advertisements');
Route::post('/advertisementInput',[AdvertisementController::class, 'uploadAdvertisementInput'])->name('uploadAdvertisementInput');

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
//Route::resource('user-profiles', 'UserProfileController');
Route::POST('add',[UserProfileController::class,'editTutorProfile']);

 
//kavindra
Route::post('/postlogin', [LoginController::class, 'login'])->name('postlogin'); 
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request'); 
Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email'); 

Route::post('/studentInput', [studentRegisterController::class, 'studentRegisterInput'])->name('studentRegisterInput');
Route::post('/tutorInput', [tutorRegisterController::class, 'tutorRegisterInput'])->name('tutorRegisterInput');

Route::get('/adminStudentList', [studentRegisterController::class, 'adminStudentList']);

Route::get('/adminTutorList', [tutorRegisterController::class, 'adminTutorList'])->name('adminTutorList');
