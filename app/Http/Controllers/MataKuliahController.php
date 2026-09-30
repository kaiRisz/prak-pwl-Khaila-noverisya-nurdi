<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'List Mata Kuliah',
            'mks' => Matakuliah::all(),
        ];

        return view('list_mk', $data);
    }

    public function create()
    {
        return view('create_mk', ['title' => 'Create Mata Kuliah']);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_mk' => 'required|string|max:255',
            'sks' => 'required|integer|min:1|max:24',
        ]);

        Matakuliah::create($validated);

        return redirect()->route('matakuliah.index');
    }
}