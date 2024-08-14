<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
         // Jumlah pengguna yang sedang login dengan role 'user'
        $activeUserIds = DB::table('sessions')->pluck('user_id')->unique();
        $activeUsersCount = User::whereIn('id', $activeUserIds)
                                ->where('role', 'user')
                                ->count();

        // Jumlah total user
        $totalUsersCount = User::count();

        // Jumlah total produk
        $totalProductsCount = Product::count();

        // Jumlah produk aktif (misalnya produk yang memiliki status 'active')
        $activeProductsCount = Product::where('status', 'active')->count();

        

        // Kirim data ke view
        return view('dashboard.index', compact(
            'activeUsersCount',
            'totalUsersCount',
            'totalProductsCount',
            'activeProductsCount',
        ));
    }

    public function daftarProduk() {
    // List 10 produk terbaru
        $latestProducts = Product::orderBy('created_at', 'desc')
                                    ->take(10)
                                    ->get();
        return view('dashboard.daftarProduk', compact('latestProducts'));
    }
}
