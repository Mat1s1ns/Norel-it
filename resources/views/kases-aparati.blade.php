@extends('layouts.base')

@section('title', 'Kases aparāti - Norel IT')

@section('content')
    <!-- Main Content Area -->
    <main class="main-wrapper">

        <!-- Hero Section: Kases aparāti in center -->
        <section class="hero-row">
            <div class="hero-center">
                <h1 class="hero-title">Kases aparāti</h1>
                <div class="title-bar"></div>
            </div>
        </section>

        <!-- Products Section -->
        <section class="products-container">

            <p class="content-intro" style="margin-bottom: 36px;">
                Tirgojam LR likumdošanai atbilstošus, modernus kases aparātus.
            </p>

            <!-- Product 1: CHD 3050U -->
            <div class="product-row">
                <div class="product-media">
                    <img src="/images/chd-3050.jpg" alt="CHD 3050U" class="product-img">
                    <img src="/images/naudas-lade-closed.png" alt="Naudas lāde" class="product-img" style="margin-top: 24px; max-width: 200px;">
                </div>
                <div class="product-details">
                    <h2 class="product-title">CHD 3050U (sertificēts un atbilst jaunajām tehniskajām prasībām)</h2>

                    <p class="text-line">Neliels kases aparāts darbam nelielās līdz vidējās tirdzniecības vietās,</p>
                    <p class="text-line">izbraukumu tirdzniecībā.</p>
                    <p class="text-line">Var pieslēgt skeneri, ārējo klienta displeju vai svarus.</p>
                    <p class="text-line">Čekā var ievadīt un kases aparāta atmiņā saglabāt klienta rekvizītus.</p>
                    <p class="text-line"><strong>Nav paredzēts slēgšanai pie datora.</strong></p>

                    <div class="product-specs" style="margin-top: 14px; margin-bottom: 16px;">
                        Sekcijas: 8<br>
                        PLU: 5000<br>
                        Norēķinu veidi: 3<br>
                        Kasieri: max 20<br>
                        Displejs: klienta LED, kasiera LCD<br>
                        Čeka galva: 7 līnijas, grafiskais logo<br>
                        Kontrollente: elektroniskā<br>
                        Pieslēgumvietas: 2 x RS232, 1 x microUSB<br>
                        Printeris: termo<br>
                        Lentes nogriešana: manuāla<br>
                        Drukas ātrums: 60 mm/s<br>
                        Čeku lente: 57/50<br>
                        Izmēri: 220 (P) x 280 (G) x 118 (A) bez lādes<br>
                        Lāde (mazā): 325 (P) x 400 (G) x 100 (A) mm<br>
                        Svars: 1,6 kg (bez naudas lādes)<br>
                        Darbības temperatūra: 0ºC līdz +45ºC<br>
                        Komplektācijā: pamācība, 1 čeku lentes rullītis, barošanas bloks, SD kartes.
                    </div>

                    <p class="text-line"><strong>Papildus var iegādāties:</strong></p>
                    <div class="product-addons">
                        Naudas lāde mazā - 3 nodalījumi banknotēm, pilnībā metāliska, atslēdzama slēdzene<br>
                        Naudas lāde lielā - 4 nodalījumi banknotēm<br>
                        Akumulatora baterija (max 600 čekiem līdz 0oC)<br>
                        Ārējais klientu displejs<br>
                        Svari<br>
                        Skeneris<br>
                        Čeku lentas
                    </div>

                    <p class="text-line" style="margin-top: 16px;"><strong>CENA: 313.39 EUR ar PVN</strong></p>
                    <p class="text-line" style="margin-top: 8px;"><strong>CENA: 35,00 EUR ar PVN (mazā naudas lāde)</strong></p>
                    <p class="text-line" style="margin-top: 14px;"><strong>KOMPLEKTA CENA: 393.39 EUR ar PVN</strong></p>
                    <p class="text-line">(kases aparāts, naudas lāde, apkalpošanas līgums, kases aparāta sagatavošana, pamatapmācība)</p>
                </div>
            </div>

            <!-- Product 2: CHD 3850 ar naudas lādi -->
            <div class="product-row" style="margin-top: 48px;">
                <div class="product-media">
                    <img src="/images/chd-3850.jpg" alt="CHD 3850 ar naudas lādi" class="product-img">
                    <img src="/images/naudas-lade-open.png" alt="Naudas lāde" class="product-img" style="margin-top: 24px; max-width: 220px;">
                </div>
                <div class="product-details">
                    <h2 class="product-title">CHD 3850 ar naudas lādi (sertificēts un atbilst jaunajām tehniskajām prasībām)</h2>

                    <p class="text-line">Funkcijām bagāts un ātrs kases aparāts darbam vidējās līdz lielās tirdzniecības vietās.</p>
                    <p class="text-line">Var pieslēgt skeneri, ārējo klienta displeju un svarus.</p>
                    <p class="text-line">Čekā var ievadīt un kases aparāta atmiņā saglabāt klienta rekvizītus.</p>
                    <p class="text-line"><strong>Nav paredzēts slēgšanai pie datora.</strong></p>

                    <div class="product-specs" style="margin-top: 14px; margin-bottom: 16px;">
                        Sekcijas: 32 vienā klaviatūras klājumā (max 64)<br>
                        PLU: 4900<br>
                        Norēķinu veidi: 3<br>
                        Kasieri: max 99<br>
                        Displejs: klienta LED, kasiera LCD<br>
                        Čeka galva: 7 līnijas, grafiskais logo<br>
                        Kontrollente: elektroniskā<br>
                        Pieslēgumvietas: 1 x USB, 2 x RS232<br>
                        Printeris: termo<br>
                        Lentes nogriešana: automātiska<br>
                        Drukas ātrums: 100 mm/s<br>
                        Čeku lente: 57/50, 57/60<br>
                        Izmēri: 32 (P) x 40 (G) x 16 (A) cm, bez lādes.<br>
                        Naudas lāde: 41 (P) x 42 (G) x 11 (A) cm<br>
                        Svars: 3,4 kg (bez naudas lādes)<br>
                        Darbības temperatūra: 0ºC līdz +45ºC<br>
                        Komplektācijā: naudas lāde ar 4 banknošu nodalījumiem, pamācība, 1 čeku lentes rullītis, barošanas bloks, SD kartes.
                    </div>

                    <p class="text-line"><strong>Papildus var iegādāties:</strong></p>
                    <div class="product-addons">
                        Ārējais klientu displejs<br>
                        Klientu karšu lasītājs<br>
                        Akumulators<br>
                        Svari<br>
                        Skeneris<br>
                        Čeku lentas
                    </div>

                    <p class="text-line" style="margin-top: 16px;"><strong>CENA: 482.79 EUR ar PVN</strong></p>
                    <p class="text-line" style="margin-top: 14px;"><strong>KOMPLEKTA CENA: 527.79 EUR ar PVN</strong></p>
                    <p class="text-line">(kases aparāts, naudas lāde, apkalpošanas līgums, kases aparāta sagatavošana, pamatapmācība)</p>
                </div>
            </div>

            <!-- Product 3: CHD 5850H ar naudas lādi -->
            <div class="product-row" style="margin-top: 48px;">
                <div class="product-media">
                    <img src="/images/chd-5850.jpg" alt="CHD 5850H ar naudas lādi" class="product-img">
                    <img src="/images/naudas-lade-closed.png" alt="Naudas lāde" class="product-img" style="margin-top: 24px; max-width: 220px;">
                </div>
                <div class="product-details">
                    <h2 class="product-title">CHD 5850H ar naudas lādi (sertificēts kā hibrīda kases aparāts)</h2>

                    <p class="text-line">Funkcijām bagāts un ātrs kases aparāts darbam vidējās līdz lielās tirdzniecības vietās.</p>
                    <p class="text-line">Var pieslēgt datoru, skeneri, ārējo klienta displeju un svarus.</p>
                    <p class="text-line">Čekā var ievadīt un kases aparāta atmiņā saglabāt klienta rekvizītus.</p>

                    <div class="product-specs" style="margin-top: 14px; margin-bottom: 16px;">
                        Sekcijas: 64 (max 99)<br>
                        PLU: 10 000 (max 50 000)<br>
                        Norēķinu veidi: 3<br>
                        Kasieri: max 99<br>
                        Displejs: klienta LED, kasiera LCD<br>
                        Čeka galva: 7 līnijas, grafiskais logo<br>
                        Kontrollente: elektroniskā<br>
                        Pieslēgumvietas: 1 x USB, 1 x Ethernet, 4 x RS232<br>
                        Printeris: termo<br>
                        Lentes nogriešana: automātiska<br>
                        Drukas ātrums: 100 mm/s<br>
                        Čeku lente: 57/50, 57/60<br>
                        Izmēri: 32 (P) x 40 (G) x 16 (A) cm, bez lādes.<br>
                        Naudas lāde: 41 (P) x 42 (G) x 11 (A) cm<br>
                        Svars: 3,4 kg (bez naudas lādes)<br>
                        Darbības temperatūra: 0ºC līdz +45ºC<br>
                        Komplektācijā: naudas lāde ar 4 banknošu nodalījumiem, pamācība, 1 čeku lentes rullītis, barošanas bloks, SD kartes.
                    </div>

                    <p class="text-line"><strong>Papildus var iegādāties:</strong></p>
                    <div class="product-addons">
                        Fiskālais kods saslēgumam ar datoru<br>
                        Ārējais klientu displejs<br>
                        Klientu karšu lasītājs
                    </div>

                    <p class="text-line" style="margin-top: 14px;">Iepriekš pasūtot, pieejams arī CHD 5880H - šī paša kases aparāta versija ar gludo klaviatūru.</p>
                    <p class="text-line">Īpaši izdevīgs risinājums bāriem un kafejnīcām.</p>
                </div>
            </div>

            <!-- Product 4: CHD 3050UH -->
            <div class="product-row" style="margin-top: 48px;">
                <div class="product-media">
                    <img src="/images/chd-3050.jpg" alt="CHD 3050UH" class="product-img">
                    <img src="/images/naudas-lade-open.png" alt="Naudas lāde" class="product-img" style="margin-top: 24px; max-width: 200px;">
                </div>
                <div class="product-details">
                    <h2 class="product-title">CHD 3050UH (sertificēts kā hibrīda kases aparāts un atbilst jaunajām tehniskajām prasībām)</h2>

                    <p class="text-line">Neliels kases aparāts darbam nelielās līdz vidējās tirdzniecības vietās.</p>
                    <p class="text-line">Var pieslēgt datoru, skeneri, ārējo klienta displeju vai svarus.</p>
                    <p class="text-line">Čekā var ievadīt un kases aparāta atmiņā saglabāt klienta rekvizītus.</p>

                    <div class="product-specs" style="margin-top: 14px; margin-bottom: 16px;">
                        Sekcijas: 8<br>
                        PLU: 5000<br>
                        Norēķinu veidi: 3<br>
                        Kasieri: max 20<br>
                        Displejs: klienta LED, kasiera LCD<br>
                        Čeka galva: 7 līnijas, grafiskais logo<br>
                        Kontrollente: elektroniskā<br>
                        Pieslēgumvietas: 2 x RS232, 1 x microUSB<br>
                        Printeris: termo<br>
                        Lentes nogriešana: manuāla<br>
                        Drukas ātrums: 60 mm/s<br>
                        Čeku lente: 57/50<br>
                        Izmēri: 220 (P) x 280 (G) x 118 (A) bez lādes<br>
                        Lāde (mazā): 325 (P) x 400 (G) x 100 (A) mm<br>
                        Svars: 1,6 kg (bez naudas lādes)<br>
                        Darbības temperatūra: 0ºC līdz +45ºC<br>
                        Komplektācijā: pamācība, 1 čeku lentes rullītis, barošanas bloks, SD kartes.
                    </div>

                    <p class="text-line"><strong>Papildus var iegādāties:</strong></p>
                    <div class="product-addons">
                        Naudas lāde mazā - 3 nodalījumi banknotēm, pilnībā metāliska, atslēdzama slēdzene<br>
                        Naudas lāde lielā - 4 nodalījumi banknotēm<br>
                        Akumulatora baterija (max 600 čekiem līdz 0oC)<br>
                        Ārējais klientu displejs<br>
                        Svari<br>
                        Skeneris<br>
                        Čeku lentas
                    </div>

                    <p class="text-line" style="margin-top: 18px;"><strong>PAR HIBRĪDA KASES APARĀTU CENĀM JAUTĀJIET INDIVIDUĀLI</strong></p>
                    <p class="text-line" style="margin-top: 10px;"><strong>KOMPLEKTA CENĀ IETILPST:</strong></p>
                    <p class="text-line">kases aparāts, fiskālā atmiņa, apkalpošanas līgums, kases aparāta sagatavošana, pamatapmācība</p>
                </div>
            </div>

        </section>

    </main>
@endsection
