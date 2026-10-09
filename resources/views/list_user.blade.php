@extends('layouts.app')

@section('content')
<style>
    .list-wrapper {
        min-height: 50vh;
        display: flex;
        justify-content: center;
        padding: 40px 16px;
    }

    .list-card {
        background: #ffffff;
        width: 100%;
        max-width: 860px;
        padding: 32px;
        border-radius: 12px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        border: 1px solid #e2e8f0;
        height: fit-content;
    }

    .list-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 24px;
        flex-wrap: wrap;
        gap: 12px;
    }

    .list-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1e293b;
        margin: 0;
    }

    .list-subtitle {
        font-size: 0.875rem;
        color: #64748b;
        margin-top: 4px;
        margin-bottom: 0;
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

<div class="list-wrapper">
    <div class="list-card">
        <div class="list-header">
            <div>
                <h1 class="list-title">Daftar Pengguna</h1>
                <p class="list-subtitle">Data seluruh pengguna yang telah tersimpan</p>
            </div>
        </div>
         @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif (session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif
        
        @include('components.table', ['items' => $users])
    </div>
</div>
@endsection