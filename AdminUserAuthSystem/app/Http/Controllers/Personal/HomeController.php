<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Application;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {

        $applicationList = DB::select('select * from applications');
        return view('personal.dashboard', ['applicationList' => $applicationList]);
    }

    public function edit(Application $application, $id)
    {
        $ApplicationData = Application::find($id);
        $ApplicationData->status = "EvrakBekleniyor";
        $ApplicationData->save();
        return redirect()->route('personal.dashboard');
    }
    public function store(Request $request)
    {
        $currentTime = Carbon::now();
        DB::table('applications')->insert([
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'cardDetails' => $request->input('cardDetails'),
            'streetNumber' => $request->input('streetNumber'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'companyName' => $request->input('companyName'),
            'created_at'=>$currentTime,
            'personelId' =>session('id')
            
        ]);
        return redirect()->route('personal.dashboard');
    }
    public function destroy(Application $application, $id)
    {
        DB::table('applications')->where('id','=',$id)->delete();
        return redirect()->route('personal.dashboard');
    }
    public function update(Request $request,Application $application, $id)
    {
        $update = Carbon::now();
        $ApplicationData = Application::find($id);
        $ApplicationData->fullname = $request->input('fullname');
        $ApplicationData->email = $request->input('email');
        $ApplicationData->cardDetails = $request->input('cardDetails');
        $ApplicationData->streetNumber = $request->input('streetNumber');
        $ApplicationData->city = $request->input('city');
        $ApplicationData->country = $request->input('country');
        $ApplicationData->companyName = $request->input('companyName');
        $ApplicationData->update_at= $update;
        $ApplicationData->save();
        return redirect()->route('personal.dashboard');
    }
    public function eddit(Application $application,$id)
    {
        $ApplicationData = Application::find($id);
        $applicationList = DB::table('applications')->get();
        return view('personal.application.application_edit',['ApplicationData'=>$ApplicationData,'applicationList'=>$applicationList]);
    }

    public function getAppInfo()
    {
        $applicationList = DB::select('select * from applications');
        $tamamlananSayisi = 0;
        $beklenenSayisi = 0;
        $evrakBeklenenSayisi =0;

        //todo: change status in database to integer and make a table to them
        foreach ($applicationList as $value) {
            if ($value->status == "Onaylandı") {
                $tamamlananSayisi+= 1;
            }
            elseif($value->status == "beklemede"){
                $beklenenSayisi += 1;
            }
            elseif($value->status == "EvrakBekleniyor"){
                $evrakBeklenenSayisi += 1;
            }
        }

        $msg  = [
            'tamamlanan' => $tamamlananSayisi,
            'evrakBekleyen' => $evrakBeklenenSayisi,
            'beklenen' => $beklenenSayisi,
        ];

        return response()->json(array('msg'=> $msg ), 200);
    }

}
