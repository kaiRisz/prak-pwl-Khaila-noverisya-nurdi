@extends('layouts.app')

@section('content')
<div class="page-wrapper">
    <div class="main-card">

        <h1 class="page-title">Edit Mata Kuliah</h1>

        <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                <input type="text" id="nama_mk" name="nama_mk"
                    class="form-control @error('nama_mk') is-invalid @enderror"
                    value="{{ old('nama_mk', $mk->nama_mk) }}" required>
                @error('nama_mk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="sks" class="form-label">SKS</label>
                <input type="number" id="sks" name="sks" min="1" max="24"
                    class="form-control @error('sks') is-invalid @enderror"
                    value="{{ old('sks', $mk->sks) }}" required>
                @error('sks')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-metal">Update</button>
            <a href="{{ route('matakuliah.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
        </form>

    </div>
</div>
@endsection