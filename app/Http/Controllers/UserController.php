<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Auth;

class UserController extends Controller
{
    
    public function AdminSignin() : View
    {
        return view('backend.login.index');
    }

    public function AdminLogin(Request $request): RedirectResponse
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = false;

        if($request['remember_password']){
            $remember = true;
        }

        if (Auth::attempt($credentials,$remember)) {
            
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        else{

            return redirect()->route('admin.signin')->withErrors(['message' => 'Incorrect Credentials']);
        }
    }

    public function AdminDashboard() : View
    {
        return view('backend.dashboard');
    }

    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('admin.signin')->with('success', 'You have been successfully logged out.');
    }
}
