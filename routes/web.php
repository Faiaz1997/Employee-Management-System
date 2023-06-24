<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\emsController;
use GuzzleHttp\Middleware;

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

Route::group(['middleware'=>'userLogin'],function(){
    Route::get('/',[adminController::class,'index'])->name('index');
    Route::get('/add-user',[adminController::class,'addUser'])->name('add.user');
    Route::post('/user-added',[adminController::class,'userAdded'])->name('user.added');
    Route::get('/employee-details',[adminController::class,'employeeDetails'])->name('employee.details');
    Route::get('/attendance-details',[adminController::class,'attendanceDetails'])->name('attendance.details');
    Route::get('/attendance-report',[adminController::class,'attendanceReport'])->name('attendance.report');
    Route::get('/empdashboard',[employeeController::class,'index'])->name('emp.dashboard');
    Route::get('/workingdashboard',[employeeController::class,'working'])->name('working.dashboard');
    Route::post('/date-search',[adminController::class,'dateSearch'])->name('date.search');
    Route::post('/checkout',[employeeController::class,'checkout'])->name('checkout');
});

Route::get('/login',[emsController::class,'login'])->name('login');
Route::post('/check-login',[emsController::class,'checkLogin'])->name('check.login');
Route::get('/logout', [emsController::class, 'logout'])->name('user.logout');

