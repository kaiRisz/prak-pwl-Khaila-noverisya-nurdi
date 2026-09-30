@extends('layouts.app')

@section('content')

<div class="page-wrapper">

    <div class="main-card">

        <div class="top-bar">

            <h1 class="page-title mb-0">
                Daftar Mata Kuliah
            </h1>

            <a
                href="{{ route('matakuliah.create') }}"
                class="btn btn-metal">
                + Tambah Mata Kuliah
            </a>

        </div>

        <div class="table-container">

            <table class="table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($mks as $mk)

                        <tr>

                            <td>
                                {{ $mk->id }}
                            </td>

                            <td>
                                <strong>
                                    {{ $mk->nama_mk }}
                                </strong>
                            </td>

                            <td>
                                <span class="badge-kelas">
                                    {{ $mk->sks }} SKS
                                </span>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="3" class="text-center py-5">
                                Belum ada data mata kuliah.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
