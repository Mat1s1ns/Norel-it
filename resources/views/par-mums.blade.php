@extends('layouts.base')

@section('title', 'Par mums - Norel IT')

@section('content')
    <!-- Main Content Area -->
    <main class="main-wrapper">

        <!-- Hero Section: Par mums in center -->
        <section class="hero-row">
            <div class="hero-center">
                <h1 class="hero-title">Par mums</h1>
                <div class="title-bar"></div>
            </div>
        </section>

        <!-- About Us Content Section -->
        <section class="about-container">

            <p class="about-intro">
                SIA "NOREL IT" dibināta 2002. gadā ar mērķi piedāvāt augstas kvalitātes tehnoloģiskus un programmatūras risinājumus un nodrošinājumus Vidzemes reģionā, sniedzot klientiem plaša spektra informācijas tehnoloģiju pakalpojumus - sākot ar lietotāja konsultēšanu pie datora iegādes, līdz pat lielu uzņēmumu IT infrastruktūras apkalpošanai un servisa nodrošināšanai.
            </p>

            <h2 class="about-subtitle">Galvenie darbības virzieni:</h2>

            <ul class="about-list">
                <li>IT Administratoru pakalpojumi.</li>
                <li>Datortehnikas, datorpiederumu un programmatūras tirdzniecība.</li>
                <li>Kases aparātu tirdzniecība un apkalpošana.</li>
                <li>Datortīklu projektēšana, izveide un apkalpošana.</li>
                <li>Interaktīvo risinājumu, projektoru tirdzniecība un apkalpošana.</li>
                <li>Uzņēmumu vadības sistēmas, grāmatvedības pakalpojumi.</li>
            </ul>

            <h2 class="partners-title">Mūsu partneri</h2>

            <div class="partners-logos-wrap">
                <img src="/images/partneri-logos.png" alt="Mūsu partneri: Dell, ESET, CHD, Tilde, ELKO" class="partners-logos-img">
            </div>

            <p class="esf-intro">
                Mūsu darbinieki apgūst jaunas zināšanas ar ESF fondu atbalstu (līguma nr. L-APA-10-0024 un Nr. L-APA-10-0016).
            </p>

            <div class="esf-banners-wrap">
                <img src="/images/esf-projekti.png" alt="Projekts tiek īstenots sadarbībā ar LIAA, ESF un LTRK" class="esf-banners-img">
            </div>

        </section>

    </main>
@endsection
