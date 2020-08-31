<!-- Navigation -->

@php
    $pvp=session('carrito');
    
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="/img/cruilov.png" alt=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contactenos">Contactenos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/comoComprar">Como comprar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/comoComprar">Paquetes- Combos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/miCompra">Mis compras</a>
                </li>
                <li class="nav-item">

                </li>

            </ul>
        </div>
        <i class="icono fas fa-shopping-cart" style="color:#0196dc; "></i>

    <p class="precio" id='car-precio'>$ {{number_format((float)$pvp['total'], 2, '.', '')}} </p>
    </div>
</nav>