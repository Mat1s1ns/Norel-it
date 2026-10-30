@extends('layouts.base')

@section('title', 'IT risinājumi - Norel IT')

@section('content')
    <!-- Main Content Area -->
    <main class="main-wrapper">

        <!-- Hero Section: IT risinājumi in center -->
        <section class="hero-row">
            <div class="hero-center">
                <h1 class="hero-title">IT risinājumi</h1>
                <div class="title-bar"></div>
            </div>
        </section>

        <!-- Centered Three-Panel Banner Image -->
        <img src="/images/it-risinajumi-banner.jpg" alt="IT risinājumi" class="page-banner">

        <!-- Three Services Columns -->
        <section class="columns-grid">

            <!-- Column 1: Datortehnikas apkalpošana -->
            <article class="column-box">
                <h2 class="service-heading">Datortehnikas apkalpošana</h2>
                <p class="col-text">
                    Mēs izprotam informācijas tehnoloģiju lielo nozīmi uzņēmuma darba sekmīgā nodrošināšanā, tāpēc piedāvājam kvalitatīvu un kompleksu datortehnikas apkalpošanu korporatīvajiem klientiem. Daži no regulārajiem apkalpošanas līguma darbiem:
                </p>
                <ul class="service-list">
                    <li>vispārējā datoru profilakse</li>
                    <li>serveru darbības profilakse</li>
                    <li>lokālo datortīklu apkalpes darbi</li>
                    <li>datu aizsardzības īstenošana</li>
                    <li>datu saglabāšanas īstenošana</li>
                </ul>
                <p class="col-text">
                    Piedāvājam divu veidu apkalpošanas līgumus - regulāru ikmēneša apkalpošanu vai apkalpošanu uz izsaukuma pamata.
                </p>
            </article>

            <!-- Column 2: IT drošība -->
            <article class="column-box">
                <h2 class="service-heading">IT drošība</h2>
                <p class="col-text">
                    Grāmatvedības un klientu datubāzes, dažādi uzņēmuma dokumenti, e-pastu sarakstes - tie visi ir dati, ko nepieciešams droši glabāt. IT drošība ir svarīga mūsu piedāvāto apkalpošanas darbu sastāvdaļa, jo mums rūp jūsu datu drošība. Piedāvājam:
                </p>
                <ul class="service-list">
                    <li>serveru uzstādīšanu un apkalpošanu</li>
                    <li>datu aizsardzību un saglabāšanu</li>
                    <li>IT auditu</li>
                    <li>mākoņpakalpojumus (Vidzemes datu centrs)</li>
                </ul>
            </article>

            <!-- Column 3: Infrastruktūras attīstība -->
            <article class="column-box">
                <h2 class="service-heading">Infrastruktūras attīstība</h2>
                <p class="col-text">
                    Esat jauns uzņēmums, plānojat paplašināt darbību vai nomainīt novecojušo datortehniku? Mēs varam sniegt profesionālu palīdzību:
                </p>
                <ul class="service-list">
                    <li>konsultācijas IT infrastruktūras attīstībā</li>
                    <li>datortīklu un videonovērošanas ierīkošana</li>
                    <li>jaunas datortehnikas piegāde un uzstādīšana</li>
                    <li>biznesa procesu automatizācija</li>
                </ul>
            </article>

        </section>

        <!-- Bottom Closing Text Callout -->
        <section class="bottom-callout">
            <p class="col-text" style="margin-bottom: 14px;">
                Kāpēc izvēlēties tieši mūs? Saņemsiet individuālu attieksmi un jums vienmēr būs zināms konkrēts cilvēks, pie kura vērsties ar jautājumiem.
            </p>
            <p class="col-text">
                Mūsu darbiniekiem ir vairāk kā 10 gadu pieredze IT nozarē, varam sniegt konsultācijas par plašu tēmu loku. <strong>Sazinieties ar mums, lai uzzinātu sīkāk par visām iespējām, kā varam jums palīdzēt.</strong>
            </p>
        </section>

    </main>
@endsection
