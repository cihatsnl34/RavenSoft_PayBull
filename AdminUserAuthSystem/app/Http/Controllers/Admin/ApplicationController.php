<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\DB;
class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicationList = DB::select('select * from applications');
        
        return view('admin.application.application',['applicationList'=>$applicationList]);
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
        DB::table('applications')->insert([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'cardDetails' => $request->input('cardDetails'),
            'streetNumber' => $request->input('streetNumber'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'companyName' => $request->input('companyName')
            
        ]);
        return redirect()->route('admin.admin_application');
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
    public function edit(Application $application,$id)
    {
        $ApplicationData = Application::find($id);
        $applicationList = DB::table('applications')->get();
        return view('admin.application.application_edit',['ApplicationData'=>$ApplicationData,'applicationList'=>$applicationList]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Application $application, $id)
    {
        $ApplicationData = Application::find($id);
        $ApplicationData->fullname = $request->input('fullname');
        $ApplicationData->email = $request->input('email');
        $ApplicationData->cardDetails = $request->input('cardDetails');
        $ApplicationData->streetNumber = $request->input('streetNumber');
        $ApplicationData->city = $request->input('city');
        $ApplicationData->country = $request->input('country');
        $ApplicationData->companyName = $request->input('companyName');
        $ApplicationData->save();
        return redirect()->route('admin.admin_application');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application,$id)
    {
        DB::table('applications')->where('id','=',$id)->delete();
        return redirect()->route('admin.admin_application');
    }
}