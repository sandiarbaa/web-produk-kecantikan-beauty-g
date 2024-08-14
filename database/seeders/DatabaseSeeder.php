<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User Multi Role
        /*
        User::factory()->create([
            'nama' => 'Sandi',
            'nomor_telepon' => '083841330243',
            'email' => 'sandi@gmail.com',
            'password' => Hash::make('userpassword'),
            'role' => 'user',
            'approved' => false,
        ]);

        User::factory()->create([
            'nama' => 'Arba',
            'nomor_telepon' => '0838413302433',
            'email' => 'arba@gmail.com',
            'password' => Hash::make('userpassword'),
            'role' => 'user',
            'approved' => false,
        ]);

        User::factory()->create([
            'nama' => 'Admin',
            'nomor_telepon' => '081233445567',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminpassword'),
            'role' => 'admin',
            'approved' => true,
        ]);

        // Seed Product data
        Product::create([
            'nama_produk' => 'Serum Wajah',
            'harga' => 120000.00,
            'status' => 'active',
        ]);

        Product::create([
            'nama_produk' => 'Masker Wajah',
            'harga' => 50000.00,
            'status' => 'active',
        ]);

        Product::create([
            'nama_produk' => 'Moisturizer',
            'harga' => 90000.00,
            'status' => 'active',
        ]);

        Product::create([
            'nama_produk' => 'Sunscreen SPF 50',
            'harga' => 75000.00,
            'status' => 'inactive',
        ]);

        Product::create([
            'nama_produk' => 'Toner Wajah',
            'harga' => 65000.00,
            'status' => 'inactive',
        ]);
        */

        // Seeder Users
        User::factory()->create([
            'nama' => 'Sandi',
            'nomor_telepon' => '083841330243',
            'email' => 'sandi@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'approved' => false,
        ]);

        User::factory()->create([
            'nama' => 'Arba',
            'nomor_telepon' => '0838413302433',
            'email' => 'arba@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'approved' => false,
        ]);

        User::factory()->create([
            'nama' => 'Admin',
            'nomor_telepon' => '081233445567',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'approved' => true,
        ]);

        // Seeder Produk
        Product::create([
            'nama_produk' => 'Serum Wajah',
            'harga' => 120000.00,
            'status' => 'active',
            'gambar_produk' => 'serum_wajah.jpg'
        ]);

        Product::create([
            'nama_produk' => 'Masker Wajah',
            'harga' => 50000.00,
            'status' => 'active',
            'gambar_produk' => 'masker_wajah.jpg'
        ]);

        Product::create([
            'nama_produk' => 'Moisturizer',
            'harga' => 90000.00,
            'status' => 'active',
            'gambar_produk' => 'moisturizer.jpg'
        ]);

        Product::create([
            'nama_produk' => 'Sunscreen SPF 50',
            'harga' => 75000.00,
            'status' => 'inactive',
            'gambar_produk' => 'sunscreen.jpg'
        ]);

        Product::create([
            'nama_produk' => 'Toner Wajah',
            'harga' => 65000.00,
            'status' => 'inactive',
            'gambar_produk' => 'toner_wajah.jpg'
        ]);
    }
}
