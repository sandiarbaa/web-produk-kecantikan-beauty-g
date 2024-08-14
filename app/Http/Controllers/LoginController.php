<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login.index');
    }

    public function authentication(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns|min:5',
            'password' => 'required|min:5'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if (!$user->approved) {
                Auth::logout();
                return back()->with('loginError', 'Akun Anda belum disetujui oleh admin.');
            }

            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Daftarkan akun anda terlebih dahulu!');
    }

    /*
    public function authentication(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns|min:5',
            'password' => 'required|min:5'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Failed!');
    }
    */

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
