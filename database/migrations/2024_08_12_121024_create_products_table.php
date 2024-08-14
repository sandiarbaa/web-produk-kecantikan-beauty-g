<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk'); // Nama produk
            $table->decimal('harga', 10, 2); // Harga produk, menggunakan decimal dengan presisi 10 digit dan 2 desimal
            $table->string('gambar_produk')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('inactive'); // Status produk, default ke 'inactive'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
