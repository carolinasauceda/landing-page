<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700;900&display=swap" rel="stylesheet">
    
</head>
<body>
<nav class="navbar navbar-light navbar-expand-sm">
  <a class="navbar-brand" href="/">
    <img src="..." width="30" height="30" alt="logo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-5">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-5">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
            <a class="nav-link" href="/">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">Nosotros</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="/" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/">Arrendamiento</a>
          <a class="dropdown-item" href="/">Estrena tu auto</a>
        </div>
      </li>
        <li class="nav-item">
            <a class="nav-link" href="/">Calculadora de pagos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">Contacto</a>
        </li>
    </ul>
  </div>
</nav>
    @yield('content')
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>