<?php
?>
<header class="site-header">
  <div class="container header-inner">
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ asset('images/logo.png') }}" alt="Pakosha Autos" class="logo">
      <div class="brand-text">
        <div class="name">Pakosha Autos</div>
        <div class="tag">Onderdelen &amp; Service</div>
      </div>
    </a>

    <nav class="main-nav" aria-label="Hoofdmenu">
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/onderdelen') }}" class="active">Onderdelen</a></li>
        <li><a href="{{ url('/winkelmand') }}">Winkelmand</a></li>
      </ul>
    </nav>
  </div>
</header>