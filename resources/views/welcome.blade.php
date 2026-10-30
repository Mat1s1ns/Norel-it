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
                <div class="title-bar"></div>
            </div>
        </section>

        <!-- 3 Columns Section: Uzņēmumiem, Tirgotājiem, Privātpersonām -->
        <section class="columns-grid">

            <!-- Column 1: Uzņēmumiem -->
            <article class="column-box">
                <h2 class="column-title">Uzņēmumiem</h2>
                <p class="column-desc">
                    Biroja tehnikas un datoru apkalpošana, IT audits, datortīklu un serveru risinājumi, licenču audits, datu drošības risinājumi un rezerves kopēšana.
                </p>
            </article>

            <!-- Column 2: Tirgotājiem -->
            <article class="column-box">
                <h2 class="column-title">Tirgotājiem</h2>
                <p class="column-desc">
                    Kases aparāti, kases sistēmas, skeneri, svari, čeku lentes, tirdzniecības programmas un to apkalpošana.
                </p>
            </article>

            <!-- Column 3: Privātpersonām -->
            <article class="column-box">
                <h2 class="column-title">Privātpersonām</h2>
                <p class="column-desc">
                    Datoru diagnostika un remonts, programmatūras uzstādīšana, profilakse, datortehnikas tirdzniecība un konsultācijas.
                </p>
            </article>

        </section>

    </main>
@endsection
