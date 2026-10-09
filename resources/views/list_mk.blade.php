@extends('layouts.app')
@section('content')

<style>
    .container {
        width: 1100px;
        max-width: 1100px;
        margin: 10px auto;
    }

    .aksi-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
    }

    .btn {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 10px;
        font-size: 12px;
        cursor: pointer;
        font-weight: 500;
        border: 1px solid transparent;
        text-decoration: none;
        color: #000;
    }

    .btn-edit {
        background-color: #f7e30530;
        color: #000;
        border: 1px solid #f7e305 ;
        transition: .3s ease;
    }

    .btn-edit:hover {
        background-color: #f7e305c1;
    }

    .btn-hapus {
        background-color: #f7050530;
        color: #f70505fd;
        border: 1px solid #f70505fd;
        transition: .3s ease;
    }

    .btn-hapus:hover {
        color: #fff;
        background-color: #f70505c6;
    }

    .btn-tambah {
        background-color: #0529f730;
        color: #1505f7;
        border: 1px solid #1505f7 ;
        transition: .3s ease;
    }

    .btn-tambah:hover {
        color: #fff;
        background-color: #0529f7be;
    }

    .alert {
        padding: 12px 14px;
        border-radius: 15px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .alert-success {
        border: 1px solid #00ff3cb0;
        border-left: 4px solid #00ff3c;
        color: #00ff3c;
        background-color: #00ff3c29;
    }

    .alert-error {
        border: 1px solid #ff0000b0;
        border-left: 4px solid #ff0000;
        color: #ff0000;
        background-color: #ff000029;
    }
</style>

<div class="container">
    <h1>Daftar Mata Kuliah</h1>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif (session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
    @endif
    <a class="btn btn-tambah" href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah Baru</a>
    <br /><br />

    <table border="2" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mks as $mk)
            <tr>
                <td>{{ $mk->id }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td class="aksi-btn">
                    <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-edit">Edit</a>
                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-hapus" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection