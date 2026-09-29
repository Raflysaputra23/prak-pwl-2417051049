<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = null, $kelas = null, $npm = null)
    {
        $data = [
            'nama' => $nama ?? "M. Rafly Saputra",
            'kelas' => $kelas ?? "B",
            'npm' => $npm ?? "2417051049"
        ];

        return view('profile', $data);
    }
}
