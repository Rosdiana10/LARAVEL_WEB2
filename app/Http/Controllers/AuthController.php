<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function cekLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect('/dashboard')
                ->with('success', 'Login successful.');

        }

        return redirect('/login-manual')
            ->with('error', 'Login failed. Periksa Username/Password.');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login-manual')
            ->with('success', 'Anda berhasil logout.');
    }
}