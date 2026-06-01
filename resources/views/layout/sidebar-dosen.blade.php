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

            .menu > a[aria-expanded="true"] {
                background: rgba(67,55,241,0.12);
                color: var(--primary);
            }

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

            <div class="theme-brand">
                <a href="{{ url('dosen/beranda') }}">
                    <img src="{{ asset('assets/img/favicon.ico') }}" alt="logo">
                </a>
                <span class="theme-text">COMPQUEST</span>
            </div>

            <nav id="sidebar">

                <ul class="list-unstyled menu-categories" id="accordionExample">

                    <li class="menu">
                        <a href="{{ url('dosen/beranda') }}" aria-expanded="{{ Request::is('dosen/beranda*') ? 'true' : 'false' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-home" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                <polyline points="9 22 9 12 15 12 15 22"/>
                            </svg>
                            <span>Beranda</span>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="{{ url('dosen/mahasiswa-bimbingan') }}" aria-expanded="{{ Request::is('dosen/mahasiswa-bimbingan*') ? 'true' : 'false' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a4 4 0 0 0-4-4H2z"/>
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a4 4 0 0 1 4-4h6z"/>
                            </svg>
                            <span>Mahasiswa Bimbingan</span>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="{{ url('dosen/lomba') }}" aria-expanded="{{ Request::is('dosen/lomba*') ? 'true' : 'false' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                            <span>Lomba</span>
                        </a>
                    </li>

                    <li class="menu logout-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                            @csrf
                        </form>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            <span>Keluar</span>
                        </a>
                    </li>

                </ul>
            </nav>

        </div>
