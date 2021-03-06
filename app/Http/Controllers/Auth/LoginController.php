<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        $identification = filter_var($attributes['email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $remember = $request->input('remember-me') ? true : false;

        if (Auth::attempt([$identification => $attributes['email'], 'password' => $attributes['password']], $remember))
        {
            // Successful Login
            $request->session()->regenerate();
            return redirect()->route('index')->with('notification', 'Berhasil masuk');
        }

        // Failed Login
        return back()->withErrors(['error' => 'Email atau password salah'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index')->with('notification', 'Berhasil keluar');
    }
}
