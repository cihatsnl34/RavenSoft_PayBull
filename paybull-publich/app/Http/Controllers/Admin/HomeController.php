<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    public function index(){
        return view('admin.dashboard');
    }
    
    */
    public function index(){
        /*
         Artisan::call('cache:clear');
         Artisan::call('config:clear');
         Artisan::call('config:cache');
         Artisan::call('route:clear');
         */
         return view('admin.index');
       
        
    }
    
}



?>
