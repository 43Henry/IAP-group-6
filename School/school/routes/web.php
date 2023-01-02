<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthenticationController;
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

Route::get('/', function () 
{
    return view('landingPage');
});

Route::get('application-form', function () 
{
    return view('ApplicationForm1');
});

Route::get('home', function()
{
    return view('landingPage');
});

Route::get('login', function()
{
    return view('login');
});

Route::get('add-employee', function()
{
    return view('add_employee');
});

Route::get('index', function()
{
    return view('index');
});

Route::get('view-employee', function()
{
    return view('view_employee');
});

Route::get('view-work', function()
{
    return view('view_work');
});
//Route::get('login', [AuthenticationController::class, 'index']) -> name('login');
//Route::get('student', [StudentController::class, 'index']);