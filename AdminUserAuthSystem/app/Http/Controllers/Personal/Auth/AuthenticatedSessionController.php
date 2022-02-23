<?php

namespace App\Http\Controllers\Personal\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\PersonalLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('personal.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PersonalLoginRequest $request)
    {
        $request->authenticate();
        
        $email = $request->input('email');
        $user = DB::select('select * from personals where email = ?', [$email])[0];
        session(['username' =>$user->name]);
        session(['id' => $user->id]);
        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::PERSONAL_HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('personal')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
