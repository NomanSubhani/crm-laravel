<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;

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

// Route::get('/', function () {
//     return view('login');
// });

Route::view('/','signin');
Route::post('signin',[SigninController::class,'show']);
Route::get('admin',[AdminController::class,'index']);
Route::resource('employee',EmployeeController::class);
Route::resource('company',CompanyController::class);
Route::get('/logout', function () {
    if(session()->has('data')){
        session()->pull('data',null);
    }
    return redirect('/');
});