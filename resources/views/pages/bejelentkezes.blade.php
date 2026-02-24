@extends('layout')
@push('pages')
<link rel="stylesheet" href="{{ asset('css/bejelentkezes.css') }}">
@endpush
@section('content')

@if (session('alert') === 'badpass')
    <div class="alert badpass">
        <h3>Hibás felhasználónév vagy jelszó!</h3>
    </div>
@endif

@if (session('alert') === 'success')
    <div class="alert success">
        <h3>Sikeres bejelentkezés!</h3>
    </div>
@endif

<h1>Bejelentkezés</h1>
<form action="{{ route('bejelentkezes.submit') }}" method="POST">
    @csrf

    <input type="email" name="email" placeholder="E-mail:" required>

    <input type="password" name="password" placeholder="Jelszó:" required>

    <button type="submit" name="login">Belépés</button>
</form>

@endsection



