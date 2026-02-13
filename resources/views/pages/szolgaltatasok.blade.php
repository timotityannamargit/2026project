@extends("layout")
@push('pages')
    <link rel="stylesheet" href="{{ asset('css/szolgaltatasok.css') }}">
@endpush
@section('content')
    <main class="main">
        <section class="hero">
            <div class="hero-inner wrap">
                <div class="hero-text">
                    <h1>Ott kezdődik az autód szíve, ahol a mi munkánk indul.</h1>
                    <p class="lead">Ismerd meg szervizünk szolgáltatásait — megbízható, precíz és professzionális ellátás amerikai izomautókhoz és egyéb járművekhez.</p>
                </div>
                <div class="hero-visual" aria-hidden="true">
                </div>
            </div>
        </section>

        <section class="cards wrap" id="szolgaltatasok">
            <h2 class="section-title">Szerviz szolgáltatások</h2>
            <div class="grid">
                <article class="card">
                    <div class="card-icon"><svg>
                            <use href="#icon-engine"></use>
                        </svg></div>
                    <h3>Motor & hajtás</h3>
                    <ul>
                        <li>Teljes körű motorvizsgálat</li>
                        <li>Szívó- és kipufogórendszer javítás</li>
                        <li>Tuning & teljesítményhangolás</li>
                    </ul>
                </article>

                <article class="card">
                    <div class="card-icon"><svg>
                            <use href="#icon-brake"></use>
                        </svg></div>
                    <h3>Fék & futómű</h3>
                    <ul>
                        <li>Fékbetét és tárcsa csere</li>
                        <li>Lengéscsillapító és futómű beállítás</li>
                        <li>Kerekek, centrírozás</li>
                    </ul>
                </article>

                <article class="card">
                    <div class="card-icon"><svg>
                            <use href="#icon-diagnostic"></use>
                        </svg></div>
                    <h3>Diagnosztika</h3>
                    <ul>
                        <li>OBD hibakód olvasás</li>
                        <li>Elektronikai hibakeresés (ABS, ESP stb.)</li>
                        <li>Check engine, szenzorok vizsgálata</li>
                    </ul>
                </article>

                <article class="card">
                    <div class="card-icon"><svg>
                            <use href="#icon-battery"></use>
                        </svg></div>
                    <h3>Elektromos rendszerek</h3>
                    <ul>
                        <li>Akkumulátor csere és töltés</li>
                        <li>Indítási problémák javítása</li>
                        <li>Elektromos diagnosztika</li>
                    </ul>
                </article>

                <article class="card">
                    <div class="card-icon"><svg>
                            <use href="#icon-wrench"></use>
                        </svg></div>
                    <h3>Tuning & kiegészítők</h3>
                    <ul>
                        <li>Személyre szabott tuning megoldások</li>
                        <li>Alkatrész beszerzés és beszerelés</li>
                        <li>Általános karbantartás</li>
                    </ul>
                </article>

                <article class="card">
                    <div class="card-icon"><svg>
                            <use href="#icon-wheel"></use>
                        </svg></div>
                    <h3>Gumi & kerekek</h3>
                    <ul>
                        <li>Gumi csere, centrírozás</li>
                        <li>Kerék kiegyensúlyozás</li>
                        <li>Pick-up / SUV kerekek kezelése</li>
                    </ul>
                </article>
            </div>
        </section>

        <!-- Hibajelenségek (ikonos lista) -->
        <section class="issues wrap">
            <h2 class="section-title">Gyakori hibajelenségek</h2>
            <div class="issues-grid">
                <div class="issue">
                    <svg class="issue-icon">
                        <use href="#icon-brake"></use>
                    </svg>
                    <p>Fék kopás, zajok és fékhatás csökkenés</p>
                </div>
                <div class="issue">
                    <svg class="issue-icon">
                        <use href="#icon-wrench"></use>
                    </svg>
                    <p>Kuplung csúszik vagy recseg</p>
                </div>
                <div class="issue">
                    <svg class="issue-icon">
                        <use href="#icon-engine"></use>
                    </svg>
                    <p>Motor egyenetlen járás, túlmelegedés</p>
                </div>
                <div class="issue">
                    <svg class="issue-icon">
                        <use href="#icon-diagnostic"></use>
                    </svg>
                    <p>Check engine világít / hibakódok</p>
                </div>
            </div>
        </section>

        <section class="contact wrap">
            <h2 class="section-title">Látogass el hozzánk</h2>
            <p class="muted">Cím: Budapest — időpont egyeztetés a honlapon keresztül.</p>
            <a class="cta" href="#">Időpont foglalás</a>
        </section>
    </main>


@endsection