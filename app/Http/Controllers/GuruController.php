<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Role;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    protected $roleName = 'Guru'; // Sama dengan nama_role di tabel roles

    public function index()
    {
        $role = Role::where('nama_role', $this->roleName)->firstOrFail();
        $gurus = User::where('id_role', $role->id)->get();

        return view('admin.guru.index', compact('gurus'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        return view('admin.guru.create', compact('kelas'));
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

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan.');
    }

    public function edit(User $guru)
    {
        $kelas = Kelas::all();
        return view('admin.guru.edit', compact('guru', 'kelas'));
    }

    public function update(Request $request, User $guru)
    {
        $role = Role::where('nama_role', $this->roleName)->firstOrFail();

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'no_induk' => 'required|string|unique:users,no_induk,' . $guru->id,
            'password' => 'nullable|string|min:6|confirmed',
            'jenis_kelamin' => 'nullable|in:l,p',
            'id_kelas' => 'nullable|exists:kelas,id',
            'id_wali_kelas' => 'nullable|exists:kelas,id',
        ]);

        $guru->nama = $validated['nama'];
        $guru->no_induk = $validated['no_induk'];
        if (!empty($validated['password'])) {
            $guru->password = Hash::make($validated['password']);
        }
        $guru->jenis_kelamin = $validated['jenis_kelamin'] ?? null;
        $guru->id_kelas = $validated['id_kelas'] ?? null;
        $guru->id_role = $role->id;
        $guru->id_wali_kelas = $validated['id_wali_kelas'] ?? null;
        $guru->save();

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil diperbarui.');
    }

    public function destroy(User $guru)
    {
        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil dihapus.');
    }
}
