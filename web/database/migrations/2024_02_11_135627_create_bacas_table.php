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
        Schema::create('bacas', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->integer("buku_id");
            $table->integer("pelajar_id");
            $table->string("tanggal_peminjaman");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bacas');
    }
};
