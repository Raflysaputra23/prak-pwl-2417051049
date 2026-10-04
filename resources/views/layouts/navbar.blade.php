<style>
    body {
        margin: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        background-color: #f8fafc;
    }

    .navbar {
        background-color: #ffffff;
        border-bottom: 1px solid #e2e8f0;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        position: sticky;
        top: 0;
        z-index: 1000;
        padding: 0 20px;
    }

    .navbar-container {
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 60px;
    }

    .navbar-brand {
        font-size: 1.2rem;
        font-weight: 700;
        color: #1e293b;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .navbar-brand span {
        color: #3b82f6;
    }

    .navbar-menu {
        display: flex;
        gap: 12px;
        list-style: none;
        margin: 0;
        padding: 0;
        align-items: center;
    }

    .navbar-link {
        text-decoration: none;
        color: #64748b;
        font-size: 0.9rem;
        font-weight: 500;
        padding: 6px 12px;
        border-radius: 6px;
        transition: color 0.2s, background-color 0.2s;
    }

    .navbar-link:hover {
        color: #3b82f6;
        background-color: #eff6ff;
    }

    .navbar-link.active {
        color: #3b82f6;
        font-weight: 600;
        background-color: #eff6ff;
    }
</style>

<nav class="navbar">
    <div class="navbar-container">
        <a href="{{ url('/user') }}" class="navbar-brand">
            Praktikum<span>Web</span> Lanjut
        </a>

        <ul class="navbar-menu">
            <li>
                <a href="{{ url('/user') }}" class="navbar-link {{ request()->is('user') ? 'active' : '' }}">
                    List Pengguna
                </a>
            </li>
            <li>
                <a href="{{ url('/matakuliah') }}" class="navbar-link {{ request()->is('user') ? 'active' : '' }}">
                    List Mata Kuliah
                </a>
            </li>
            <li>
                <a href="{{ route('user.create') }}" class="navbar-link {{ request()->is('user/create') ? 'active' : '' }}">
                    Tambah Pengguna
                </a>
            </li>
            <li>
                <a href="{{ url('/profile') }}" class="navbar-link {{ request()->is('profile*') ? 'active' : '' }}">
                    Profile
                </a>
            </li>
        </ul>
    </div>
</nav>
