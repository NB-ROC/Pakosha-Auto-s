<php ?>

<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Pakosha Autos</title>

  {{-- Vite (aanpassen als je geen Vite gebruikt) --}}
  @if (app()->environment('local'))
    @vite(['resources/css/app.css','resources/css/nav.css','resources/js/app.js'])
  @else
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
  @endif
</head>
<body>
  @include('nav.header')



  @include('nav.footer')
</body>
</html>
