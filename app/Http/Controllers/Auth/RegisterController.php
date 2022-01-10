<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function register(Request $request)
    {
        $attributes = $request->validate([
            'username' => ['required', 'unique:users', 'min:3', 'max:255'],
            'full_name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'phone_number' => ['required', 'numeric'],
            'password' => ['required', 'confirmed']
        ]);

        $attributes['password'] = Hash::make($attributes['password']);

        $user = User::create($attributes);
        $user->sendEmailVerificationNotification();
        Auth::login($user);

        return redirect()->route('index')->with('notification', 'berhasil membuat akun');
    }
}
