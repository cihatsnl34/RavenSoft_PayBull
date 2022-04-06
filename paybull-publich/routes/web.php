<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Artisan;
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
Route::redirect('/destek','/iletisim');
Route::redirect('/alternatif-odeme-alma-yontemleri','/');


Route::post('mail', [\App\Http\Controllers\MailControllere::class, 'mail'])->name('email');


//Anasayfa
Route::get('/home', [HomeController::class, 'index']);
Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/basvurunuz-alindi', function () {
    return view('home.basvurunuz-alindi');
})->name('basvurunuz-alindi');

#Ürünler 
Route::get('/sanal-pos', function () {
    return view('home.sanal-pos');
})->name('sanal-pos');
Route::get('/link-ile-odeme-alma', function () {
    return view('home.link-odeme');
})->name('link-odeme');
Route::get('/mobil-pos', function () {
    return view('home.mobil-pos');
})->name('mobil-pos');
Route::get('/manuel-pos', function () {
    return view('home.manuel-pos');
})->name('manuel-pos');

#Abonelik Yöntemi
Route::get('/abonelik-yontemi', function () {
    return view('home.abonelik-yontemi');
})->name('abonelik-yontemi');
#Hakkımızda
Route::get('/hakkimizda', function () {
    return view('home.hakkimizda');
})->name('hakkimizda');

#İş ortakları
Route::get('/is-ortaklari', function () {
    return view('home.is-ortaklari');
})->name('is-ortaklari');
#İletişim
Route::get('/iletisim', function () {
    return view('home.iletisim');
})->name('iletisim');
#KVKK
Route::get('/kvkk', function () {
    return view('home.kvkk');
})->name('kvkk');
#Kullanıcı Sözleşmesi
Route::get('/kullanici-sozlesmesi', function () {
    return view('home.kullanici-sozlesmesi');
})->name('kullanici-sozlesmesi');
#Gizlilik Politası
Route::get('/gizlilik-politikasi', function () {
    return view('home.gizlilik-politikasi');
})->name('gizlilik-politikasi');
#Çerez Politikası
Route::get('/cerez-politikasi', function () {
    return view('home.cerez-politikasi');
})->name('cerez-politikasi');
#Footer Entegrasyon
Route::get('/entegrasyonlar', function () {
    return view('home.entegrasyonlar');
})->name('entegrasyonlar');
//Basvuru
Route::get('/basvuru', function () {
    return view('home.hizli-basvuru');
})->name('basvuru');
Route::post('basvuru/add',[\App\Http\Controllers\BasvuruController::class, 'store'])->name('basvuru_add');
//Hızlı Basvuru
Route::get('/hizli-basvuru', function () {
    return view('home.hizli_basvuru');
})->name('hizli-basvuru');
Route::post('hizli-basvuru/add',[\App\Http\Controllers\BasvuruController::class, 'hizli_basvuru'])->name('hizli_basvuru_add');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//Admin
Route::redirect('/admin','/admin/login');
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function ()
{
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
        Route::post('application/completed/{id}',[\App\Http\Controllers\Admin\ApplicationController::class, 'completed'])->name('admin_application_completed');
        
         //Evraklar

         Route::get('documents',[\App\Http\Controllers\Admin\DocumentsController::class, 'index'])->name('admin_documents'); 
         Route::post('documents/add/{applications_id}',[\App\Http\Controllers\Admin\DocumentsController::class, 'store'])->name('admin_documents_add');
         Route::get('documents/create/{applications_id}',[\App\Http\Controllers\Admin\DocumentsController::class, 'create'])->name('admin_documents_create');
         Route::get('documents/delete/{id}/{applications_id}',[\App\Http\Controllers\Admin\DocumentsController::class, 'destroy'])->name('admin_documents_delete');
         
        

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
        Route::get('application/approve/{id}',[\App\Http\Controllers\Personal\HomeController::class, 'approve'])->name('personal_application_approve');
        Route::get('application/delete/{id}',[\App\Http\Controllers\Personal\HomeController::class, 'destroy'])->name('personal_application_delete');
        Route::post('application/update/{id}',[\App\Http\Controllers\Personal\HomeController::class, 'update'])->name('personal_application_update');
        Route::get('application/edit/{id}',[\App\Http\Controllers\Personal\HomeController::class, 'edit'])->name('personal_application_edit');
        Route::get('application/eddit/{id}',[\App\Http\Controllers\Personal\HomeController::class, 'eddit'])->name('personal_application_eddit');
        Route::post('application/add',[\App\Http\Controllers\Personal\HomeController::class, 'store'])->name('personal_application_add');
        Route::get('application/add', function () {
            return view('personal.application.application_add');
        });
        Route::post('application/completed/{id}',[\App\Http\Controllers\Personal\HomeController::class, 'completed'])->name('personal_application_completed');
        //ajax
        Route::get('getInfo',[\App\Http\Controllers\Personal\HomeController::class, 'getAppInfo']);

        //Evraklar

        Route::get('documents',[\App\Http\Controllers\Personal\DocumentsController::class, 'index'])->name('personal_documents'); 
        Route::post('documents/add/{applications_id}',[\App\Http\Controllers\Personal\DocumentsController::class, 'store'])->name('personal_documents_add');
        Route::get('documents/create/{applications_id}',[\App\Http\Controllers\Personal\DocumentsController::class, 'create'])->name('personal_documents_create');
        Route::get('documents/delete/{id}/{applications_id}',[\App\Http\Controllers\Personal\DocumentsController::class, 'destroy'])->name('personal_documents_delete');
       
        Route::get('documents/zip/{applications_id}',[\App\Http\Controllers\ZipController::class, 'zipFile'])->name('personal_documents_download');
        
        
    });
    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});

Route::get('send-mail/{id}', [\App\Http\Controllers\MailControllere::class, 'send'])->name('send_email');
Route::get('send-mail-p/{id}', [\App\Http\Controllers\MailControllere::class, 'sendPersonal'])->name('send_email_perso');
Route::get('evrak/yukle/{id}', [\App\Http\Controllers\MailControllere::class, 'upload'])->name('evrak_yukle');
Route::post('evrak/yukle/{applications_id}',[\App\Http\Controllers\MailControllere::class, 'store'])->name('documents_add');
Route::get('evrak/sil/{id}',[\App\Http\Controllers\MailControllere::class, 'destroy'])->name('documents_delete');


//Clear Cache facade value:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
