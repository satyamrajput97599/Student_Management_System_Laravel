<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\first;
use App\Http\Controllers\delete;
use App\Http\Controllers\edit;
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
Route::get("/login",[first::class,"getlog"]);
Route::get("/course",[first::class,"getcourse"]);
Route::get("/subject",[first::class,"getsubject"]);
Route::get("/class",[first::class,"getclass"]);
Route::get("/faculty",[first::class,"getfaculty"]);
Route::get("/student",[first::class,"getstudent"]);
Route::get("/classpersubject",[first::class,"getper"]);
Route::get("/checkattendence",[first::class,"getcheck"]);
Route::get("/attendencerecord",[first::class,"getrecord"]);
Route::get("/delete",[delete::class,"delete"]);
Route::get("/deletesub",[delete::class,"deletesubject"]);
Route::get("/deleteclas",[delete::class,"deleteclass"]);
Route::get("/deletefac",[delete::class,"deletefaculty"]);
Route::get("/deletestud",[delete::class,"deletestudent"]);
Route::get("/deleteper",[delete::class,"deletepers"]);
Route::get("/edit",[edit::class,"getedit"]);
Route::get("/editsub",[edit::class,"editsubject"]);
Route::get("/editclas",[edit::class,"editclass"]);
Route::get("/editfac",[edit::class,"editfaculty"]);
Route::get("/editstud",[edit::class,"editstudent"]);
Route::get("/editper",[edit::class,"editpers"]);