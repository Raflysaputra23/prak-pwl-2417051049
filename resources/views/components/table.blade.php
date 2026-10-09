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
</style>

<div class="table-container">
    <table class="table">
        <thead>
            <tr>
                <th style="width: 200px;">ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th style="text-align: center;">Aksi</th>
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
                    <td class="aksi-btn">
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-hapus" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
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