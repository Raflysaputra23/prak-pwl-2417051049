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
</style>

<div class="list-wrapper">
    <div class="list-card">
        <div class="list-header">
            <div>
                <h1 class="list-title">Daftar Pengguna</h1>
                <p class="list-subtitle">Data seluruh pengguna yang telah tersimpan</p>
            </div>
        </div>

        @include('components.table', ['items' => $users])
    </div>
</div>
@endsection