@extends('layouts.base')

@section('title', 'Kontakti - Norel IT')

@section('content')
    <!-- Main Content Area -->
    <main class="main-wrapper">

        <!-- Hero Section: Kontakti in center -->
        <section class="hero-row">
            <div class="hero-center">
                <h1 class="hero-title">Kontakti</h1>
                <div class="title-bar"></div>
            </div>
        </section>

        <!-- Contacts Section: Info on the left, Map on the right -->
        <section class="contacts-container">
            <div class="contacts-info">
                
                <div class="contact-block">
                    <h2 class="contact-heading">Biroja adrese</h2>
                    <p class="contact-text">Leona Paegles 47, Valmiera LV-4201 Latvija</p>
                </div>

                <div class="contact-block">
                    <h2 class="contact-heading">Tālrunis</h2>
                    <p class="contact-text">26127381</p>
                    <p class="contact-text">64281396</p>
                </div>

                <div class="contact-block">
                    <p class="contact-text"><strong class="contact-inline-heading">E-pasts</strong> <a href="mailto:serviss@norel-it.lv" class="contact-link" style="font-weight: 400; text-decoration: none;">serviss@norel-it.lv</a></p>
                </div>

                <div class="contact-block">
                    <h2 class="contact-heading">Twitter</h2>
                    <p class="contact-text"><a href="https://twitter.com/Norel_IT" target="_blank" rel="noopener" class="contact-link">@Norel_IT</a></p>
                </div>

                <div class="contact-block">
                    <h2 class="contact-heading">Facebook</h2>
                    <p class="contact-text"><a href="https://www.facebook.com/norelitsia/" target="_blank" rel="noopener" class="contact-link">SIA Norel IT</a></p>
                </div>

                <div class="contact-block">
                    <h2 class="contact-heading">Darba laiks</h2>
                    <div class="work-hours">
                        <p class="contact-text"><strong>P. - Pk. - 9:00 - 18:00</strong></p>
                        <p class="contact-text"><strong>S., Sv. - SLĒGTS</strong></p>
                    </div>
                </div>

                <div class="contact-block rekviziti-block">
                    <h2 class="contact-heading">Rekvizīti</h2>
                    <p class="contact-text">SIA Norel IT</p>
                    <p class="contact-text">NMK LV44103026269</p>
                    <p class="contact-text">Juridiskā adrese: J.Endzelīna 1, Valmiera, LV-4201</p>
                    <p class="contact-text">Piegādes adrese: Leona Paegles 47, Valmiera, LV-4201</p>
                    <p class="contact-text">AS Swedbank</p>
                    <p class="contact-text">Konts LV97HABA0551002674307</p>
                </div>

            </div>

            <div class="contacts-map">
                <a href="https://maps.google.com/?q=Leona+Paegles+47,+Valmiera+LV-4201" target="_blank" rel="noopener" class="map-link">
                    <img src="/images/kontakti-karte.png" alt="Norel IT atrašanās vieta kartē" class="contacts-map-img">
                </a>
            </div>
        </section>

    </main>
@endsection
