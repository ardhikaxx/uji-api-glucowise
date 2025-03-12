<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        Pengguna::create([
            'nik' => '1234567890123456',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'nama_lengkap' => 'Admin Test',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1990-01-01',
            'jenis_kelamin' => 'Laki-laki',
            'alamat_lengkap' => 'Jl. Contoh No.1',
            'nomor_telepon' => '08123456789',
            'nama_ibu_kandung' => 'Ibu Admin'
        ]);
    }
}
