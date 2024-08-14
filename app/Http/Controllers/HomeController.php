<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
    $user = Auth::user();

     // Cek role pengguna
        if ($user->role === 'admin') {
            return view('admin.home'); // Tampilkan view untuk admin
        } else {
            return view('user.home'); // Tampilkan view untuk pengguna biasa
        }
    }
}
