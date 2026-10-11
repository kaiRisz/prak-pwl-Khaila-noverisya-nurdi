@extends('layouts.app')

@section('content')

<div class="page-wrapper">

    <div class="main-card">

        @include('components.alert')

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
                        <th>Aksi</th>
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

                            <td>
                                <div class="action-group">

                                    <a
                                        href="{{ route('matakuliah.edit', $mk->id) }}"
                                        class="btn-edit">
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('matakuliah.destroy', $mk->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn-delete"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            Hapus
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="4" class="text-center py-5">
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