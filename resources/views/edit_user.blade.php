@extends('layouts.app')

@section('content')

<div class="page-wrapper">

    <div class="main-card">

        <h1 class="page-title">
            Edit Pengguna
        </h1>

        <form action="{{ route('user.update', $user->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama" class="form-label">
                    Nama
                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    class="form-control @error('nama') is-invalid @enderror"
                    value="{{ old('nama', $user->nama) }}"
                    required>

                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="npm" class="form-label">
                    NPM
                </label>

                <input
                    type="text"
                    id="npm"
                    name="npm"
                    class="form-control @error('npm') is-invalid @enderror"
                    value="{{ old('npm', $user->npm) }}"
                    required>

                @error('npm')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="kelas_id" class="form-label">
                    Kelas
                </label>

                <select
                    name="kelas_id"
                    id="kelas_id"
                    class="form-select @error('kelas_id') is-invalid @enderror"
                    required>

                    @foreach ($kelas as $k)
                        <option
                            value="{{ $k->id }}"
                            {{ old('kelas_id', $user->kelas_id) == $k->id ? 'selected' : '' }}>
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach

                </select>

                @error('kelas_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-metal">
                Update
            </button>

            <a href="{{ route('user.index') }}" class="btn btn-outline-secondary ms-2">
                Batal
            </a>

        </form>

    </div>

</div>

@endsection