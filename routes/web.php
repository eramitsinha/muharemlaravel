<?php

use App\Http\Controllers\nantController;
use Illuminate\Support\Facades\Route;

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

Route::get('Home',[nantController::class,'home']);
Route::get('About',[nantController::class,'about']);
Route::get('Contact',[nantController::class,'contact']);
Route::get('registration',[nantController::class,'registration']);
Route::post('registration',[nantController::class,'insert']); 
Route::get('display_users',[nantController::class,'display_users']);
Route::get('user_loging',[nantController::class,'user_loging']);
Route::post('user_loging',[nantController::class,'check_loging']);
Route::get('user_dashboard',[nantController::class,'user_dashboard']);
Route::get('logout',[nantController::class,'logout']);
// Logic for delete
Route::get('/displayusers',[nantController::class,'displayusers']);

// 2nd Route for delete
Route::get('deleteuser/{id}',[nantController::class,'deleteuser']);

// Routes for Edits
Route::get('edituser/{id}',[nantController::class,'edituser']);

Route::get('updateuser/{id}',[nantController::class,'updateuser']);

// Display Route
Route::get('display',[nantController::class,'display']);

// Sending Email
Route::get('contactform',[nantController::class,'contactform']);
Route::post('contactform_action',[nantController::class,'contactform_action']);


Route::get('user_logout',[nantController::class,'user_logout']);


// Route for Data Tables
Route::get('display1',[nantController::class,'display1']);
Route::get('students/list', [nantController::class, 'getUsers'])->name('users.list');