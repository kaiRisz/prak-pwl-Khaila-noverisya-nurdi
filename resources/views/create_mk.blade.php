@extends('layouts.app')

@section('content')

<div class="page-wrapper">

    <div class="main-card">

        <h1 class="page-title">
            Buat Mata Kuliah Baru
        </h1>

        <form action="{{ route('matakuliah.store') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label for="nama_mk" class="form-label">
                    Nama Mata Kuliah
                </label>

                <input
                    type="text"
                    id="nama_mk"
                    name="nama_mk"
                    class="form-control @error('nama_mk') is-invalid @enderror"
                    placeholder="Masukkan nama mata kuliah"
                    value="{{ old('nama_mk') }}"
                    required>

                @error('nama_mk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="sks" class="form-label">
                    SKS
                </label>

                <input
                    type="number"
                    id="sks"
                    name="sks"
                    class="form-control @error('sks') is-invalid @enderror"
                    placeholder="Masukkan jumlah SKS"
                    min="1"
                    max="24"
                    value="{{ old('sks') }}"
                    required>

                @error('sks')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-metal">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection
