<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Application;

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
        $ApplicationData->status = "Onaylandı";
        $ApplicationData->save();
        return redirect()->route('personal.dashboard');
    }
}
