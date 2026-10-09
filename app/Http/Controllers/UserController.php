<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
use Exception;

class UserController extends Controller
{
    public $userModel, $kelasModel;

    public function index() {
        $data = [
            'title' => "List User",
            'users' => $this->userModel->getUser()
        ];

        return view('list_user', $data);
    }

    public function __construct() {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function store(Request $request) {
        $this->userModel->create([
            'name' => $request->input("nama"),
            'nim' => $request->input("npm"),
            'kelas_id' => $request->input("kelas_id")
        ]);

        return redirect()->to("/user");
    }

    public function create() {
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas
        ];

        return view("create_user", $data);
    }

    public function edit(string $id) {
        $user = UserModel::findOrFail($id);
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();
        return view('edit_user', ['title' => "Edit User", 'user' => $user, 'kelas' => $kelas]);
    }

    public function update(Request $request, string $id) {
        try {
            $request->validate([
                'nama' => 'required',
                'npm' => 'required',
                'kelas_id' => 'required'
            ]);
    
            $user = UserModel::findOrFail($id);
            $user->update([
                'name' => $request->input('nama'),
                'nim' => $request->input('npm'),
                'kelas_id' => $request->input('kelas_id')
            ]);
    
            return redirect()->to('/user')->with('success', 'Data berhasil diperbarui!');
        } catch (Exception $e) {
            return redirect()->to('/user')->with('error', 'Data gagal diperbarui!');
        }
    }

    public function destroy(string $id) {
        try {
            $user = UserModel::findOrFail($id);
            $user->delete();
    
            return redirect()->to('/user')->with('success', 'Data berhasil dihapus!');
        } catch (Exception $e) {
            return redirect()->to('/user')->with('error', 'Data gagal dihapus!');
        }
    }
}
