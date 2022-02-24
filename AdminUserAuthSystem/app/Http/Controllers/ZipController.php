<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZipArchive;
use File;
use App\Models\Application;
use Illuminate\Support\Facades\DB;

class ZipController extends Controller
{
    public function zipFile($applications_id){
        
        $basvuru = Application::find($applications_id);
        $zip = new ZipArchive;
        $fileName = $basvuru->companyName.'.zip';
        if($zip->open(storage_path('app/public/'.$fileName),ZipArchive::CREATE) === TRUE)
        {
            $files = File::files(storage_path('app/public/'.(string)$applications_id));
            foreach($files as $value)
            {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value,$relativeNameInZipFile);
            }
            $zip->close();
        }
        return response()->download(storage_path('app/public/'.$fileName));
    }
}
