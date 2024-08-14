<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Halaman list pengguna yang sudah registrasi
    public function index()
    {
        $users = User::where('role', 'user')->get();
        return view('users.index', compact('users'));
    }

    // Detail masing-masing pengguna
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Approve registrasi pengguna
    public function approve($id)
    {
        $user = User::findOrFail($id);
        $user->approved = true; // Misalnya ada kolom is_approved di tabel users
        $user->save();

        return redirect()->route('users.index')->with('success', 'User approved successfully');
    }
}
