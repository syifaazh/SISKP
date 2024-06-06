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
        //
        Schema::create('mhs', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10)->unique();
            $table->string('password');
            $table->string('nama', 50);
            $table->string('berkas_mhs');
            $table->string('laporan');
            $table->string('status');
            $table->string('ket');
            $table->string('jdw_seminar');
            $table->string('bidang_minat');
            $table->string('pembimbing');
            $table->string('taopik');
            $table->string('penguji');
            $table->string('revisi');
            $table->string('nilai_pem_prod');
            $table->string('nilai_penguji');
            $table->string('nilai_pem_lap');
            $table->string('total_nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
