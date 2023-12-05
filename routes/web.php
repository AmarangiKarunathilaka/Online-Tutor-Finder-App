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
//use App\Http\Controllers\CustomAuthController;
use App\Models\Advertisement;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CustomAuthController;
//Ramal
use App\Http\Controllers\PDFController;



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

/*Route::get('/', function () {
    return view('welcome');
});*/

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

Route::get('/materialContent', function () {
    return view('materialContent');
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

Route::get('/classRequest', function () {
    return view('classRequest');
});

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

//2023.12.05

Route::get('/', function () {
    return view('welcome');
});

Route::get('/billing_invoice', function () {
    return view('billing_invoice');
});
Route::get('/generate-pdf',[PdfController::class,'generate_pdf']);
Route::get('/download-pdf',[PdfController::class,'download_pdf']);



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
//Route::get('/advertisements', [AdvertisementController::class, 'index'])->name('index');
// View admin advertisement list
Route::get('/adminAdvertisementList', [AdvertisementController::class, 'adminAdvertisementList'])->name('adminAdvertisementList');

Route::get('/', [AdvertisementController::class, 'advertisementDisplay'])->name('advertisementDisplay');

Route::get('/accept_advertisement/{id}', [AdvertisementController::class, 'accept_advertisement']);
Route::get('/reject_advertisement/{id}', [AdvertisementController::class, 'reject_advertisement']);

Route::get('/advertisements/search', [App\Http\Controllers\AdvertisementController::class, 'search'])->name('advertisements.search');

//chat - Amarangi
Route::get('/chatPusher', function () {
    return view('chatPusher');
});


Route::post('send-message',function (Request $request){
    event(new Message($request->username, $request->message));
   return ['success' => true];
});

//Route::middleware(['auth'])->group(function () {
  //  Route::get('/chat', 'ChatController@index');
   // Route::post('/send-message', 'ChatController@sendMessage');
//});







// akesh
// store feedback to database
Route::post('/websiteFeedbackForm', [FeedbackController::class, 'feedback'])->name('feedback');
Route::post('/feedbackInput',[FeedbackController::class, 'uploadFeedbackInput'])->name('uploadFeedbackInput');

// View feedback list to admin
Route::get('/adminFeedbackList', [FeedbackController::class, 'adminFeedbackList'])->name('adminFeedbackList');

// view feedback in guest interface

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/feedback', [FeedbackController::class, 'index'])->name('admin.feedback.index');
    Route::post('/admin/feedback/{id}/accept', [FeedbackController::class, 'acceptFeedback'])->name('admin.feedback.accept');
    Route::post('/admin/feedback/{id}/reject', [FeedbackController::class, 'rejectFeedback'])->name('admin.feedback.reject');
});

Route::get('/feedback', [FeedbackController::class, 'index'])->name('guest.feedback.index');

Route::get('/adminClassMaterialList', [ClassMaterialController::class, 'adminClassMaterialList'])->name('adminClassMaterialList');



//Gayathri
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

//ishara-class material upload
// routes/web.php

//use App\Http\Controllers\ClassMaterialController;

// routes/web.php

/*Route::post('/class-material/upload', [ClassMaterialController::class, 'upload']);
Route::get('/class-materials', [ClassMaterialController::class, 'display']);

Route::get('/tutors/{email}', [TutorController::class, 'show']);

Route::get('/class-materials/download/{id}', [TutorController::class, 'download']);*/

//ishara
Route::post('/upload-class-material', [ClassMaterialController::class, 'classMaterials'])->name('classMaterials');
Route::post('/classMaterialInput',[ClassMaterialController::class, 'uploadClassMaterialInput'])->name('uploadClassMaterialInput');

Route::get('/classMaterial', [ClassMaterialController::class, 'materialDisplay'])->name('materialDisplay');
Route::get('/materialContent', [ClassMaterialController::class, 'materialcontent'])->name('materialcontent');

Route::get('/accept_material/{id}', [ClassMaterialController::class, 'accept_material']);
Route::get('/reject_material/{id}', [ClassMaterialController::class, 'reject_material']);

Route::post('/classMaterialInput',[ClassMaterialController::class, 'classMaterialInput'])->name('classMaterialInput');