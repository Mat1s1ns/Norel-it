@extends('layouts.base')

@section('title', 'Serveri - Norel IT')

@section('content')
    <!-- Main Content Area -->
    <main class="main-wrapper">

        <!-- Hero Section: Serveri in center -->
        <section class="hero-row">
            <div class="hero-center">
                <h1 class="hero-title">Serveri</h1>
                <div class="title-bar"></div>
            </div>
        </section>

        <!-- Main Body Text Section -->
        <section class="content-text">

            <p class="content-intro">
                Norel IT veic serveru projektēšanas, komplektēšanas, programmatūras instalēšanas, uzstādīšanas un apkalpošanas pakalpojumus. Piedāvājam arī sakārtot jūsu esošo serveri un, ja nepieciešams, modernizēt to. Sadarbojamies ar vadošajiem serveru komplektējošo daļu piegādātājiem, kas garantē kvalitāti.
            </p>

            <h2 class="section-subtitle">Projektēšana</h2>
            <p class="text-line">
                Atbilstoši klienta prasībām pēc veiktspējas, drošības, fiziskā un loģiskā izvietojuma, veicam serveru sistēmu projektēšanu. Ja nepieciešams, nodrošinām esošo risinājumu izpēti un novērtēšanu, lai pēc iespējas precīzāk nodrošinātu minētās vajadzības.
            </p>

            <h2 class="section-subtitle">Komplektēšana</h2>
            <p class="text-line">
                Neatkarīgi no tā, vai tehnika tiek komplektēta pie mums vai ražotāja, veicam aparatūras programmatūras atjaunošanu un testēšanu. Šādi nodrošinām maksimāli stabilu aparatūras darbību.
            </p>

            <h2 class="section-subtitle">Programmatūras instalēšana</h2>
            <p class="text-line">
                Veicam servera operētājsistēmas uzstādīšanu un konfigurēšanu. Atbilstoši klienta vajadzībām, nodrošinām virtualizācijas risinājumu uzstādīšanu. Konfigurācija tiek veikta atbilstoši vispār pieņemtiem labas prakses standartiem un klienta risinājumu prasībām.
            </p>

            <h2 class="section-subtitle">Uzstādīšana</h2>
            <p class="text-line">
                Piegādāsim un uzstādīsim serveru tehniku klienta telpās vai ārpus tām. Pirms uzstādīšanas konsultēsim par tehnikas darbību ietekmējošajiem kritiskajiem faktoriem.
            </p>

            <h2 class="section-subtitle">Apkalpošana</h2>
            <p class="text-line">
                Piedāvājam serveru apkalpošanu un uzraudzību.
            </p>

            <h3 class="section-subtitle" style="font-size: 14px; margin-top: 18px;">Servera pamata administrēšana:</h3>
            <ul class="service-list">
                <li>Bāzes programmas uzstādīšana un konfigurēšana</li>
                <li>Rezerves kopiju veidošana</li>
                <li>Log failu analīze</li>
                <li>Servera noslodzes monitorings</li>
                <li>Bāzes programmatūras atjaunošana (jaunāko versiju atsekošana un pielietošana)</li>
                <li>Iestatījumu administrēšana</li>
                <li>Pēc pieprasījuma – servera restartēšana</li>
                <li>Bojāto iekārtu maiņa</li>
                <li>Serveru galveno kritisko parametru centralizētā automātiskā uzraudzība</li>
            </ul>

            <h3 class="section-subtitle" style="font-size: 14px; margin-top: 18px;">Servera paplašinātā administrēšana:</h3>
            <ul class="service-list">
                <li>Visi pamata administrēšanas darbi</li>
                <li>Programmatūras uzstādīšana un konfigurēšana atkarībā no klienta uzdevumiem</li>
                <li>Drošības politikas noteikšana un uzstādīšana</li>
                <li>Izmaiņu veikšana bāzes programmatūras uzstādījumos, kas nepieciešami servera efektīvai darbībai</li>
                <li>Specifisku parametru centralizēta automātiska uzraudzība</li>
                <li>Klienta specifiskas programmatūras parametru maiņa maksimālās veiktspējas nodrošināšanai</li>
            </ul>

            <h2 class="section-subtitle" style="margin-top: 28px;">Kāpēc vajadzīgs serveris</h2>
            <p class="text-line">
                Lietojot serveri uzņēmuma ikdienas darbā, visi dati tiek glabāti lokalizēti vienā vietā un jebkurš darbinieks jebkurā laikā var piekļūt sev nepieciešamajai informācijai. Tas palīdz sakārtot uzņēmuma failu struktūru, loģisko un fizisko datu izvietojumu un izvairīties no failu pazušanas, ieviešot centralizētu arhivēšanas politiku. Centralizētai datu glabātuvei ir vieglāk kontrolēt pieeju konfidenciāliem failiem un datubāzēm, kā arī nodrošināt iespēju darbiniekiem pieslēgties darba failiem ārpus biroja telpām. Serveris palīdz celt ikdienas pienākumu veikšanas efektivitāti un produktivitāti.
            </p>
            <p class="text-line" style="margin-top: 14px;">
                Galvenie ieguvumi, kurus Jūs iegūstat iegādājoties serveri, ir uzlabots darba izpildes sniegums, labāka kontrole pār notiekošajiem procesiem, paaugstināta datu drošība un optimizētas datortehnikas iegādes izmaksas, regulāras datu kopijas.
            </p>
            <p class="closing-text">
                Katra servera veiksmīgai un ilgtermiņa darbībai ir nepieciešama profesionāla apkalpošana un uzraudzība, tāpēc mudinām jūs izmantot mūsu serveru administrēšanas pakalpojumus. Mēs paši projektējam un paši būvējam, tāpēc mums ir liela pieredze un prakse vislabāko risinājumu izveidē un īstenošanā. Mēs neatsakām ne lieliem, ne maziem klientiem, mūs nebaida izaicinājumi. Strādājam jums un nesam atbildību par padarīto darbu.
            </p>
            <p class="closing-text">
                Ja ir jautājumi vai nepieciešama palīdzība, droši vērsieties pie mums. Vienmēr priecāsimies palīdzēt.
            </p>

        </section>

    </main>
@endsection

