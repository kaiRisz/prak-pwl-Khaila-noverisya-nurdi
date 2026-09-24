<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'nim' => $nim
        ];

        return view('profile', $data);
    }
}