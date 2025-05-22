@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Kelas</h2>

 <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="tingkat" class="form-label">Tingkat</label>
            <input type="text" name="tingkat" class="form-control" id="tingkat" value="{{ old('tingkat', $kelas->tingkat) }}">
            @error('tingkat')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nama_kelas" class="form-label">Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" value="{{ old('nama_kelas', $kelas->nama_kelas) }}">
            @error('nama_kelas')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
