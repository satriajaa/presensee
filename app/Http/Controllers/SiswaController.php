<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    protected $roleName = 'Siswa';

    public function index()
    {
        $role = Role::where('nama_role', $this->roleName)->firstOrFail();
        $murids = User::where('id_role', $role->id)->get();

        return view('admin.murid.index', compact('murids'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('admin.murid.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $role = Role::where('nama_role', $this->roleName)->firstOrFail();

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_induk' => 'required|string|unique:users,no_induk',
            'password' => 'required|string|min:6|confirmed',
            'jenis_kelamin' => 'nullable|in:l,p',
            'id_kelas' => 'nullable|exists:kelas,id',
            'id_wali_kelas' => 'nullable|exists:kelas,id',
        ]);

        User::create([
            'nama' => $validated['nama'],
            'no_induk' => $validated['no_induk'],
            'password' => Hash::make($validated['password']),
            'jenis_kelamin' => $validated['jenis_kelamin'] ?? null,
            'id_kelas' => $validated['id_kelas'] ?? null,
            'id_role' => $role->id,
            'id_wali_kelas' => $validated['id_wali_kelas'] ?? null,
        ]);

        return redirect()->route('murid.index')->with('success', 'Data murid berhasil ditambahkan.');
    }

    public function edit(User $murid)
    {
        $kelas = Kelas::all();
        return view('admin.murid.edit', compact('murid', 'kelas'));
    }

    public function update(Request $request, User $murid)
    {
        $role = Role::where('nama_role', $this->roleName)->firstOrFail();

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_induk' => 'required|string|unique:users,no_induk,' . $murid->id,
            'password' => 'nullable|string|min:6|confirmed',
            'jenis_kelamin' => 'nullable|in:l,p',
            'id_kelas' => 'nullable|exists:kelas,id',
            'id_wali_kelas' => 'nullable|exists:kelas,id',
        ]);

        $murid->nama = $validated['nama'];
        $murid->no_induk = $validated['no_induk'];
        if (!empty($validated['password'])) {
            $murid->password = Hash::make($validated['password']);
        }
        $murid->jenis_kelamin = $validated['jenis_kelamin'] ?? null;
        $murid->id_kelas = $validated['id_kelas'] ?? null;
        $murid->id_role = $role->id;
        $murid->id_wali_kelas = $validated['id_wali_kelas'] ?? null;
        $murid->save();

        return redirect()->route('murid.index')->with('success', 'Data murid berhasil diperbarui.');
    }

    public function destroy(User $murid)
    {
        $murid->delete();

        return redirect()->route('murid.index')->with('success', 'Data murid berhasil dihapus.');
    }
}