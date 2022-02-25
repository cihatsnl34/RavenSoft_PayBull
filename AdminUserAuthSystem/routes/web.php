<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Response;

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
        
         //Evraklar

         Route::get('documents',[\App\Http\Controllers\Admin\DocumentsController::class, 'index'])->name('admin_documents'); 
         Route::post('documents/add/{applications_id}',[\App\Http\Controllers\Admin\DocumentsController::class, 'store'])->name('admin_documents_add');
         Route::get('documents/create/{applications_id}',[\App\Http\Controllers\Admin\DocumentsController::class, 'create'])->name('admin_documents_create');
         Route::get('documents/delete/{id}/{applications_id}',[\App\Http\Controllers\Admin\DocumentsController::class, 'destroy'])->name('admin_documents_delete');
         
         Route::get('documents/approve/{applications_id}',[\App\Http\Controllers\Admin\DocumentsController::class, 'approve'])->name('admin_documents_approve');

         Route::get('documents/zip/{applications_id}',[\App\Http\Controllers\ZipController::class, 'zipFile'])->name('admin_documents_download');
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

        //Evraklar

        Route::get('documents',[\App\Http\Controllers\Personal\DocumentsController::class, 'index'])->name('personal_documents'); 
        Route::post('documents/add/{applications_id}',[\App\Http\Controllers\Personal\DocumentsController::class, 'store'])->name('personal_documents_add');
        Route::get('documents/create/{applications_id}',[\App\Http\Controllers\Personal\DocumentsController::class, 'create'])->name('personal_documents_create');
        Route::get('documents/delete/{id}/{applications_id}',[\App\Http\Controllers\Personal\DocumentsController::class, 'destroy'])->name('personal_documents_delete');
        Route::get('documents/approve/{applications_id}',[\App\Http\Controllers\Personal\DocumentsController::class, 'approve'])->name('personal_documents_approve');
        Route::get('documents/zip/{applications_id}',[\App\Http\Controllers\ZipController::class, 'zipFile'])->name('personal_documents_download');
        
        
    });
    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});

Route::get('send-mail/{id}', [\App\Http\Controllers\MailControllere::class, 'send'])->name('send_email');
Route::get('send-mail-p/{id}', [\App\Http\Controllers\MailControllere::class, 'sendPersonal'])->name('send_email_perso');
Route::get('evrak/yukle/{id}', [\App\Http\Controllers\MailControllere::class, 'upload'])->name('evrak_yukle');
Route::post('evrak/yukle/{applications_id}',[\App\Http\Controllers\MailControllere::class, 'store'])->name('documents_add');
Route::get('evrak/sil/{id}',[\App\Http\Controllers\MailControllere::class, 'destroy'])->name('documents_delete');
Route::get('evrak/approve/{applications_id}',[\App\Http\Controllers\MailControllere::class, 'approve'])->name('documents_approve');