<style>
    :root {
        --primary: #4337F1;
        --danger: #ee2a2a;
        --text: #2b2b2b;
        --muted: #8a8a8a;
    }

    .sidebar-wrapper {
        width: 260px;
        height: 100vh;
        background: #fff;
        border-right: 1px solid rgba(0,0,0,0.06);
        position: fixed;
        overflow-y: auto;
    }

    /* BRAND */
    .theme-brand {
        padding: 18px 16px;
        display: flex;
        align-items: center;
        gap: 10px;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }

    .theme-brand img {
        width: 32px;
        height: 32px;
    }

    .theme-text {
        font-weight: 700;
        color: var(--primary);
        letter-spacing: 0.5px;
    }

    /* MENU */
    .menu-categories {
        padding: 10px;
        margin: 0;
    }

    .menu {
        list-style: none;
        margin-bottom: 6px;
    }

    .menu > a {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 12px;
        border-radius: 10px;
        text-decoration: none;
        color: var(--text);
        transition: 0.25s ease;
        font-weight: 500;
    }

    .menu > a svg {
        width: 22px;
        height: 22px;
        transition: 0.25s ease;
    }

    .menu > a:hover {
        background: rgba(67,55,241,0.08);
        color: var(--primary);
        transform: translateX(4px);
    }

    .menu > a:hover svg {
        stroke: var(--primary);
    }

    /* ACTIVE STATE (Laravel Request) */
    .menu > a[aria-expanded="true"] {
        background: rgba(67,55,241,0.12);
        color: var(--primary);
    }

    /* SUBMENU */
    .submenu {
        padding-left: 42px;
        margin-top: 5px;
    }

    .submenu li a {
        display: block;
        padding: 6px 10px;
        font-size: 14px;
        color: var(--muted);
        text-decoration: none;
        border-radius: 8px;
        transition: 0.2s;
    }

    .submenu li a:hover {
        color: var(--primary);
        background: rgba(67,55,241,0.06);
    }

    /* LOGOUT */
    .logout-item a {
        background: rgba(238,42,42,0.08);
        color: var(--danger) !important;
    }

    .logout-item a:hover {
        background: var(--danger);
        color: #fff !important;
        transform: translateX(4px);
    }

    .logout-item a svg {
        stroke: var(--danger);
    }

    .logout-item a:hover svg {
        stroke: #fff;
    }
</style>

<div class="sidebar-wrapper sidebar-theme">

    <!-- BRAND -->
    <div class="theme-brand">
        <a href="{{ url('admin/beranda') }}">
            <img src="{{ asset('assets/img/favicon.ico') }}" alt="logo">
        </a>
        <span class="theme-text">COMPQUEST</span>
    </div>

    <nav id="sidebar">

        <ul class="list-unstyled menu-categories" id="accordionExample">

            <!-- BERANDA -->
            <li class="menu">
                <a href="{{ url('admin/beranda') }}"
                   aria-expanded="{{ Request::is('admin/beranda*') ? 'true' : 'false' }}">

                    <!-- ICON ORIGINAL (TIDAK DIUBAH) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-home" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>

                    <span>Beranda</span>
                </a>
            </li>

            <!-- KELOLA AKUN -->
            <li class="menu">
                <a href="#kelolaAkun"
                   data-toggle="collapse"
                   aria-expanded="{{ Request::is('admin/kelola-*') ? 'true' : 'false' }}">

                    <!-- ICON ORIGINAL -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-users" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M7 21v-2a4 4 0 0 1 3-3.87"/>
                        <circle cx="12" cy="7" r="4"/>
                    </svg>

                    <span>Kelola Akun</span>
                </a>

                <ul class="collapse submenu list-unstyled" id="kelolaAkun" data-parent="#accordionExample">
                    <li><a href="{{ url('admin/kelola-admin') }}">Akun Admin</a></li>
                    <li><a href="{{ url('admin/kelola-pengguna-dosen') }}">Akun Dosen</a></li>
                    <li><a href="{{ url('admin/kelola-pengguna-mahasiswa') }}">Akun Mahasiswa</a></li>
                </ul>
            </li>

            <!-- VERIFIKASI LOMBA -->
            <li class="menu">
                <a href="{{ url('admin/verifikasi-lomba') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12l2 2l4-4"/>
                        <circle cx="12" cy="12" r="10"/>
                    </svg>
                    <span>Verifikasi Lomba</span>
                </a>
            </li>

            <!-- VERIFIKASI PRESTASI -->
            <li class="menu">
                <a href="{{ url('admin/verifikasi-prestasi') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/>
                    </svg>
                    <span>Verifikasi Prestasi</span>
                </a>
            </li>

            <!-- PERIODE -->
            <li class="menu">
                <a href="{{ url('admin/kelola-periode') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                    </svg>
                    <span>Kelola Periode</span>
                </a>
            </li>

            <!-- PRODI -->
            <li class="menu">
                <a href="{{ url('admin/kelola-prodi') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 2 7 12 12 22 7"/>
                        <polyline points="2 17 12 22 22 17"/>
                        <polyline points="2 12 12 17 22 12"/>
                    </svg>
                    <span>Kelola Prodi</span>
                </a>
            </li>

            <!-- ANALISIS -->
            <li class="menu">
                <a href="{{ url('admin/laporan-analisis-prestasi') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="20" x2="18" y2="10"/>
                        <line x1="12" y1="20" x2="12" y2="4"/>
                        <line x1="6" y1="20" x2="6" y2="14"/>
                    </svg>
                    <span>Laporan & Analisis</span>
                </a>
            </li>

            <!-- LOGOUT -->
            <li class="menu logout-item">
                <a href="{{ url('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                        <polyline points="16 17 21 12 16 7"/>
                    </svg>

                    <span>Logout</span>
                </a>

                <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display:none;">
                    @csrf
                </form>
            </li>

        </ul>
    </nav>
</div>
