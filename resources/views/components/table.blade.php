<style>
    .table-container {
        overflow-x: auto;
        border-radius: 8px;
        border: 1px solid #e2e8f0;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
        font-size: 0.95rem;
    }

    .table th {
        background-color: #f8fafc;
        color: #475569;
        font-weight: 600;
        padding: 12px 18px;
        border-bottom: 1px solid #e2e8f0;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
    }

    .table td {
        padding: 14px 18px;
        color: #334155;
        border-bottom: 1px solid #f1f5f9;
        vertical-align: middle;
    }

    .table tbody tr:last-child td {
        border-bottom: none;
    }

    .table tbody tr:hover {
        background-color: #f8fafc;
    }

    .badge-kelas {
        display: inline-block;
        padding: 4px 10px;
        font-size: 0.825rem;
        font-weight: 600;
        background-color: #e0f2fe;
        color: #0369a1;
        border-radius: 6px;
    }

    .card_empty {
        text-align: center;
        padding: 32px 16px;
        color: #94a3b8;
        font-size: 0.95rem;
    }
</style>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th style="width: 70px;">ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td style="font-weight: 500; color: #1e293b;">{{ $user->name }}</td>
                    <td>{{ $user->nim }}</td>
                    <td>
                        <span class="badge-kelas">{{ $user->nama_kelas }}</span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="card_empty">Belum ada data pengguna yang tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>