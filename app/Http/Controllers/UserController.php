<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id')
        ]);

        return redirect()->to('/user');
    }

    public function index()
    {
        $users = $this->userModel->getUser();

        return view('list_user', compact('users'));
    }

    public function edit($id)
{
    $user  = $this->userModel->findOrFail($id);
    $kelas = $this->kelasModel->getKelas();

    return view('edit_user', [
        'title' => 'Edit User',
        'user'  => $user,
        'kelas' => $kelas,
    ]);
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'nama'     => 'required|string|max:255',
        'npm'      => 'required|string|max:20',
        'kelas_id' => 'required|exists:kelas,id',
    ]);

    $user = $this->userModel->findOrFail($id);
    $user->update($validated);

    return redirect()->route('user.index')
        ->with('success', 'Data user berhasil diperbarui!');
}

public function destroy($id)
{
    try {
        $user = $this->userModel->findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')
            ->with('success', 'Data user berhasil dihapus!');
    } catch (\Exception $e) {
        return redirect()->route('user.index')
            ->with('error', 'Data gagal dihapus: ' . $e->getMessage());
    }
}
}