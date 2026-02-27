@extends('layout')

@push('pages')
<link rel="stylesheet" href="{{ asset('css/bejelentkezes.css') }}">
@endpush

@section('content')

<section class="auth-section">
    <h1 class="huge-title">BEJELENTKEZÉS</h1>

    <div class="auth-content">

        @if (session('alert') === 'badpass')
            <div class="alert badpass">
                Hibás felhasználónév vagy jelszó!
            </div>
        @endif

        @if (session('alert') === 'success')
            <div class="alert success">
                Sikeres bejelentkezés!
            </div>
        @endif

        <h2 class="auth-title">Bejelentkezés</h2>

        <form action="{{ route('bejelentkezes.submit') }}" method="POST" class="auth-form">
            @csrf

            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Jelszó" required>

            <button type="submit">Belépés</button>
        </form>

    </div>
</section>

@endsection