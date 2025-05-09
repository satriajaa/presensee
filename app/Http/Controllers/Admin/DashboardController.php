<?php
// app/Http/Controllers/Admin/DashboardController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // You would typically fetch these from your database
        $data = [
            'totalSiswa' => 1200, // Example data
            'totalGuru' => 50,    // Example data
            'totalKelas' => 36,    // Example data
            'totalMapel' => 15     // Example data
        ];

        return view('admin.dashboard', $data);
    }
}
