@extends('layouts.app')

@section('content')

<div class="page-wrapper">

    <div class="main-card">

        <h1 class="page-title">
            Buat Pengguna Baru
        </h1>

        <form action="{{ route('user.store') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label for="nama" class="form-label">
                    Nama
                </label>

                <input
                    type="text"
                    id="nama"
                    name="nama"
                    class="form-control"
                    placeholder="Masukkan nama lengkap"
                    required>
            </div>

            <div class="mb-4">
                <label for="npm" class="form-label">
                    NPM
                </label>

                <input
                    type="text"
                    id="npm"
                    name="npm"
                    class="form-control"
                    placeholder="Masukkan NPM"
                    required>
            </div>

            <div class="mb-4">
                <label for="kelas_id" class="form-label">
                    Kelas
                </label>

                <select
                    name="kelas_id"
                    id="kelas_id"
                    class="form-select"
                    required>

                    <option value="" selected disabled>
                        Pilih kelas
                    </option>

                    @foreach ($kelas as $kelasItem)

                        <option value="{{ $kelasItem->id }}">
                            {{ $kelasItem->nama_kelas }}
                        </option>

                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-metal">
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection