<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Contoh data, nanti bisa kamu ambil dari database
        $totalSiswa = 120;
        $totalGuru = 15;
        $totalKelas = 6;
        $totalMapel = 12;

        return view('admin.dashboard', [
            'totalSiswa' => $totalSiswa,
            'totalGuru' => $totalGuru,
            'totalKelas' => $totalKelas,
            'totalMapel' => $totalMapel,
        ]);
    }
}
