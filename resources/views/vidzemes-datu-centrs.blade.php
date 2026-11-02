@extends('layouts.base')

@section('title', 'Vidzemes datu centrs - Norel IT')

@section('content')
    <!-- Main Content Area -->
    <main class="main-wrapper">

        <!-- Hero Section: Vidzemes datu centrs in center -->
        <section class="hero-row">
            <div class="hero-center">
                <h1 class="hero-title">Vidzemes datu centrs</h1>
                <div class="title-bar"></div>
            </div>
        </section>

        <!-- Main Body Text Section -->
        <section class="content-text">

            <p class="text-line" style="margin-bottom: 20px; line-height: 1.62;">
                Piedāvājam augstas veiktspējas datu centru, kas pilnībā nodrošināts kritisku datu uzglabāšanai un apstrādei.
            </p>

            <p class="text-line" style="margin-bottom: 20px; line-height: 1.62;">
                Izmantojot Vidzemes datu centru, Jūs nodrošinieties pret jebkāda veida iespēju pazaudēt uzņēmumam kritiskus datus. Sistēma darbojas pilnībā automātiski, tādā veidā izslēdzot jebkādu cilvēcisko faktoru, kas nozīmē iespēju kļūdīties, kā arī tiek ietaupīts darbinieka produktīvais darba laiks.
            </p>

            <p class="text-line" style="margin-bottom: 20px; line-height: 1.62;">
                Izmaksas ir izlīdzinātas un ievērojami zemākas kā līdzvērtīgam lokālam risinājumam, kas neatmaksājas pat 3 gadu laikā.
            </p>

            <p class="text-line" style="margin-bottom: 12px; line-height: 1.62;">
                Hostings – ir pakalpojumu klāsts, kas nodrošina uzņēmuma web resursu (mājas lapu, e-pasta, datu bāžu) ierīkošanu, uzturēšanu un apkalpošanu.
            </p>

            <ul class="service-list" style="margin-top: 6px; margin-bottom: 24px;">
                <li style="margin-bottom: 6px;">Domēnu reģistrācija un uzturēšana;</li>
                <li style="margin-bottom: 6px;">Web lapu izvietošana;</li>
                <li style="margin-bottom: 6px;">E-pasta pakalpojumi;</li>
                <li style="margin-bottom: 6px;">Virtuālie serveri.</li>
            </ul>

            <p class="text-line" style="margin-bottom: 16px; line-height: 1.62;">
                Hostings:
            </p>

            <div style="overflow-x: auto; margin-bottom: 32px;">
                <table style="border-collapse: collapse; font-family: 'Times New Roman', Times, serif; font-size: 14px; color: #000000; line-height: 1.5; min-width: 500px;">
                    <thead>
                        <tr>
                            <th style="padding: 4px 24px 4px 0; text-align: left; font-weight: normal;"></th>
                            <th style="padding: 4px 18px; text-align: left; font-weight: normal;">1.līmenis</th>
                            <th style="padding: 4px 18px; text-align: left; font-weight: normal;">2.līmenis</th>
                            <th style="padding: 4px 18px; text-align: left; font-weight: normal;">3.līmenis</th>
                            <th style="padding: 4px 18px; text-align: left; font-weight: normal;">4.līmenis</th>
                            <th style="padding: 4px 18px; text-align: left; font-weight: normal;">5.līmenis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 4px 24px 4px 0;">Cena, EUR/mēn. bez PVN</td>
                            <td style="padding: 4px 18px;">7.00</td>
                            <td style="padding: 4px 18px;">14.00</td>
                            <td style="padding: 4px 18px;">28.00</td>
                            <td style="padding: 4px 18px;">50.00</td>
                            <td style="padding: 4px 18px;">78.00</td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 24px 4px 0;">Web lapas apjoms</td>
                            <td style="padding: 4px 18px;">1GB</td>
                            <td style="padding: 4px 18px;">2GB</td>
                            <td style="padding: 4px 18px;">5GB</td>
                            <td style="padding: 4px 18px;">10GB</td>
                            <td style="padding: 4px 18px;">25GB</td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 24px 4px 0;">E-pasta adrešu skaits</td>
                            <td style="padding: 4px 18px;">10</td>
                            <td style="padding: 4px 18px;">20</td>
                            <td style="padding: 4px 18px;">50</td>
                            <td style="padding: 4px 18px;">100</td>
                            <td style="padding: 4px 18px;">250</td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 24px 4px 0;">Datu bāžu skaits</td>
                            <td style="padding: 4px 18px;">1</td>
                            <td style="padding: 4px 18px;">2</td>
                            <td style="padding: 4px 18px;">5</td>
                            <td style="padding: 4px 18px;">10</td>
                            <td style="padding: 4px 18px;">25</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-line" style="margin-top: 32px; margin-bottom: 16px; line-height: 1.62;">
                Virtuālie serveri - rezerves kopiju; WEB aplikāciju uzturēšanai:
            </p>

            <div style="overflow-x: auto; margin-bottom: 40px;">
                <table style="border-collapse: collapse; font-family: 'Times New Roman', Times, serif; font-size: 14px; color: #000000; line-height: 1.5; min-width: 500px;">
                    <thead>
                        <tr>
                            <th style="padding: 4px 24px 4px 0; text-align: left; font-weight: normal;"></th>
                            <th style="padding: 4px 18px; text-align: left; font-weight: normal;">1.līmenis</th>
                            <th style="padding: 4px 18px; text-align: left; font-weight: normal;">2.līmenis</th>
                            <th style="padding: 4px 18px; text-align: left; font-weight: normal;">3.līmenis</th>
                            <th style="padding: 4px 18px; text-align: left; font-weight: normal;">4.līmenis</th>
                            <th style="padding: 4px 18px; text-align: left; font-weight: normal;">5.līmenis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 4px 24px 4px 0;">Cena, EUR/mēn. bez PVN</td>
                            <td style="padding: 4px 18px;">21.00</td>
                            <td style="padding: 4px 18px;">28.00</td>
                            <td style="padding: 4px 18px;">50.00</td>
                            <td style="padding: 4px 18px;">71.00</td>
                            <td style="padding: 4px 18px;">114.00</td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 24px 4px 0;">Operatīvā atmiņa</td>
                            <td style="padding: 4px 18px;">256MB</td>
                            <td style="padding: 4px 18px;">512MB</td>
                            <td style="padding: 4px 18px;">1GB</td>
                            <td style="padding: 4px 18px;">2GB</td>
                            <td style="padding: 4px 18px;">4GB</td>
                        </tr>
                        <tr>
                            <td style="padding: 4px 24px 4px 0;">Diska vietas apjoms</td>
                            <td style="padding: 4px 18px;">3GB</td>
                            <td style="padding: 4px 18px;">4GB</td>
                            <td style="padding: 4px 18px;">7GB</td>
                            <td style="padding: 4px 18px;">12GB</td>
                            <td style="padding: 4px 18px;">20GB</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>

    </main>
@endsection

