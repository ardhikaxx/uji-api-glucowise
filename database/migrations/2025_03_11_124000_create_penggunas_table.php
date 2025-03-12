<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->string('nik', 16)->primary();
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->string('nama_lengkap', 100);
            $table->string('tempat_lahir', 50)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->text('alamat_lengkap')->nullable();
            $table->string('nomor_telepon', 15)->nullable();
            $table->string('nama_ibu_kandung', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
};