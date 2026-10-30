<<<<<<< HEAD
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kases aparāti un datortehnikas serviss Vidzemē - Norel IT</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Roboto:wght@400;500;700&family=Google+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- Top Navigation Header -->
    <header class="site-header">
        <a href="/" class="header-brand">
            <img src="{{ asset('images/logo.png') }}" alt="Norel IT Logo" class="brand-logo">
            <span class="site-title">Kases aparāti un datortehnikas s...</span>
        </a>

        <nav class="header-nav" aria-label="Galvenā navigācija">
            <a href="/" class="nav-item active">Sākums</a>
            <span class="nav-separator">·</span>

            <a href="/datortehnikas-tirdzniecība" class="nav-item">Datortehnikas tirdzniecība</a>
            <span class="nav-separator">·</span>

            <a href="/it-audits" class="nav-item">IT audits</a>
            <span class="nav-separator">·</span>

            <a href="/it-risinājumi" class="nav-item">IT risinājumi</a>
            <span class="nav-separator">·</span>

            <div class="nav-dropdown">
                <a href="/jaunumi" class="dropdown-trigger">
                    <span>Jaunumi</span>
                    <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"></path></svg>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/jaunumi" class="dropdown-item">Visi jaunumi</a></li>
                    <li><a href="/jaunumi/vakances" class="dropdown-item">Aktuālās vakances</a></li>
                </ul>
            </div>
            <span class="nav-separator">·</span>

            <a href="/kontakti" class="nav-item">Kontakti</a>
            <span class="nav-separator">·</span>

            <a href="/mūsu-klienti" class="nav-item">Mūsu klienti</a>
            <span class="nav-separator">·</span>

            <div class="nav-dropdown">
                <span class="dropdown-trigger">
                    <span>More</span>
                    <svg class="dropdown-arrow" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"></path></svg>
                </span>
                <ul class="dropdown-menu">
                    <li><a href="/pakalpojumi" class="dropdown-item">Visi pakalpojumi</a></li>
                    <li><a href="/par-mums" class="dropdown-item">Par mums</a></li>
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

    <!-- Main Content Area -->
    <main class="main-wrapper">

        <!-- Hero Section: TeamViewer icon on left + Sākums in center -->
        <section class="hero-row">
            <a href="https://get.teamviewer.com/by5pesv" target="_blank" rel="noopener noreferrer" class="teamviewer-support" title="Attālinātā palīdzība (TeamViewer)">
                <img src="{{ asset('images/teamviewer.png') }}" alt="TeamViewer QuickSupport" class="teamviewer-img">
            </a>

            <div class="hero-center">
                <h1 class="hero-title">Sākums</h1>
                <div class="title-bar"></div>
            </div>
        </section>

        <!-- 3 Columns Section: Uzņēmumiem, Tirgotājiem, Privātpersonām -->
        <section class="columns-grid">

            <!-- Column 1: Uzņēmumiem -->
            <article class="column-box">
                <h2 class="col-heading">Uzņēmumiem</h2>
                <p class="col-text">
                    Kompleksi IT risinājumi atbilstoši katra klienta vēlmēm un vajadzībām. Mēs ļoti augstu vērtējam klientu biznesa procesus, tāpēc piedāvājam pakalpojumus un produktus, kas vislabāk spēj šos procesus nodrošināt
                </p>
                <p class="col-text">
                    un uzlabot. <a href="/it-risinājumi" class="more-link">Vairāk &gt;&gt;</a>
                </p>
            </article>

            <!-- Column 2: Tirgotājiem -->
            <article class="column-box">
                <h2 class="col-heading">Tirgotājiem</h2>
                <p class="col-text">
                    Ērti un atbilstoši risinājumi veikaliem un veikalu ķēdēm. Tirgojam jaunus un Latvijas darba videi piemērotus kases aparātus un kases sistēmas, to perifēriju (skenerus, uzlīmju un parastos svarus, uzlīmju printerus, čeku lentas). Nodrošinām pilnu kases aparāta apkalpošanu. <a href="/datortehnikas-tirdzniecība" class="more-link">Vairāk &gt;&gt;</a>
                </p>
            </article>

            <!-- Column 3: Privātpersonām -->
            <article class="column-box">
                <h2 class="col-heading">Privātpersonām</h2>
                <p class="col-text">
                    Veicam ātru un kvalitatīvu datoru diagnostiku un remontu.
                </p>
                <p class="col-text">
                    Ja nepieciešams jauns dators mājas birojam vai datortspēlēm, mūsu speciālisti piedāvās labāko risinājumu. <a href="/datortehnikas-tirdzniecība" class="more-link">Vairāk &gt;&gt;</a>
