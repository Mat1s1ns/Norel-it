<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Norel IT')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/logo.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Roboto:wght@400;500;700&family=Google+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/css/app.css">
    @stack('styles')
</head>
<body>

    <!-- Top Navigation Header -->
    <header class="site-header">
        <a href="/" class="header-brand">
            <img src="/images/logo.png" alt="Norel IT Logo" class="brand-logo">
        </a>

        <nav class="header-nav" aria-label="Galvenā navigācija">
            <a href="/" class="nav-item {{ request()->is('/') ? 'active' : '' }}">Sākums</a>
            <span class="nav-separator">·</span>

            <a href="/datortehnikas-tirdznieciba" class="nav-item {{ request()->is('datortehnikas-tirdzniecib*') ? 'active' : '' }}">Datortehnikas tirdzniecība</a>
            <span class="nav-separator">·</span>

            <a href="/it-audits" class="nav-item {{ request()->is('it-audits*') ? 'active' : '' }}">IT audits</a>
            <span class="nav-separator">·</span>

            <a href="/it-risinajumi" class="nav-item {{ request()->is('it-risinajumi*') || request()->is('it-risinājumi*') ? 'active' : '' }}">IT risinājumi</a>
            <span class="nav-separator">·</span>

            <div class="nav-dropdown">
                <a href="/jaunumi" class="dropdown-trigger {{ request()->is('jaunumi*') ? 'active' : '' }}">
                    <span>Jaunumi</span>
                    <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"></path></svg>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/" class="dropdown-item">Tests</a></li>
                </ul>
            </div>
            <span class="nav-separator">·</span>

            <a href="/kontakti" class="nav-item {{ request()->is('kontakti*') ? 'active' : '' }}">Kontakti</a>
            <span class="nav-separator">·</span>

            <a href="/musu-klienti" class="nav-item {{ request()->is('musu-klienti*') ? 'active' : '' }}">Mūsu klienti</a>
            <span class="nav-separator">·</span>

            <div class="nav-dropdown">
                <span class="dropdown-trigger">
                    <span>More</span>
                    <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"></path></svg>
                </span>
                <ul class="dropdown-menu">
                    <li><a href="/par-mums" class="dropdown-item">Par mums</a></li>
                    <li><a href="/serveri" class="dropdown-item">Serveri</a></li>
                    <li><a href="/veikalu-aprikojums" class="dropdown-item">Veikalu aprīkojums</a></li>
                    <li><a href="/vidzemes-datu-centrs" class="dropdown-item">Vidzemes datu centrs</a></li>
                </ul>
            </div>

            <!-- Search Icon -->
            <button class="search-btn" aria-label="Meklēt">
                <svg viewBox="0 0 24 24">
                    <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
            </button>
        </nav>
    </header>

    @yield('content')

</body>
</html>
