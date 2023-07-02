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
        Schema::create('tb_pegawai', function (Blueprint $table) {
            $table->integer('nip')->primary();
            $table->string('nm_pegawai');
            $table->string('foto');
            $table->string('jabatan');
            $table->string('jkl');
            $table->date('tgl_lahir');
            $table->string('kontrak');
            $table->string('email');
            $table->string('alamat');
            $table->string('tlp', 13);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pegawai');
    }
};
