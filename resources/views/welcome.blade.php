@extends('layouts.base')

@section('title', 'Kases aparāti un datortehnikas serviss - Norel IT')

@section('content')
    <!-- Main Content Area -->
    <main class="main-wrapper">

        <!-- Hero Section: TeamViewer icon on left + Sākums in center -->
        <section class="hero-row">
            <a href="https://get.teamviewer.com/by5pesv" target="_blank" rel="noopener noreferrer" class="teamviewer-support" title="Attālinātā palīdzība (TeamViewer)">
                <img src="/images/teamviewer.png" alt="TeamViewer QuickSupport" class="teamviewer-img">
            </a>

            <div class="hero-center">
                <h1 class="hero-title">Sākums</h1>
                <h2 class="hero-subtitle">Kases aparāti un datortehnikas serviss</h2>
                <div class="title-bar"></div>
            </div>
        </section>

        <!-- 3 Columns Section: Uzņēmumiem, Tirgotājiem, Privātpersonām -->
        <section class="columns-grid">

            <!-- Column 1: Uzņēmumiem -->
            <article class="column-box">
                <h2 class="column-title">Uzņēmumiem</h2>
                <p class="column-desc">
                    Kompleksi IT risinājumi atbilstoši katra klienta vēlmēm un vajadzībām. Mēs ļoti augstu vērtējam klientu biznesa procesus, tāpēc piedāvājam pakalpojumus un produktus, kas vislabāk spēj šos procesus nodrošināt un uzlabot.
                </p>
            </article>

            <!-- Column 2: Tirgotājiem -->
            <article class="column-box">
                <h2 class="column-title">Tirgotājiem</h2>
                <p class="column-desc">
                    Ērti un atbilstoši risinājumi veikaliem un veikalu ķēdēm. Tirgojam jaunus un Latvijas darba videi piemērotus kases aparātus un kases sistēmas, to perifēriju (skenerus, uzlīmju un parastos svarus, uzlīmju printerus, čeku lentas). Nodrošinām pilnu kases aparāta apkalpošanu.
                </p>
            </article>

            <!-- Column 3: Privātpersonām -->
            <article class="column-box">
                <h2 class="column-title">Privātpersonām</h2>
                <p class="column-desc">
                    Veicam ātru un kvalitatīvu datoru diagnostiku un remontu. Ja nepieciešams jauns dators mājas birojam vai datortspēlēm, mūsu speciālisti piedāvās labāko risinājumu.
                </p>
            </article>

        </section>

    </main>
@endsection
