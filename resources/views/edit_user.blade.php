@extends('layouts.app')

@section('content')
<style>
    .form-wrapper {
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px 16px;
    }

    .form-card {
        background: #ffffff;
        width: 100%;
        max-width: 440px;
        padding: 32px;
        border-radius: 12px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2e8f0;
    }

    .form-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 6px;
        text-align: center;
    }

    .form-subtitle {
        font-size: 0.875rem;
        color: #64748b;
        margin-bottom: 24px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 18px;
    }

    .form-label {
        display: block;
        font-size: 0.875rem;
        font-weight: 600;
        color: #334155;
        margin-bottom: 6px;
    }

    .form-input,
    .form-select {
        width: 100%;
        padding: 10px 14px;
        font-size: 0.95rem;
        color: #1e293b;
        background-color: #f8fafc;
        border: 1.5px solid #cbd5e1;
        border-radius: 8px;
        outline: none;
        box-sizing: border-box;
        transition: border-color 0.2s, box-shadow 0.2s, background-color 0.2s;
    }

    .form-input:focus,
    .form-select:focus {
        background-color: #ffffff;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
    }

    .btn-submit {
        width: 100%;
        padding: 11px;
        margin-top: 8px;
        background-color: #3b82f6;
        color: #ffffff;
        border: none;
        border-radius: 8px;
        font-size: 0.95rem;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.2s, transform 0.1s;
    }

    .btn-submit:hover {
        background-color: #2563eb;
    }

    .btn-submit:active {
        transform: scale(0.99);
    }
</style>

<div class="form-wrapper">
    <div class="form-card">
        <h1 class="form-title">Edit Pengguna</h1>

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" id="nama" value="{{ $user->name }}" name="nama" class="form-input" placeholder="Masukkan nama" required />
            </div>

            <div class="form-group">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" id="npm" value="{{ $user->nim }}" name="npm" class="form-input" placeholder="Masukkan NPM" />
            </div>

            <div class="form-group">
                <label for="kelas_id" class="form-label">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="form-select" required>
                    @foreach ($kelas as $kelasItem)
                        @if ($kelasItem->id == $user->kelas_id)
                            <option value="{{ $kelasItem->id }}" selected>
                                {{ $kelasItem->nama_kelas }}
                            </option>
                        @else
                            <option value="{{ $kelasItem->id }}">
                                {{ $kelasItem->nama_kelas }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn-submit">Update</button>
        </form>
    </div>
</div>
@endsection