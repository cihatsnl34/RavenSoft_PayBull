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
        $statuses = [
            '1' => 'Beklemede',
            '2' => 'Evrak Bekleniyor',
            '3' => 'Evrak İnceleniyor',
            '4' => 'Tamamlandı',
            '5' => 'Reddedildi',
            '6' => 'Evrak Eksik',
        ];
        $applicationList = DB::select('select * from applications');
        $statusList = DB::table('statuses')->get();
        return view('personal.dashboard', ['applicationList' => $applicationList, 'stat'=> $statuses,'statusList'=>$statusList]);
    }

    public function edit(Application $application, $id)
    {
        $ApplicationData = Application::find($id);
        $ApplicationData->status_id = 2; // 2-> evrak bekleniyor
        $ApplicationData->save();
        return redirect()->route('send_email_perso',['id'=>$id]);
        
    }
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
            'created_at' => $currentTime,
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
        $ApplicationData->companyName = $request->input('companyName');
        $ApplicationData->phone = $request->input('phone');
        $ApplicationData->ciro = $request->input('ciro');
        $ApplicationData->webSite = $request->input('webSite');
        $ApplicationData->platform = $request->input('platform');
        $ApplicationData->personelId = session('id');
        $ApplicationData->updated_at = $update;
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
        $evrakBeklenenSayisi = 0;
        $evrakIncelenenSayisi = 0;
        $reddedilenSayisi = 0;
        $eksikEvrakSayisi = 0;

        foreach ($applicationList as $value) {

            switch ($value->status_id) {
                case 1:         //1 -> beklemede
                    $beklenenSayisi += 1;
                    break;
                case 2:         //2-> evrak bekleniyor
                    $evrakBeklenenSayisi += 1;
                    break;
                case 3:         //3-> Evrak İnceleniyor
                    $evrakIncelenenSayisi += 1;
                    break;
                case 4:         //4 -> tamamlandi
                    $tamamlananSayisi += 1;
                    break;
                case 5:         //5 -> red edildi
                    $reddedilenSayisi += 1;
                    break;
                case 6:         //6 -> eksik evrak
                    $eksikEvrakSayisi += 1;
                    break;
                default:
                    # code...
                    break;
            }
        }

        $msg  = [
            'tamamlanan' => $tamamlananSayisi,
            'evrakBekleyen' => $evrakBeklenenSayisi,
            'beklenen' => $beklenenSayisi,
            'evrakIncelenen' => $evrakIncelenenSayisi,
            'redEdilen' => $reddedilenSayisi,
            'eksikEvrak' => $eksikEvrakSayisi,
        ];

        return response()->json(array('msg'=> $msg ), 200);
    }
    public function completed(Request $request,Application $application,$id)
    {
        $ApplicationData = Application::find($id);
        $ApplicationData->status_id = $request->input('status');
        $ApplicationData->save();
        
        return redirect()->route('personal.dashboard',);
    }
    public function approve(Application $application, $id)
    {
        $ApplicationData = Application::find($id);
        $ApplicationData->status_id = 2;
        $ApplicationData->save();
        
        return redirect()->route('send_email_perso',['id'=>$id]);
    }

}
