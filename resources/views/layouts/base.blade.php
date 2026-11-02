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
    <link rel="stylesheet" href="/css/app.css?v={{ time() }}">
    @stack('styles')
</head>
<body class="{{ request()->is('/') ? 'page-home' : '' }}">

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

            <a href="/par-mums" class="nav-item {{ request()->is('par-mums*') ? 'active' : '' }}">Par mums</a>
            <span class="nav-separator">·</span>

            <div class="nav-dropdown more-dropdown" id="moreDropdown">
                <span class="dropdown-trigger">
                    <span>More</span>
                    <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"></path></svg>
                </span>
                <div class="dropdown-menu drilldown-menu">
                    <!-- LEVEL 1: Root More Menu (Matches Image 1) -->
                    <ul class="drilldown-panel" data-level="1" style="list-style: none; margin: 0; padding: 0;">
                        <li style="list-style: none;"><a href="/serveri" class="dropdown-item">Serveri</a></li>
                        <li class="drilldown-item-wrap" style="list-style: none;">
                            <div class="drilldown-row">
                                <button type="button" class="drilldown-btn" data-goto="2" aria-label="Izvērst Veikalu aprīkojums">
                                    <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"></path></svg>
                                </button>
                                <a href="/veikalu-aprikojums" class="dropdown-item drilldown-text">Veikalu aprīkojums</a>
                            </div>
                        </li>
                        <li style="list-style: none;"><a href="#" class="dropdown-item">Vidzemes datu centrs</a></li>
                    </ul>

                    <!-- LEVEL 2: Veikalu aprīkojums (Matches Image 2) -->
                    <ul class="drilldown-panel" data-level="2" style="display: none; list-style: none; margin: 0; padding: 0;">
                        <li class="breadcrumb-item" style="list-style: none;">
                            <a href="#" class="dropdown-item breadcrumb-link" data-goto="1">Veikalu aprīkojums</a>
                        </li>
                        <li style="list-style: none;"><a href="#" class="dropdown-item child-item">Apkalpošana</a></li>
                        <li style="list-style: none;"><a href="#" class="dropdown-item child-item">Kases aparāti</a></li>
                        <li style="list-style: none;"><a href="#" class="dropdown-item child-item">Kases sistēmas</a></li>
                        <li style="list-style: none;"><a href="#" class="dropdown-item child-item">Noma</a></li>
                        <li class="drilldown-item-wrap" style="list-style: none;">
                            <div class="drilldown-row drilldown-row-lvl2">
                                <button type="button" class="drilldown-btn drilldown-btn-lvl2" data-goto="3" aria-label="Izvērst Padomi EKA lietotājie...">
                                    <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"></path></svg>
                                </button>
                                <a href="#" class="dropdown-item child-item drilldown-text">Padomi EKA lietotājie...</a>
                            </div>
                        </li>
                        <li style="list-style: none;"><a href="#" class="dropdown-item child-item">Svari</a></li>
                    </ul>

                    <!-- LEVEL 3: Padomi EKA lietotājiem (Matches Image 3) -->
                    <ul class="drilldown-panel" data-level="3" style="display: none; list-style: none; margin: 0; padding: 0;">
                        <li class="breadcrumb-item" style="list-style: none;">
                            <a href="#" class="dropdown-item breadcrumb-link" data-goto="1">Veikalu aprīkojums</a>
                        </li>
                        <li class="breadcrumb-item" style="list-style: none;">
                            <a href="#" class="dropdown-item breadcrumb-link" data-goto="2">Padomi EKA lietotājiem</a>
                        </li>
                        <li style="list-style: none;"><a href="#" class="dropdown-item child-item">Jaunās prasības svari...</a></li>
                        <li style="list-style: none;"><a href="#" class="dropdown-item child-item">Laika maiņa kases ap...</a></li>
                        <li style="list-style: none;"><a href="#" class="dropdown-item child-item">Par lietotu kases apa...</a></li>
                        <li style="list-style: none;"><a href="#" class="dropdown-item child-item">Šasijas numurs kontr...</a></li>
                    </ul>
                </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const moreDropdown = document.getElementById('moreDropdown');
            if (!moreDropdown) return;

            const panels = moreDropdown.querySelectorAll('.drilldown-panel');

            function showLevel(levelNum) {
                panels.forEach(p => {
                    if (p.getAttribute('data-level') === String(levelNum)) {
                        p.style.display = 'block';
                    } else {
                        p.style.display = 'none';
                    }
                });
            }

            // Drill down on toggle button click
            moreDropdown.addEventListener('click', function (e) {
                const toggleBtn = e.target.closest('.drilldown-btn');
                if (toggleBtn) {
                    e.preventDefault();
                    e.stopPropagation();
                    const targetLevel = toggleBtn.getAttribute('data-goto');
                    if (targetLevel) showLevel(targetLevel);
                    return;
                }

                // Return on breadcrumb link click
                const breadcrumbLink = e.target.closest('.breadcrumb-link');
                if (breadcrumbLink) {
                    e.preventDefault();
                    e.stopPropagation();
                    const targetLevel = breadcrumbLink.getAttribute('data-goto');
                    if (targetLevel) showLevel(targetLevel);
                    return;
                }
            });

            // Reset back to level 1 when mouse leaves more dropdown
            moreDropdown.addEventListener('mouseleave', function () {
                showLevel(1);
            });
        });
    </script>
</body>
</html>
