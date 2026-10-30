@extends('layouts.base')

@section('title', 'Mūsu klienti - Norel IT')

@section('content')
    <!-- Main Content Area -->
    <main class="main-wrapper">

        <!-- Hero Section: Mūsu klienti in center -->
        <section class="hero-row">
            <div class="hero-center">
                <h1 class="hero-title">Mūsu klienti</h1>
                <div class="title-bar"></div>
            </div>
        </section>

        <!-- Clients Content Section -->
        <section class="clients-container">
            
            <p class="clients-intro">
                Nodrošinām kvalitatīvu datortehnikas un biroja tehnikas, kā arī kases aparātu apkalpošanu kopš 2002. gada visā Vidzemē. Pa šiem gadiem mūsu klientu skaits ir ievērojami pieaudzis un ar daudziem izveidojusies ilglaicīga sadarbība. Esam patiesi priecīgi un pateicīgi par mums izrādīto uzticību. Pieminēt visus klientus ir neiespējami, tāpēc pastāstīsim tikai par dažiem lielākajiem klientiem, kuriem esam palīdzējuši vai joprojām palīdzam sakārtot, uzturēt un attīstīt datorparku, un dažiem realizētajiem projektiem, ar kuriem īpaši lepojamies.
            </p>

            <div class="clients-list">

                <div class="client-row">
                    <div class="client-name">Valmieras pilsētas pašvaldība</div>
                    <div class="client-desc">
                        Jaunākās tehnoloģijas uzlabo iestāžu darbu un veicina pilsētas attīstību, tāpēc lepojamies par iespēju ar datortehniku, biroja tehniku, serveriem, interaktīvajām tāfelēm un multimediju iekārtām pilnībā aprīkot Valmieras pamatskolu - vienu no modernākajām pamatskolām Latvijā. Regulāri piegādājam datortehniku arī citām Valmieras pašvaldības iestādēm un skolām. Piedalījāmies projektos "Speciālistu piesaiste Valmieras pilsētas pašvaldībai" un "Pašvaldību speciālistu kapacitātes paaugstināšana būvniecības projektu sagatavošanā un īstenošanā", nodrošinot datortehnikas nomu.
                    </div>
                </div>

                <div class="client-row">
                    <div class="client-name">SIA Lode</div>
                    <div class="client-desc">
                        Modernam uzņēmumam ar ražotnēm un filiālēm dažādās vietās ir svarīga vienota datorsistēma un ātra informācijas aprite, tāpēc mēs tās savienojām virtuālajā lokālajā tīklā un ieviesām <em>backup</em> risinājumu. Lai izpētītu uzņēmuma iespējas un vajadzības, tika veikts programmatūras un datorparka audits. Atbilstoši uzņēmuma vajadzībām veicām datu pārraides tīkla izstrādi. Nodrošinām datortehnikas, serveru un biroja tehnikas piegādi un apkalpošanu atbilstoši uzņēmuma vajadzībām kopš 2005. gada.
                    </div>
                </div>

                <div class="client-row">
                    <div class="client-name">SIA Valmiermuižas alus</div>
                    <div class="client-desc">
                        Nodrošinām IT procesu uzturēšanu un pielāgošanu atbilstoši klienta straujajai izaugsmei. Kamēr aldari gatavo izcilo Valmiermuižas alu, mēs jau vairākus gadus rūpējamies, lai uzņēmuma datortehnika darbotos bez kļūmēm.
                    </div>
                </div>

                <div class="client-row">
                    <div class="client-name">SIA Suvenīru darbnīca</div>
                    <div class="client-desc">
                        Palīdzot attīstīties jaunam uzņēmumam, piegādājām datortehniku grafikas apstrādei un maketēšanai, drukas tehniku, etiķešu un nozīmīšu izgatavošanas, krūzīšu apdrukas iekārtas.
                    </div>
                </div>

                <div class="client-row">
                    <div class="client-name">LPKS „VAKS”</div>
                    <div class="client-desc">
                        Priecājamies sadarboties ar Vidzemes un Latgales lauksaimnieku uzņēmumu kopš 2005. gada. Nodrošinām datortehnikas un biroja tehnikas apkalpošanu, jaunas tehnikas piegādi atbilstoši uzņēmuma vajadzībām.
                    </div>
                </div>

                <div class="client-row">
                    <div class="client-name">Kocēnu novada dome</div>
                    <div class="client-desc">
                        Esam realizējuši vairākus vērienīgus datortehnikas piegādes un IT risinājumu projektus Kocēnu novadā: interaktīvo tāfeļu piegāde un uzstādīšana Vaidavas speciālai internātpamatskolai, video projekcijas sistēmas izbūve Dauguļu speciālajā internātpamatskolā, datortehnikas un multimediju aprīkojuma piegāde projekta "Multifunkcionāla jauniešu aktivitāšu centra Vaidavā" ietvaros un citi projekti.
                    </div>
                </div>

                <div class="client-row">
                    <div class="client-name">Vidzemes augstskola</div>
                    <div class="client-desc">
                        Regulāri sadarbojamies piegādājot un iznomājot datortehniku dažādu ES projektu un citu līgumu ietvaros. No Vidzemes augstskolas nāk mūsu labākie speciālisti un regulāri sniedzam iespēju mūsu uzņēmumā praktizēties topošajiem IT darbiniekiem.
                    </div>
                </div>

                <div class="client-row">
                    <div class="client-name">SIA Telia Latvija</div>
                    <div class="client-desc">
                        Pēc uzņēmuma pasūtījuma 2010. gadā izstrādājām datu pārraides tīklus Vidzemes muzejiem.
                    </div>
                </div>

                <div class="client-row">
                    <div class="client-name">Strenču novada dome</div>
                    <div class="client-desc">
                        Esam sekmīgi izpildījuši trīs lielus projektus par datortehnikas un multimediju aprīkojuma piegādi un uzstādīšanu Jērcēnmuižā, Strenču tautas interešu namā un Sedas kultūras namā.
                    </div>
                </div>

                <div class="client-row">
                    <div class="client-name">UNDP Projektu Birojs Latvijā</div>
                    <div class="client-desc">
                        No 2004. – 2007. gadam UNDP Projektu Birojs Latvijā sadarbībā ar Valsts SIA Vides projekti realizēja UNDP/GEF projektu „Ekonomiski efektīva koksnes atlikumu izmantošana Latvijas pašvaldību siltumapgādes sistēmās”. Piedalījāmies šajā projektā, a/s „Balvu enerģija” izstrādājot norēķinu sistēmu par patērēto siltumenerģiju un nodrošinājām uzņēmumu ar sistēmai nepieciešamo datortehniku. Papildus veicamajiem darbiem, sniedzām konsultācijas pie sistēmas funkcionālā izpildījuma.
                    </div>
                </div>

                <div class="client-row">
                    <div class="client-name">Biedrība "Latvijas Basketbola Savienība"</div>
                    <div class="client-desc">
                        Iznomājām datortehniku U-19 Pasaules čempionāta basketbolā vīriešiem un Eiropas čempionātam basketbolā sievietēm pasākuma vajadzībām.
                    </div>
                </div>

            </div>

        </section>

    </main>
@endsection
