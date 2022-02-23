<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #aboutList = DB::table('abouts')->get();
        $aboutList = DB::select('select * from abouts');
        //print_r($aboutList);
        //exit();
        return view('admin.about.about',['aboutList'=>$aboutList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * @param  \App\Http\Requests\StoreAboutRequest  $request
     */
    public function create()
    {
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Http\Requests\StoreAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function add(StoreAboutRequest $request)
    {
        $currentTime = Carbon::now();
        DB::table('abouts')->insert([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'created_at'=>$currentTime
        ]);
        return redirect()->route('admin.admin_about');
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAboutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about,$id)
    {
        $AboutData = About::find($id);
        $aboutList = DB::table('abouts')->get();
        return view('admin.about.about_edit',['AboutData'=>$AboutData,'aboutList'=>$aboutList]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutRequest  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutRequest $request, About $about,$id)
    {
        $update = Carbon::now();
        $AboutData = About::find($id);
        $AboutData->title = $request->input('title');
        $AboutData->description = $request->input('description');
        $AboutData->update_at= $update;
        $AboutData->save();
        return redirect()->route('admin.admin_about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about,$id)
    {
        DB::table('abouts')->where('id','=',$id)->delete();
        return redirect()->route('admin.admin_about');
    }
}
