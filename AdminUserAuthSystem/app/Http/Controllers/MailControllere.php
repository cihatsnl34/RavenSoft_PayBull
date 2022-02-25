<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Documents;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailControllere extends Controller
{
    public function send($id)
    {
        $ApplicationData = Application::find($id);
        $details = [
            'title' => 'Paybull Evrak Yükleme',
            'body' => 'Başvurunuz kabul edilmiştir. Lütfen aşağıdaki linke tıklayarak evrakları yükleyebilirsiniz.',
            //TODO: edit the link below after host the prog.
            'link' => 'http://127.0.0.1:8000/evrak/yukle/'.$id
        ];
        Mail::to($ApplicationData->email)->send(new \App\Mail\EvrakEklemeMail($details));
    
       // dd("Email gönderildi!");
       return redirect()->route('admin.admin_application');
    }

    public function sendPersonal($id)
    {
        $ApplicationData = Application::find($id);
        $details = [
            'title' => 'Paybull Evrak Yükleme',
            'body' => 'Başvurunuz kabul edilmiştir. Lütfen aşağıdaki linke tıklayarak evrakları yükleyebilirsiniz.',
            //TODO: edit the link below after host the prog.
            'link' => 'http://127.0.0.1:8000/evrak/yukle/'.$id
        ];
    
        Mail::to($ApplicationData->mail)->send(new \App\Mail\EvrakEklemeMail($details));
    
       // dd("Email gönderildi!");
       return redirect()->route('personal.dashboard');
    }

    public function upload($id)
    {
        $data = Application::find($id);
        $files = DB::table('documents')->where('applications_id',$id)->get();
        return view('email.yuklemeGorunum',['data'=>$data,'files'=>$files]);
    }
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
        $data->firmaYetkiliKimlik = $request->file('firmaYetkiliKimlik')->storeAs($filename,'firmaYetkiliKimlik.pdf');
        $data->digerYetkiliKimlik = $request->file('digerYetkiliKimlik')->storeAs($filename,'digerYetkiliKimlik.pdf');
        $data->adresBelgesi = $request->file('adresBelgesi')->storeAs($filename,'adresBelgesi.pdf');
        $data->imzaSirküleri =$request->file('imzaSirküleri')->storeAs($filename,'imzaSirküleri.pdf');
        $data->vergiLevhasi = $request->file('vergiLevhasi')->storeAs($filename,'vergiLevhasi.pdf');
        $data->save();
        //return redirect()->route('evrak_yukle/',['id'=>$applications_id]);
        return back();
        //'/'.$applications_id
    }
    public function destroy(Documents $documents,$id)
    {
        $data = Documents::Find($id);
        $data->delete();
        return back();
    }
    public function approve(Application $application, $applications_id)
    {
        $ApplicationData = Application::find($applications_id);
        $ApplicationData->status_id = 3;
        $ApplicationData->save();    
        return back();
    }
   
}
