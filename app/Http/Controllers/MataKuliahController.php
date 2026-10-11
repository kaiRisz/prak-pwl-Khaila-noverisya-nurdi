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

    public function edit($id)
{
    $mk = Matakuliah::findOrFail($id);

    return view('edit_mk', [
        'title' => 'Edit Mata Kuliah',
        'mk'    => $mk,
    ]);
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'nama_mk' => 'required|string|max:255',
        'sks'     => 'required|integer|min:1|max:24',
    ]);

    $mk = Matakuliah::findOrFail($id);
    $mk->update($validated);

    return redirect()->route('matakuliah.index')
        ->with('success', 'Data mata kuliah berhasil diperbarui!');
}

public function destroy($id)
{
    try {
        $mk = Matakuliah::findOrFail($id);
        $mk->delete();

        return redirect()->route('matakuliah.index')
            ->with('success', 'Data mata kuliah berhasil dihapus!');
    } catch (\Exception $e) {
        return redirect()->route('matakuliah.index')
            ->with('error', 'Data gagal dihapus: ' . $e->getMessage());
    }
}
}