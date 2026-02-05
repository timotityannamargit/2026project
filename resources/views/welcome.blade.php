<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RideXspot ZRT.</title>
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <script src="script.js"></script>
    @stack("pages")
</head>
<body>
@include("partials.menu")
<script>
    // Hamburger menü JS
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.querySelector('.nav-menu');

    hamburger.addEventListener('click', () => {
      navMenu.classList.toggle('open');
    });
  </script>
  @yield("content")

    @include("partials.footer")

</body>
</html>