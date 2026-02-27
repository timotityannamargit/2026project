@extends("layout")

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/partnereink.css') }}">
@endpush

@section('content')

<main class="partnereink-section" role="main" aria-labelledby="partnereink-heading">
    <div class="container">
        <aside class="left">
            <h1 id="partnereink-heading" class="huge-title">TOVÁBBI PARTNEREINK</h1>

            <div class="content">
                <p>Büszkék vagyunk arra, hogy együtt dolgozhatunk az alábbi partnereinkkel:</p>

                <table class="partner-table">
    <thead>
        <tr>
            <th>Partner neve</th>
            <th>Tevékenység</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>🚴‍♂️ SpeedBike Szerviz</td>
            <td>Kerékpár szerviz és karbantartás</td>
        </tr>
        <tr>
            <td>🔧 ProRide Alkatrész Kft.</td>
            <td>Alkatrész forgalmazás</td>
        </tr>
        <tr>
            <td>🏍️ MotoX Hungary</td>
            <td>Motorkerékpár kereskedelem</td>
        </tr>
        <tr>
            <td>🛞 UrbanWheel Shop</td>
            <td>Kerekek és gumiabroncsok</td>
        </tr>
        <tr>
            <td>⚡ E-Motion Elektromos Járművek</td>
            <td>Elektromos jármű értékesítés</td>
        </tr>
    </tbody>
</table>

                

                
            </div>
        </aside>

        <figure class="right" aria-hidden="true">
            <!-- Ide kerülhet partner logókat tartalmazó kép vagy grafika -->
        </figure>
    </div>
</main>
@endsection
