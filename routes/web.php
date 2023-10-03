<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
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

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/sregister', function () {
    return view('sregister');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/tregister', function () {
    return view('tRegister');
});  
  
Route::get('/classMaterial', function () {
    return view('classMaterial');
}); 
Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

// 2023.10.03-akesh
// Submit feedback
Route::post('/submit-feedback', 'FeedbackController@store')->name('feedback.submit');

// Admin accepts feedback
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/feedback', 'FeedbackController@index')->name('feedback.index');
});

// Display feedback to guests
Route::get('/feedback', 'FeedbackController@show')->name('feedback.show');
// 2023.10.03-akesh