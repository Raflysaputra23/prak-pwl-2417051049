<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => "M. Rafly Saputra",
            'kelas' => "B",
            'npm' => "2417051049"
        ];

        return view('profile', $data);
    }
}
