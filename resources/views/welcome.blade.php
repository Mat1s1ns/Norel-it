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
                </p>
            </article>

        </section>

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