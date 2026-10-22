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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('kategori');
            $table->string('ringkasan');
            $table->string('deskripsi');
            $table->string('foto');
            $table->enum('status', ["Draft", "Published"])->default("Published");
            $table->timestamp("tanggal_publikasi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