=======
```html
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOREL IT — Sākums</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <a href="#" class="logo">
            <span class="logo-icon">»</span>
            <span class="logo-text">
                N<span>O</span>REL IT
                <small>IT NOZARES LĪDERIS VIDZEMĒ</small>
            </span>
        </a>

        <div class="header-title">
            Kases aparāti un datortehnikas s...
        </div>

        <button class="menu-toggle" id="menuToggle">☰</button>

        <nav class="navigation" id="navigation">
            <a href="#" class="active">Sākums</a>
            <span class="separator">·</span>
            <a href="#uznemumiem">Datortehnikas tirdzniecība</a>
            <span class="separator">·</span>
            <a href="#uznemumiem">IT audits</a>
            <span class="separator">·</span>
            <a href="#tirgotajiem">IT risinājumi</a>
            <span class="separator">·</span>

            <div class="dropdown">
                <button class="dropdown-button">Jaunumi <span>⌄</span></button>
                <div class="dropdown-content">
                    <a href="#jaunumi">Jaunākās ziņas</a>
                    <a href="#jaunumi">Aktualitātes</a>
                </div>
            </div>

            <span class="separator">·</span>
            <a href="#kontakti">Kontakti</a>
            <span class="separator">·</span>
            <a href="#klienti">Mūsu klienti</a>
            <span class="separator">·</span>
            <a href="#par-mums">Par mums</a>
            <span class="separator">·</span>
            <a href="#serveri">Serveri</a>
            <span class="separator">·</span>

            <div class="dropdown">
                <button class="dropdown-button">
                    Veikalu aprīkojums <span>⌄</span>
                </button>
                <div class="dropdown-content">
                    <a href="#tirgotajiem">Kases aparāti</a>
                    <a href="#tirgotajiem">Svītrkodu lasītāji</a>
                    <a href="#tirgotajiem">Printeri</a>
                </div>
            </div>

            <span class="separator">·</span>

            <div class="dropdown">
                <button class="dropdown-button">More <span>⌄</span></button>
                <div class="dropdown-content">
                    <a href="#privatpersonam">Privātpersonām</a>
                    <a href="#kontakti">Sazināties</a>
                </div>
            </div>

            <button class="search-button" id="searchButton" aria-label="Meklēt">
                <span class="search-icon"></span>
            </button>
        </nav>

        <form class="search-form" id="searchForm">
            <input type="search" id="searchInput" placeholder="Meklēt lapā...">
            <button type="submit">Meklēt</button>
        </form>
    </header>

    <main>
        <section class="hero">
            <div class="remote-icon">
                <span>↔</span>
            </div>

            <h1>Sākums</h1>
            <div class="title-line"></div>
        </section>

        <section class="services">

            <article class="service" id="uznemumiem">
                <h2>Uzņēmumiem</h2>

                <p>
                    Kompleksi IT risinājumi atbilstoši katra klienta vēlmēm
                    un vajadzībām. Mēs ļoti augstu vērtējam klientu biznesa
                    procesus, tāpēc piedāvājam pakalpojumus un produktus,
                    kas vislabāk spēj šos procesus nodrošināt un uzlabot.
                </p>

                <a href="#kontakti">Vairāk &gt;&gt;</a>
            </article>

            <article class="service" id="tirgotajiem">
                <h2>Tirgotājiem</h2>

                <p>
                    Ērti un atbilstoši risinājumi veikaliem un veikalu ķēdēm.
                    Tirgojam jaunus un Latvijas darba videi piemērotus kases
                    aparātus un kases sistēmas, to perifēriju (skenerus,
                    uzlīmju un parastos svarus, uzlīmju printerus, čeku lentes).
                    Nodrošinām pilnu kases aparāta apkalpošanu.
                </p>

                <a href="#kontakti">Vairāk &gt;&gt;</a>
            </article>

            <article class="service" id="privatpersonam">
                <h2>Privātpersonām</h2>

                <p>
                    Veicam ātru un kvalitatīvu datoru diagnostiku un remontu.
                </p>

                <p>
                    Ja nepieciešams jauns dators mājas birojam vai datorspēlēm,
                    mūsu speciālisti piedāvās labāko risinājumu.
                    <a href="#kontakti">Vairāk &gt;&gt;</a>
>>>>>>> a24c2013ac4a92a167f0e88207627a36a0e9973d
                </p>
            </article>

        </section>

<<<<<<< HEAD
    </main>


</body>
</html>
=======
        <section class="extra-section" id="jaunumi">
            <h2>Jaunumi</h2>
            <p>Uzzini vairāk par mūsu jaunākajiem IT risinājumiem.</p>
        </section>

        <section class="extra-section" id="kontakti">
            <h2>Kontakti</h2>
            <p>Sazinies ar mums, lai uzzinātu vairāk par mūsu pakalpojumiem.</p>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
```
>>>>>>> a24c2013ac4a92a167f0e88207627a36a0e9973d
