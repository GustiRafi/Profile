<?php

use Illuminate\Support\Facades\Route;

// use controller
use App\Http\Controllers\loginController;
use App\Http\Controllers\sosmedController;
use App\Http\Controllers\alamatController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\certificateController;
use App\Http\Controllers\introController;
use App\Http\Controllers\sendEmailController;

// use models
use App\Models\about;
use App\Models\alamat;
use App\Models\certificate;
use App\Models\contact;
use App\Models\intro;
use App\Models\project;
use App\Models\skill;
use App\Models\sosmed;

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
    return view('index',[
        'sosmeds' => sosmed::all(),
        'contacts' => contact::all(),
        'intros' => intro::all(),
        'abouts' => about::all(),
        'skills' => skill::orderBy('id','desc')->get(),
        'projects' => project::orderBy('id','desc')->get(),
        'certificates' => certificate::orderBy('id','desc')->get(),
        'alamats' => alamat::all(),
    ]);
});

Route::post('/sendMail',[sendEmailController::class,'send']);

Route::get('/login',function(){
    return view('login.index');
})->name('login')->middleware('guest');

Route::get('/dashboard',function(){
    return view('Admin.index');
})->middleware('auth');

Route::post('/login',[loginController::class, 'authenticate']);
Route::post('/logout',[loginController::class,'logout']);

Route::resource('/dashboard/sosmed',sosmedController::class)->except('create','store','show','destroy')->middleware('auth');
Route::resource('/dashboard/alamat',alamatController::class)->except('create','store','show','destroy')->middleware('auth');
Route::resource('/dashboard/contact',contactController::class)->except('create','store','show','destroy')->middleware('auth');
Route::resource('/dashboard/about',aboutController::class)->except('create','store','show','destroy')->middleware('auth');
Route::resource('/dashboard/intro',introController::class)->except('create','store','show','destroy')->middleware('auth');
Route::resource('/dashboard/skill',skillController::class)->except('show')->middleware('auth');
Route::resource('/dashboard/project',projectController::class)->except('show')->middleware('auth');
Route::resource('/dashboard/certificate',certificateController::class)->except('show')->middleware('auth');