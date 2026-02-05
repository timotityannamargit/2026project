@extends("welcome")

@push('pages')
    <link rel="stylesheet" href="{{ asset('css/kapcsolat.css') }}">
@endpush

@section('content')
<main class="kapcsolat-section" role="main" aria-labelledby="kapcsolat-heading">
    <div class="container">
        <aside class="left">
            <h1 id="kapcsolat-heading" class="huge-title">KAPCSOLAT</h1>

            <div class="content">
                <p>Ha bármi kérdése van, keressen minket bizalommal!</p>

                <span>📞 +36 30 123 4567</span><br>
                <span>⏰ H–P: 8:00 – 18:00</span>

                <p class="copyright">
                    &copy; {{ date('Y') }} RideXspot. Minden jog fenntartva.
                </p>
            </div>
        </aside>

        <figure class="right" aria-hidden="true">
        </figure>
    </div>
</main>
@endsection
