<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Dashboardcontroller;
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

Route::get('/doromal',function(){
	return view('doro_view');
});

Route::get('/info_user',[Usercontroller::class, 'userinfo']);
Route::get('/list',[Usercontroller::class,'listuser']);

Route::get('adminlist',[Usercontroller::class,'listadmin']);
Route::get('studentadd',[Usercontroller::class,'addstudent']);

Route::get('/mydashboard',[Dashboardcontroller::class,'viewdashboard']);
Route::get('/reports',[Dashboardcontroller::class,'viewreports']);