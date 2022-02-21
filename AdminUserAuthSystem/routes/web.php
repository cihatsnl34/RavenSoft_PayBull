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
        Route::get('about',[\App\Http\Controllers\Admin\AboutController::class, 'index'])->name('admin_about'); 
        Route::post('about/add',[\App\Http\Controllers\Admin\AboutController::class, 'add'])->name('admin_about_add');
        Route::get('about/add', function () {
            return view('admin.about.about_add');
        });


        Route::post('about/create',[\App\Http\Controllers\Admin\AboutController::class, 'create'])->name('admin_about_create');
        Route::get('about/edit/{id}',[\App\Http\Controllers\Admin\AboutController::class, 'edit'])->name('admin_about_edit');
        Route::post('about/update/{id}',[\App\Http\Controllers\Admin\AboutController::class, 'update'])->name('admin_about_update');
        Route::get('about/delete/{id}',[\App\Http\Controllers\Admin\AboutController::class, 'destroy'])->name('admin_about_delete');
        Route::get('about/show',[\App\Http\Controllers\Admin\AboutController::class, 'show'])->name('admin_about_show');

        //Başvurular

        Route::get('application',[\App\Http\Controllers\Admin\ApplicationController::class, 'index'])->name('admin_application'); 
        Route::post('application/add',[\App\Http\Controllers\Admin\ApplicationController::class, 'store'])->name('admin_application_add');
        Route::get('application/add', function () {
            return view('admin.application.application_add');
        });

        Route::get('application/edit/{id}',[\App\Http\Controllers\Admin\ApplicationController::class, 'edit'])->name('admin_application_edit');
        Route::post('application/update/{id}',[\App\Http\Controllers\Admin\ApplicationController::class, 'update'])->name('admin_application_update');
        Route::get('application/delete/{id}',[\App\Http\Controllers\Admin\ApplicationController::class, 'destroy'])->name('admin_application_delete');
        

    });
    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});
Route::redirect('/admin','/admin/login');



