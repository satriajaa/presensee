<?php

namespace App\Http\Controllers;

use App\Models\JadwalPelajaran;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;

class JadwalPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jadwals = JadwalPelajaran::with(['kelas', 'mapel', 'guru'])->get();
        $kelas = Kelas::all();
        $mapels = Mapel::all();
        $gurus = User::where('id_role', 2)->get();

        // Modal create akan digunakan di halaman index
        return view('admin.jadwal', compact('jadwals', 'kelas', 'mapels', 'gurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        $mapels = Mapel::all();
        $gurus = User::where('id_role', 2)->get(); // Asumsikan role_id 2 = guru
        return view('jadwal.create', compact('kelas', 'mapels', 'gurus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_kelas' => 'required|exists:kelas,id',
            'id_mapel' => 'required|exists:mapels,id',
            'id_guru' => 'required|exists:users,id',
            'hari' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
            'is_active' => 'boolean',
        ]);

        JadwalPelajaran::create($validated);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JadwalPelajaran $jadwalPelajaran)
    {
        return view('jadwal.show', compact('jadwal_pelajaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JadwalPelajaran $jadwalPelajaran)
    {
        $kelas = Kelas::all();
        $mapels = Mapel::all();
        $gurus = User::where('id_role', 2)->get();
        return view('jadwal.edit', compact('jadwal_pelajaran', 'kelas', 'mapels', 'gurus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JadwalPelajaran $jadwalPelajaran)
    {
        $validated = $request->validate([
            'id_kelas' => 'required|exists:kelas,id',
            'id_mapel' => 'required|exists:mapels,id',
            'id_guru' => 'required|exists:users,id',
            'hari' => 'required|in:Senin,Selasa,Rabu,Kamis,Jumat,Sabtu',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
            'is_active' => 'boolean',
        ]);

        $jadwalPelajaran->update($validated);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JadwalPelajaran $jadwalPelajaran)
    {
        $jadwalPelajaran->delete();
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}