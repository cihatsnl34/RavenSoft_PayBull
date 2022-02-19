<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


//Anasayfa
Route::get('/home', [HomeController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
        Route::get('login','AuthenticatedSessionController@create')->name('login');
        Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');
    });
    Route::middleware('admin')->group(function () {
        Route::get('dashboard','HomeController@index')->name('dashboard'); 
        //Hakkımızda
        Route::get('admin.about',[\App\Http\Controllers\Admin\AboutController::class, 'index'])->name('admin_about'); 
        Route::get('admin.about/add',[\App\Http\Controllers\Admin\AboutController::class, 'add'])->name('admin_about_add');
        Route::post('admin.about/create',[\App\Http\Controllers\Admin\AboutController::class, 'create'])->name('admin_about_create');
        Route::post('admin.about/update',[\App\Http\Controllers\Admin\AboutController::class, 'update'])->name('admin_about_update');
        Route::get('admin.about/delete',[\App\Http\Controllers\Admin\AboutController::class, 'destroy'])->name('admin_about_delete');
        Route::get('admin.about/show',[\App\Http\Controllers\Admin\AboutController::class, 'show'])->name('admin_about_show');
    });
    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});
Route::redirect('/admin','/admin/login');



