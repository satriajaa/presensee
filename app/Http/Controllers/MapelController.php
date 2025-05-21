<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapels = Mapel::all();
        return view('mapels.index', compact('mapels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mapels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_mapel' => 'required|string|max:10|unique:mapels,kode_mapel',
            'nama_mapel' => 'required|string|max:50',
        ]);

        Mapel::create($validated);

        return redirect()->route('mapels.index')->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Mapel $mapel)
    {
    return view('mapels.show', compact('mapel'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapel $mapel)
    {
    return view('mapels.edit', compact('mapel'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mapel $mapel)
    {
        $validated = $request->validate([
            'kode_mapel' => 'required|string|max:10|unique:mapels,kode_mapel,' . $mapel->id,
            'nama_mapel' => 'required|string|max:50',
        ]);

        $mapel->update($validated);

        return redirect()->route('mapels.index')->with('success', 'Mata pelajaran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapel $mapel)
    {
        $mapel->delete();

        return redirect()->route('mapels.index')->with('success', 'Mata pelajaran berhasil dihapus.');
    }
}