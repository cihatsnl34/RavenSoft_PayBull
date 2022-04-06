<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documents;
use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class DocumentsController extends Controller
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
    public function create($applications_id)
    {
        $data = Application::find($applications_id);
        $files = DB::table('documents')->where('applications_id',$applications_id)->get();
        return view('admin.documents.documents_add',['data'=>$data,'files'=>$files]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$applications_id)
    {
        $data = new Documents;
        $data->applications_id=$applications_id;
        /*
        $data->firmaYetkiliKimlik = Storage::putFile('documents1',$request->file('firmaYetkiliKimlik'));
        $data->digerYetkiliKimlik = Storage::putFile('documents1',$request->file('digerYetkiliKimlik'));
        $data->adresBelgesi = Storage::putFile('documents1',$request->file('adresBelgesi'));
        $data->imzaSirküleri = Storage::putFile('documents1',$request->file('imzaSirküleri'));
        $data->vergiLevhasi = Storage::putFile('documents1',$request->file('vergiLevhasi'));
        */
        $filename =$applications_id;
        if($request->hasFile('firmaYetkiliKimlik')){
        foreach ($request->firmaYetkiliKimlik as $file) {
        $fileAd = $file->getClientOriginalName();
        $filesize = $file->getClientSize();
        $file->storeAs($filename,$fileAd);

        $data->firmaYetkiliKimlik = $fileAd;

        }}
        if($request->hasFile('digerYetkiliKimlik')){
        foreach ($request->digerYetkiliKimlik as $file) {
        $fileAd = $file->getClientOriginalName();
        $file->storeAs($filename,$fileAd);

        $data->digerYetkiliKimlik = $fileAd;

        }}
        $fileAdresBelgesi =$request->adresBelgesi->getClientOriginalName();

        $data->adresBelgesi = $request->file('adresBelgesi')->storeAs($filename,$fileAdresBelgesi);
        $data->imzaSirküleri =$request->file('imzaSirküleri')->storeAs($filename,'imzaSirküleri.pdf');
        $data->vergiLevhasi = $request->file('vergiLevhasi')->storeAs($filename,'vergiLevhasi.pdf');
        $data->save();
        return redirect()->route('admin.admin_documents_create',['applications_id'=>$applications_id]);
        
    }
     
    public function download($applications_id)
    {
        return Storage::download('maxresdefault.jpg');
        
    }
    public function approve(Application $application, $applications_id)
    {
        $ApplicationData = Application::find($applications_id);
        $ApplicationData->status_id = 3;
        $ApplicationData->save();
        
        return redirect()->route('admin.admin_documents_create',['applications_id'=>$applications_id]);
    }

    /** 
     * Display the specified resource.
     *
     * @param  \App\Models\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function show(Documents $documents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function edit(Documents $documents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documents $documents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documents $documents,$id,$applications_id)
    {
        $data = Documents::Find($id);
        $data->delete();
        return redirect()->route('admin.admin_documents_create',['applications_id'=>$applications_id]);
    }
}
