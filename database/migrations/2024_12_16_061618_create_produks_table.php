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
        Schema::create('produks', function (Blueprint $table) {
            $table->integer('id_produk')->primary()->autoIncrement();
            $table->string('nama', 255);
            $table->integer('id_kategori');
            $table->foreign('id_kategori')
                  ->references('id_kategori')
                  ->on('kategoris')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->text('deskripsi');
            $table->integer('harga');
            $table->enum('stok', ['Tersedia','Tidak Tersedia']);
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
