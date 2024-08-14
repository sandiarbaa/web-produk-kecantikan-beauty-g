<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register.index');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama' => 'required|min:5',
            'nomor_telepon' => 'required|min:10|unique:users',
            'email' => 'required|email:dns|unique:users|min:5',
            'password' => 'required|min:5',
            //'role' => 'required|in:user,admin',
        ]);

        $validatedData['role'] = 'user';
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);
        
        return redirect('/login')->with('registerSuccess', 'Registrasi Berhasil. Silahkan Login');
    }
}
