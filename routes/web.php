<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

use App\Http\Controllers\tutorRegisterController;
use App\Http\Controllers\studentRegisterController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\UserProfileController;
use App\Models\Advertisement;
use App\Http\Controllers\FeedbackController;

//Ramal
use App\Http\Controllers\PDFController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

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

Route::get('/studentHome', function () {
    return view('studentHome');
});

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


Route::get('/tutorHome', function () {
    return view('tutorHome');
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


Route::get('/adminHome', function () {
    return view('adminHome');
});

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

Route::get('/login', function () {
    return view('login');
});

/*
Route::get('/', [UserController::class, 'index']);
*/

Route::post('users/view-pdf', [UserController::class, 'viewPDF'])->name('view-pdf');


Route::get('generate-pdf', [PDFController::class, 'generatePDF']);


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

//Amarangi - view advertisements
//Route::view('/index','list');
Route::get('/advertisements', [AdvertisementController::class, 'index'])->name('index');

Route::get('/advertisements/search', [App\Http\Controllers\AdvertisementController::class, 'search'])->name('advertisements.search');

// akesh

/*Route::view('add', 'websiteFeedbackForm') ;
Route::POST('add', [FeedbackController::class,'websiteFeedbackForm']) ;*/
Route::post('/websiteFeedbackForm', [FeedbackController::class, 'feedback'])->name('feedback');
Route::post('/feedbackInput',[FeedbackController::class, 'uploadFeedbackInput'])->name('uploadFeedbackInput');




// edit tutor profile-Gayathtri
//Route::resource('user-profiles', 'UserProfileController');
Route::POST('add',[UserProfileController::class,'editTutorProfile']);



//kavindra
Route::post('/tregister', [tutorRegisterController::class, 'tutorRegister'])->name('tutorRegister');
Route::post('/tutorInput',[tutorRegisterController::class, 'tutorRegisterInput'])->name('tutorRegisterInput');

Route::post('/sregister', [studentRegisterController::class, 'studentRegister'])->name('studentRegister');
Route::post('/studentInput',[studentRegisterController::class, 'studentRegisterInput'])->name('studentRegisterInput');

Route::get('/dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/postlogin', [CustomAuthController::class, 'login'])->name('postlogin'); 
//Route::post('/loginInput', [CustomAuthController::class, 'loginInput'])->name('loginInput');
Route::get('/signup', [CustomAuthController::class, 'signup'])->name('register-user');
Route::post('/postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');