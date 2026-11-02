@extends('layouts.base')

@section('title', 'Jaunās prasības svariem - Norel IT')

@section('content')
    <!-- Main Content Area -->
    <main class="main-wrapper">

        <!-- Hero Section: Jaunās prasības svariem in center -->
        <section class="hero-row">
            <div class="hero-center">
                <h1 class="hero-title">Jaunās prasības svariem</h1>
                <div class="title-bar"></div>
            </div>
        </section>

        <!-- Main Body Text Section -->
        <section class="content-text">

            <p class="text-line" style="margin-bottom: 24px; line-height: 1.62;">
                No 2016. gada 20. aprīļa nevar lietot svarus, kas neatbilst direktīvas 209/23/EC prasībām. Pievērsiet uzmanību, vai uz jūsu svaru marķējuma plāksnītes (kur norādīts svaru modelis, seriālais numurs un cita informācija par svariem) ir marķēta <strong>CE atbilstības zīme</strong> un tās <strong>uzlikšanas gads</strong>, <strong>M zīmes</strong> metroloģiskais papildmarķējums un <strong>paziņotās institūcijas numurs</strong> (4 ciparu skaitlis zem gada). Vairāk informācijas <a href="http://likumi.lv/ta/id/281518-neautomatisko-svaru-atbilstibas-novertesanas-noteikumi" target="_blank" rel="noopener noreferrer" style="color: #212121; text-decoration: underline; font-weight: 700;">MK noteikumos Nr. 210</a>.
            </p>

            <div style="margin: 24px 0;">
                <img src="/images/jaunas-prasibas-svariem.jpg" alt="Svaru marķējums un verifikācija" style="max-width: 580px; width: 100%; height: auto; display: block;" />
            </div>

            <p class="text-line" style="font-weight: 700; margin-top: 28px; margin-bottom: 14px; line-height: 1.62;">
                Kā noteikt, uz cik ilgu laiku svari ir verificēti?
            </p>

            <p class="text-line" style="margin-bottom: 16px; line-height: 1.62;">
                Jauniem svariem no rūpnīcas verifikācija ir 2 gadi. Ja uz uzlīmes verifikācijas gads ir 2015. (kā attēlā), tas nozīmē, ka šiem svariem verifikācija ir spēkā 2015. un 2016. gadā.
            </p>

            <p class="text-line" style="margin-bottom: 24px; line-height: 1.62;">
                Pēc šiem 2 gadiem atkārtota verifikācija ir spēkā 1 gadu. Svaru verificētājs pārbauda svarus, uzlīmē jaunu uzlīmi, kur ir norādīts mēnesis un gads, kad veikta verificēšana.
            </p>

            <p class="text-line" style="font-weight: 700; margin-top: 28px; margin-bottom: 14px; line-height: 1.62;">
                Ko darīt ar svariem, kuriem nav nepieciešamais marķējums?
            </p>

            <p class="text-line" style="margin-bottom: 24px; line-height: 1.62;">
                Šos svarus no 2016. gada 1. janvāra tirdzniecībā un citās regulētajās nozarēs lietot nevar. Nav paredzēta īpaša verifikācija, lai pārbaudītu šo svaru atbilstību jaunajām prasībām un piešķirtu CE M marķējumu. Neatbilstošos svarus var utilizēt vai pārdot privātpersonām.
            </p>

            <p class="text-line" style="font-weight: 700; margin-top: 28px; margin-bottom: 14px; line-height: 1.62;">
                Vai var lietot svarus, kam ir tikai CE vai M zīme?
            </p>

            <p class="text-line" style="margin-bottom: 24px; line-height: 1.62;">
                Nē, kā skaidroja Metroloģijas centra pārstāvis, šajos gadījumos marķējums nav pilnīgs un arī šādus svarus lietot nedrīkst. Tāpat uzmanība jāpievērš arī tam, vai ir norādīts gads un paziņotās institūcijas numurs (līdzīgi kā attēlā). Lai svarus drīkstētu lietot, ir jābūt visam nepieciešamajam marķējumam un verifikācijai.
            </p>

        </section>

    </main>
@endsection

