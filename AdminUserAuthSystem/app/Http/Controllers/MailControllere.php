<?php

namespace App\Http\Controllers;

use App\Models\Application;
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
}
