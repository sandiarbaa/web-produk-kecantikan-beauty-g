<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserApprovalController extends Controller
{
    public function index() {
        // Tampilkan daftar pengguna yang belum di-approve
        $users = User::where('approved', false)->get();
        return view('admin.users.index', compact('users'));
    }

    public function approve($id) {
        $user = User::findOrFail($id);
        $user->approved = true;
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Pengguna berhasil di-approve.');
    }
}
