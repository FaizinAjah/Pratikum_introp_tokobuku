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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // Pastikan ini ada
            $table->string('penulis');
            $table->decimal('harga', 8, 2); // 8 total digits, 2 decimals
            $table->integer('stok')->default(0); // Set default to 0 if you want
            $table->foreignId('kategori_id')->constrained()->onDelete('cascade'); // Menambahkan onDelete untuk menjaga referensial
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};