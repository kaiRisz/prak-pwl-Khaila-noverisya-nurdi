@extends('layouts.app')

@section('content')

<div class="page-wrapper">

    <div class="main-card">

        <div class="top-bar">

            <h1 class="page-title mb-0">
                Daftar Pengguna
            </h1>

            <a
                href="{{ route('user.create') }}"
                class="btn btn-metal">
                + Tambah User
            </a>

        </div>

        <div class="table-container">

            <table class="table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($users as $user)

                        <tr>

                            <td>
                                {{ $user->id }}
                            </td>

                            <td>
                                <strong>
                                    {{ $user->nama }}
                                </strong>
                            </td>

                            <td>
                                {{ $user->npm }}
                            </td>

                            <td>
                                <span class="badge-kelas">
                                    {{ $user->nama_kelas }}
                                </span>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="4" class="text-center py-5">
                                Belum ada data pengguna.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection