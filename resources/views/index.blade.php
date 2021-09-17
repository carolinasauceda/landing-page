<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <a class="nav-link dropdown-toggle" href="#" id="drop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="drop">
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
    <section class="hero-1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                    <div class="col-lg-6 col-10 text-center">
                        <h1>¿Necesitas un auto? <br><span>Nosotros te ayudamos</span></h1>
                        <p>Nuevos modelos a precios accesibles</p>
                        <div class="d-flex justify-content-around">
                            <a class="bt-primary" href="/ponte-en-contacto">Arrendamiento</a>
                            <a class="bt-secondary" href="/ponte-en-contacto">Me interesa comprar</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-10">
                        <img class="img-fluid" src="{{ asset('img/camioneta-arrendamiento.png') }}" alt="">
                        <div class="square"></div>
                    </div>
            </div>
        </div>
    </section>
    
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>