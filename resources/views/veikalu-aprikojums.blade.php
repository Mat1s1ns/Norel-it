@extends('layouts.base')

@section('title', 'Veikalu aprīkojums - Norel IT')

@section('content')
    <!-- Main Content Area -->
    <main class="main-wrapper">

        <!-- Hero Section: Veikalu aprīkojums in center -->
        <section class="hero-row">
            <div class="hero-center">
                <h1 class="hero-title">Veikalu aprīkojums</h1>
                <div class="title-bar"></div>
            </div>
        </section>

        <!-- Centered Three-Equipment Banner Image -->
        <img src="/images/veikalu-aprikojums-banner.jpg" alt="Veikalu aprīkojums" class="page-banner">

        <!-- Three Equipment Columns -->
        <section class="columns-grid">

            <!-- Column 1: Kases aparāti un kases sistēmas -->
            <article class="column-box">
                <h2 class="service-heading">Kases aparāti un kases sistēmas</h2>
                <p class="col-text">
                    Nodrošinām kompleksu pakalpojumu klāstu: tehnikas tirdzniecību, programmēšanu, apmācību, apkalpošanu un, nepieciešamības gadījumā, arī remontu.
                </p>
                <p class="col-text" style="margin-top: 14px;">
                    Palīdzēsim izvēlēties tieši jūsu biznesam piemērotāko kases aparāta, hibrīda kases aparāta vai kases sistēmas modeli.
                </p>
                <p class="col-text" style="margin-top: 14px;">
                    Piedāvājam kases aparātu nomu, kas īpaši aktuāli vasaras sezonā.
                </p>
            </article>

            <!-- Column 2: Apkalpošana -->
            <article class="column-box">
                <h2 class="service-heading">Apkalpošana</h2>
                <p class="col-text">
                    Ja nepieciešama kompetenta, kvalitatīva un LR normatīvajiem aktiem atbilstoša kases aparātu un kases sistēmu apkalpošana, tad droši vērsieties pie mums. Esam kases aparātu apkalpojošais dienests kopš 2002. gada un nodrošinām servisu visā Vidzemē.
                </p>
                <p class="col-text" style="margin-top: 14px; margin-bottom: 8px;">
                    Piedāvājam:
                </p>
                <ul class="service-list">
                    <li>kases aparātu un kases sistēmu apkalpošanas līgumu</li>
                    <li>telefoniskas konsultācijas saviem klientiem</li>
                    <li>iespēju robežās - attālinātu pieslēgšanos kases sistēmai ātrai problēmu novēršanai</li>
                </ul>
            </article>

            <!-- Column 3: Cita tirdzniecības tehnika -->
            <article class="column-box">
                <h2 class="service-heading">Cita tirdzniecības tehnika</h2>
                <p class="col-text">
                    Veiksmīgai un ērtai tirdzniecības procesa nodrošināšanai bieži ir vajadzīgs papildus aprīkojums.
                </p>
                <p class="col-text" style="margin-top: 14px; margin-bottom: 8px;">
                    Piedāvājumā:
                </p>
                <ul class="service-list">
                    <li>dažādu veidu svari produkcijas svēršanai</li>
                    <li>vadu, bezvadu, stacionārie skeneri</li>
                    <li>eiro valūtas detektori</li>
                    <li>dažādu veidu čeku lentas un uzlīmju materiāls</li>
                    <li>dažādu veidu uzlīmju printeri</li>
                    <li>datu termināļi pasūtījumu veikšanai un inventarizācijai</li>
                    <li>datori un tīkla produkti</li>
                    <li>Tildes Jumis, Ankravs, 4Hotel, 4Restaurant programmas</li>
                </ul>
                <p class="col-text" style="margin-top: 22px;">
                    Ja veikalā uz vietas nav jūsu vajadzībām atbilstoša prece, mēs to varam pasūtīt un piegādāt 2 - 14 darba dienu laikā, ja prece ir noliktavās.
                </p>
            </article>

        </section>

    </main>
@endsection
