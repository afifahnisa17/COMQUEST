<style>
    .header-container {
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        background: rgba(255,255,255,0.85);
        border-bottom: 1px solid rgba(0,0,0,0.06);
        z-index: 999;
    }

    .header {
        height: 64px;
        display: flex;
        align-items: center;
        padding: 0 18px;
    }

    /* SIDEBAR TOGGLE */
    .sidebarCollapse {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 8px;
        border-radius: 10px;
        transition: 0.25s ease;
        color: #2b2b2b;
    }

    .sidebarCollapse:hover {
        background: rgba(67,55,241,0.08);
        color: #4337F1;
        transform: scale(1.05);
    }

    /* USER GROUP */
    .user-profile-group {
        margin-left: auto;
        display: flex;
        align-items: center;
        gap: 12px;
        cursor: pointer;
    }

    .user-name {
        font-weight: 600;
        color: #2b2b2b;
        transition: 0.2s;
    }

    .user-name a {
        text-decoration: none;
        color: inherit;
    }

    .user-name:hover {
        color: #4337F1;
    }

    /* AVATAR */
    .user-avatar {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        object-fit: cover;
        border: 1px solid rgba(0,0,0,0.1);
        transition: 0.25s;
    }

    .user-avatar:hover {
        transform: scale(1.08);
        border-color: #4337F1;
    }

    /* optional hover group */
    .user-profile-group:hover .user-name {
        color: #4337F1;
    }
</style>

<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm expand-header">

        <!-- LEFT: SIDEBAR TOGGLE -->
        <a href="javascript:void(0);"
            class="sidebarCollapse"
            data-placement="bottom"
            aria-label="Toggle sidebar">

            <svg xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-menu">

                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>

        </a>

        <!-- RIGHT: USER INFO -->
        <div class="user-profile-group">

            <!-- NAME -->
            <span class="user-name">
                <a href="{{ url('admin/profile') }}">
                    {{ $user->nama_admin }}
                </a>
            </span>

            <!-- AVATAR -->
            <img src="{{ url('uploads/profil/' . $user->foto_admin) }}"
                    alt="avatar"
                    class="user-avatar">

        </div>

    </header>
</div>
