@extends('layout')
@push('pages')
    <link rel="stylesheet" href="{{ asset('css/rolunk.css') }}">
@endpush
@section('content')


  <main class="about-section" role="main" aria-labelledby="rolunk-heading">
    <div class="container">
      <aside class="left">
        <h1 id="rolunk-heading" class="huge-title">RÓLUNK</h1>

        <div class="content">
          <p class="lead">Üdvözöljük oldalunkon!</p>

          <p>Ez az első jelentősebb projektünk, amelyen keresztül szeretnénk bemutatni szakmai elhivatottságunkat és értékrendünket. 

Az autóipar iránti szenvedélyünk gyermekkorunk óta meghatározó része életünknek. Folyamatosan fejlesztjük tudásunkat és szakmai felkészültségünket, 
jelenleg pedig a sikeres KRESZ-vizsga megszerzésén dolgozunk, hogy még magasabb szinten képviselhessük azt, amit szeretünk.
            <strong class="motto">„Ha a motor szíve ide kerül, nálunk dobog tovább.”</strong>
          </p>
        </div>
      </aside>

      <figure class="right" aria-hidden="true">
        <img src="./img/bmw_520_2022.jpg" alt="BMW" class="hero-car">
      </figure>
    </div>
</main>



</html>
@endsection