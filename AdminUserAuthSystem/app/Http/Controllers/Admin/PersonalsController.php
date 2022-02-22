<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Personal;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class PersonalsController extends Controller
{
    public function index()
    {
        $personalsList = DB::select('select * from personals');
        return view('admin.personals.personals',['personalsList'=>$personalsList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        DB::table('personals')->insert($user);

        return redirect()->route('admin.admin_personals');

    }
    public function destroy(Personal $personal,$id)
    {
        DB::table('personals')->where('id','=',$id)->delete();
        return redirect()->route('admin.admin_personals');
    }

}
