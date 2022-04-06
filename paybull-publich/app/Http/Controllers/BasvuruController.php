<?php

namespace App\Http\Controllers;
use App\Models\Application;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class BasvuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currentTime = Carbon::now();
        DB::table('applications')->insert([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'webSite' => $request->input('webSite'),
            'ciro' => $request->input('ciro'),
            'companyName' => $request->input('companyName'),
            'platform' => $request->input('platform'),
            'created_at' => $currentTime
 
        ]);
        
        $details = [
             'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'webSite' => $request->input('webSite'),
            'ciro' => $request->input('ciro'),
            'companyName' => $request->input('companyName'),
            'platform' => $request->input('platform')
            
        ];
    
          Mail::to(['info@paybull.com','omer.gider@paybull.com','mucahit.peker@paybull.com','ceren.yigit@paybull.com'])->send(new \App\Mail\SendMailBasvuru($details));
          
        return redirect()->route('basvurunuz-alindi');
    }
    public function hizli_basvuru(Request $request)
    {
        $currentTime = Carbon::now();
        DB::table('applications')->insert([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'webSite' => $request->input('webSite'),
            'ciro' => $request->input('ciro'),
            'companyName' => $request->input('companyName'),
            'platform' => $request->input('platform'),
            'created_at' => $currentTime

        ]);
        
         $details = [
             'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'webSite' => $request->input('webSite'),
            'ciro' => $request->input('ciro'),
            'companyName' => $request->input('companyName'),
            'platform' => $request->input('platform')
            
        ];
    
        Mail::to(['info@paybull.com','omer.gider@paybull.com','mucahit.peker@paybull.com','ceren.yigit@paybull.com'])->send(new \App\Mail\SendMailBasvuru($details));
        
        return redirect()->route('basvurunuz-alindi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
