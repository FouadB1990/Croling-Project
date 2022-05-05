<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Auth::routes();

Route::get('/', function () {

    return view('auth.login'); 

    })->middleware('guest');

    
Route::group(
  [   
      'middleware' => ['auth']
  ], 
  function()
   {
    Route::get('/dashboard', 'SailorController@index')->name('dashboard');
    Route::get('/editprofile', 'SailorController@edit')->name('editprofile');
    Route::post('/editprofile', 'SailorController@update')->name('updateprofile');
   });

  

   

Route::get('admin', [AdminController::class,'adminIndex'])->name('admin.index')->middleware('is_admin');
Route::get('admin/user/info/{id}', [AdminController::class,'userInfo'])->name('admin.userInfo')->middleware('is_admin');
Route::delete('admin/user/delet', [AdminController::class,'deletuser'])->name('admin.deletuser')->middleware('is_admin');
// Route::get('admin/index', [AdminController::class,'adminIndex'])->name('admin.index')->middleware('is_admin');


