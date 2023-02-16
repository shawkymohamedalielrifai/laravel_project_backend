<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\UserController;
use App\Models\Employee;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[employeeController::class,'home']);
Route::get('dashboard',[employeeController::class,'dashboard']);
Route::get('login',[employeeController::class,'index1'])->name('login');
Route::get('postlogin',[employeeController::class,'login'])->name('postlogin');
Route::get('sigup',[employeeController::class,'signup'])->name('register-user');
Route::get('postsignup',[employeeController::class,'signupsave'])->name('postsignup');
Route::get('signout',[employeeController::class,'signOut'])->name('signout');
Route::get('add-employee',[employeeController::class,'addEmployee']);






Route::get('employee-list',[employeeController::class,'index']);
Route::get('add-employee',[employeeController::class,'addEmployee']);
Route::post('save-employee',[employeeController::class,'saveEmployee']);
Route::get('edit-employee/{id}',[employeeController::class,'editEmployee']);
Route::post('update-employee',[employeeController::class,'updateEmployee']);
Route::get('delete-employee/{id}',[employeeController::class,'deleteEmployee']);
