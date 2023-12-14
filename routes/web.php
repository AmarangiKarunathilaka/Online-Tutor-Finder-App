<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\tutorRegisterController;
use App\Http\Controllers\studentRegisterController;
use App\Http\Controllers\PasswordResetLinkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ClassMaterialController;
use App\Http\controllers\ClassRequestController;
//use App\Http\Controllers\CustomAuthController;
use App\Models\Advertisement;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CustomAuthController;

use App\Http\Controllers\combinedDisplayController;



use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\StudentDashboardController;

//Ramal

use App\Http\Controllers\PdfController;

//kavin
use App\Http\controllers\ForgetPasswordManager;
use App\Http\Controllers\EmailController;



use App\Http\Controllers\TimetableController;
use App\Http\Controllers\TutorProfileController;



//chat
use App\Events\Message;

use Illuminate\Http\Request;


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

Route::get('/login', [ForgetPasswordManager::class,'showLoginForm'])->name('login');

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

Route::get('/studentDashboard', function () {
    return view('studentDashboard');
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

Route::get('/materialContent/maths', function () {
    return view('materialContent/maths');
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

 
Route::get('/upload-class-material', function () {
    return view('upload-class-material');
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



Route::get('/adminAdvertisementList', function () {
    return view('adminAdvertisementList');
});

Route::get('/adminFeedbackList', function () {
    return view('adminFeedbackList');
});

Route::get('/adminClassMaterialList', function () {
    return view('adminClassMaterialList');
});


Route::get('/adminStudentList', function () {
    return view('adminStudentList');
});

Route::get('/adminTutorList', function () {
    return view('adminTutorList');
});

// nalaka
Route::get('/classRequest', function () {
    return view('classRequest');
});

Route::get('/adminClassRequestList', function () {
    return view('adminClassRequestList');
});

Route::get('/adminDashboard', function () {
    return view('adminDashboard');
});

Route::get('/studentRequestView', function () {
    return view('studentRequestView');
});

Route::get('/editAdvertisement', function () {
    return view('editAdvertisement');
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

//Route::post('users/view-pdf', [UserController::class, 'viewPDF'])->name('view-pdf');


Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

//2023.12.05

Route::get('/', function () {
    return view('welcome');
});

Route::get('/billing_invoice', function () {
    return view('billing_invoice');
});
Route::get('/generate-pdf',[PdfController::class,'generate_pdf']);
Route::get('/download-pdf',[PdfController::class,'download_pdf']);



//Amare 1
Route::post('/generate_pdf_student',[studentRegisterController::class,'generate_pdf_student'])->name('generate_pdf_student');

//My 2
Route::post('/generate_pdf_tutor',[tutorRegisterController::class,'generate_pdf_tutor'])->name('generate_pdf_tutor');

//My 3
Route::post('/generate_pdf_advertisement',[AdvertisementController::class,'generate_pdf_advertisement'])->name('generate_pdf_advertisement');

//My 4 no need


//My 5
Route::post('/generate_pdf_request',[ClassRequestController::class,'generate_pdf_request'])->name('generate_pdf_request');


//My 6
Route::post('/generate_pdf_feedback',[FeedbackController::class,'generate_pdf_feedback'])->name('generate_pdf_feedback');



//Ramal End



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










// akesh
// store feedback to database
Route::post('/websiteFeedbackForm', [FeedbackController::class, 'feedback'])->name('feedback');
Route::post('/feedbackInput',[FeedbackController::class, 'uploadFeedbackInput'])->name('uploadFeedbackInput');

// View feedback list to admin
Route::get('/adminFeedbackList', [FeedbackController::class, 'adminFeedbackList'])->name('adminFeedbackList');

// view feedback in guest interface
// Route::get('/', [FeedbackController::class, 'feedbackDisplay'])->name('feedbackDisplay');

Route::get('/acceptFeedback/{id}', [FeedbackController::class, 'acceptFeedback']);
Route::get('/rejectFeedback/{id}', [FeedbackController::class, 'rejectFeedback']);

Route::get('/', [CombinedDisplayController::class, 'combinedDisplay'])->name('combinedDisplay');








//Gayathri
// edit tutor profile-Gayathtri
//Route::resource('user-profiles', 'UserProfileController');
//Route::POST('add',[UserProfileController::class,'editTutorProfile']);

Route::get('/delete_profile/{id}', [TutorProfileController::class, 'destroy']);



use App\Http\Controllers\YourController;

Route::delete('/items/{id}', [YourController::class, 'destroy']);


 
//kavindra
Route::post('/postlogin', [LoginController::class, 'login'])->name('postlogin'); 
//Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request'); 
//Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email'); 

Route::post('/studentInput', [studentRegisterController::class, 'studentRegisterInput'])->name('studentRegisterInput');
Route::post('/tutorInput', [tutorRegisterController::class, 'tutorRegisterInput'])->name('tutorRegisterInput');


Route::get('/adminStudentList', [studentRegisterController::class, 'adminStudentList']);

Route::get('/adminTutorList', [tutorRegisterController::class, 'adminTutorList'])->name('adminTutorList');

Route::get('/passwordReset', function () {
    return view('passwordReset');
});

// password reset new

Route::get("/forget-password",[ForgetPasswordManager::class, "forgetPassword"])->name("forget.password");
Route::post("/forget-password",[ForgetPasswordManager::class, "forgetPasswordPost"])->name("forget.password.post");
Route::get("reset-password/{token}",[ForgetPasswordManager::class,"resetPassword"])->name("reset.password");
Route::post("/reset-password", [ForgetPasswordManager::class, "resetPasswordPost"])->name("reset.password.post");

//email send accept/remove

//Route::get('/send-email-button', [EmailController::class, 'showEmailForm'])->name('send.email.form');
//Route::post('/send-email-button', [EmailController::class, 'sendEmail'])->name('send.email');

Route::post('/send-email-button', [studentRegisterController::class, 'sendEmailButton'])->name('send.email.button');
Route::get('/send-email-button', [studentRegisterController::class, 'sendEmailButton'])->name('send.email.button');

Route::post('/send-email/{email}', [studentRegisterController::class, 'sendEmail'])->name('send.email');

Route::get('/accept_student/{id}', [studentRegisterController::class, 'accept_student']);
Route::get('/reject_student/{id}', [studentRegisterController::class, 'reject_student']);

Route::get('/accept_tutor/{id}', [tutorRegisterController::class, 'accept_tutor']);
Route::get('/reject_tutor/{id}', [tutorRegisterController::class, 'reject_tutor']);

Route::get('/admin/studentList', 'studentRegisterController@adminStudentList')->name('adminStudentList');


//Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');


//kavindra
/*Route::post('/tregister', [tutorRegisterController::class, 'tutorRegister'])->name('tutorRegister');
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
*/




//ishara
Route::post('/upload-class-material', [ClassMaterialController::class, 'classMaterials'])->name('classMaterials');

Route::post('/classMaterialInput',[ClassMaterialController::class, 'classMaterialInput'])->name('classMaterialInput');

Route::get('/adminClassMaterialList', [ClassMaterialController::class, 'adminClassMaterialList'])->name('adminClassMaterialList');

Route::get('/accept_material/{id}', [ClassMaterialController::class, 'accept_material']);
Route::get('/reject_material/{id}', [ClassMaterialController::class, 'reject_material']);

Route::get('/materialContent/maths', [ClassMaterialController::class, 'maths'])->name('maths');
Route::get('/materialContent/chemistry', [ClassMaterialController::class, 'chemistry'])->name('chemistry');
Route::get('/materialContent/physics', [ClassMaterialController::class, 'physics'])->name('physics');
Route::get('/materialContent/biology', [ClassMaterialController::class, 'biology'])->name('biology');

Route::get('/download/{file}',[ClassMaterialController::class, 'download'])->name('download');

Route::get('/view/{id}',[ClassMaterialController::class, 'view'])->name('view');


//TIMETABLE
//Route::get('/editTutorProfile', [TimetableController::class, 'index']);
//Route::post('/update-timetable', [TimetableController::class, 'update']);
//Route::get('/editTutorProfile', [TimetableController::class, 'editTutorProfile'])->name('editTutorProfile');

Route::post('/timeInput',[TimetableController::class, 'timeInput'])->name('timeInput');


//Tutorprofile
Route::get('/editTutorProfile', [TutorProfileController::class, 'editTutorProfile'])->name('editTutorProfile');

Route::post('/TutorprofileInput',[TutorProfileController::class, 'TutorprofileInput'])->name('TutorprofileInput');

Route::get('/tutorDashboard', [TutorProfileController::class, 'tutorDashboard'])->name('tutorDashboard');

Route::post('/detailInput',[TutorProfileController::class, 'detailInput'])->name('detailInput');


//nalaka
Route::post('classRequest', [ClassRequestController::class, 'classRequests'])->name('classRequests');
Route::post('classRequestInput', [ClassRequestController::class, 'uploadClassRequestInput'])->name('uploadClassRequestInput');
// view requests in admin
Route::get('/adminClassRequestList', [ClassRequestController::class, 'adminClassRequestList'])->name('adminClassRequestList');

// view student home
Route::get('/studentRequestView', [ClassRequestController::class, 'studentRequestView'])->name('studentRequestView');


Route::get('/acceptRequest/{id}', [ClassRequestController::class, 'acceptRequest']);
Route::get('/rejectRequest/{id}', [ClassRequestController::class, 'rejectRequest']);



//Amarangi

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

//Amarangi - advertisements upload
Route::post('/advertisementUpload', [AdvertisementController::class, 'advertisements'])->name('advertisements');
Route::post('/advertisementInput',[AdvertisementController::class, 'advertisementUploadInput'])->name('advertisementUploadInput');


//Amarangi - view advertisements

Route::get('/adminAdvertisementList', [AdvertisementController::class, 'adminAdvertisementList'])->name('adminAdvertisementList');

Route::get('/accept_advertisement/{id}', [AdvertisementController::class, 'accept_advertisement']);
Route::get('/reject_advertisement/{id}', [AdvertisementController::class, 'reject_advertisement']);

Route::get('/studentDashboard', [StudentDashboardController::class, 'advertisementDisplay'])->name('advertisementDisplay');
Route::get('/advertismentUpload', [AdvertisementController::class, 'myAdvertisements'])->name('myAdvertisements');

Route::get('/advertisements/search', [App\Http\Controllers\AdvertisementController::class, 'search'])->name('advertisements.search');

//chat - Amarangi
Route::get('/chatPusher', function () {
    return view('chatPusher');
});


Route::post('send-message',function (Request $request){
    event(new Message($request->username, $request->message));
   return ['success' => true];
});


Route::get('/adminDashboard', [AdminDashboardController::class, 'adminDashboardDisplay'])->name('adminDashboardDisplay');

Route::get('/accept_student/{id}', [studentRegisterController::class, 'accept_student']);
Route::get('/reject_student/{id}', [studentRegisterController::class, 'reject_student']);

//Amarangi - delete advertisement
Route::get('/delete_advertisement/{id}', [AdvertisementController::class, 'destroy']);

//Amarangi - update advertisement
Route::get('/update_advertisement/{id}', [AdvertisementController::class, 'showData']);
Route::put('/edit/{id}', [AdvertisementController::class, 'updateAdvertisement']);

//Route::middleware(['auth'])->group(function () {
  //  Route::get('/chat', 'ChatController@index');
   // Route::post('/send-message', 'ChatController@sendMessage');
//});

