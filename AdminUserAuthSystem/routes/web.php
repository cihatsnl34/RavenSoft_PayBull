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
Route::redirect('/admin','/admin/login');
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
        Route::get('application/approve/{id}',[\App\Http\Controllers\Admin\ApplicationController::class, 'approve'])->name('admin_application_approve');
        Route::get('application/edit/{id}',[\App\Http\Controllers\Admin\ApplicationController::class, 'edit'])->name('admin_application_edit');
        Route::post('application/update/{id}',[\App\Http\Controllers\Admin\ApplicationController::class, 'update'])->name('admin_application_update');
        Route::get('application/delete/{id}',[\App\Http\Controllers\Admin\ApplicationController::class, 'destroy'])->name('admin_application_delete');
        
        //ajax
        Route::get('getInfo',[\App\Http\Controllers\Admin\ApplicationController::class, 'getAppInfo'])->name('get_app_info');

        //personal bilgileri
        
        Route::get('personals',[\App\Http\Controllers\Admin\PersonalsController::class, 'index'])->name('admin_personals'); 
        Route::post('personals/add',[\App\Http\Controllers\Admin\PersonalsController::class, 'store'])->name('admin_personals_add');
        Route::get('personals/add', function () {
            return view('admin.personals.personals_add');
            
        });
        Route::get('personals/delete/{id}',[\App\Http\Controllers\Admin\PersonalsController::class, 'destroy'])->name('admin_personals_delete');

    });
    Route::get('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});




//Personal
Route::redirect('/personal','/personal/personalLogin');
Route::namespace('Personal')->prefix('personal')->name('personal.')->group(function ()
{
    Route::namespace('Auth')->middleware('guest:personal')->group(function () 
    {
        Route::get('personalLogin','AuthenticatedSessionController@create')->name('login');
        Route::post('personalLogin','AuthenticatedSessionController@store')->name('personallogin');
    });
    Route::middleware('personal')->group(function () {
        Route::get('dashboard','HomeController@index')->name('dashboard');


        //Başvurular
        Route::get('application/delete/{id}',[\App\Http\Controllers\Personal\HomeController::class, 'destroy'])->name('personal_application_delete');
        Route::post('application/update/{id}',[\App\Http\Controllers\Personal\HomeController::class, 'update'])->name('personal_application_update');
        Route::get('application/edit/{id}',[\App\Http\Controllers\Personal\HomeController::class, 'edit'])->name('personal_application_edit');
        Route::get('application/eddit/{id}',[\App\Http\Controllers\Personal\HomeController::class, 'eddit'])->name('personal_application_eddit');
        Route::post('application/add',[\App\Http\Controllers\Personal\HomeController::class, 'store'])->name('personal_application_add');
        Route::get('application/add', function () {
            return view('personal.application.application_add');
        });
        //ajax
        Route::get('getInfo',[\App\Http\Controllers\Personal\HomeController::class, 'getAppInfo']);

        
        
    });
    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');

});