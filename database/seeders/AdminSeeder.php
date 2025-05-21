<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => 'Admin',
            'no_induk' => 'ADM001',
            'password' => Hash::make('password'), // Ganti dengan password yang aman
            'jenis_kelamin' => 'L', // Asumsi L = Laki-laki
            'id_kelas' => null, // Admin tidak punya kelas
            'id_role' => 1, // Role Admin
            'id_wali_kelas' => null, // Admin bukan wali kelas
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}