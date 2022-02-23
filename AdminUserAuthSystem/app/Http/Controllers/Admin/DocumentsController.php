<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documents;
use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Storage;
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
        return view('admin.documents.documents_add',['data'=>$data]);
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
        $data->firmaYetkiliKimlik = $request->file('firmaYetkiliKimlik')->store($filename);
        $data->digerYetkiliKimlik = $request->file('digerYetkiliKimlik')->store($filename);
        $data->adresBelgesi = $request->file('adresBelgesi')->store($filename);
        $data->imzaSirküleri =$request->file('imzaSirküleri')->store($filename);
        $data->vergiLevhasi = $request->file('vergiLevhasi')->store($filename);
        $data->save();
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
    public function destroy(Documents $documents)
    {
        //
    }
}
