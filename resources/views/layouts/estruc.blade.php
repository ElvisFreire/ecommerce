<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('titulo') - CRuilova</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/pading.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/buscador.css">

    <!-- Alert flotantes Toastr -->
    <link href="/css/toastr.min.css" rel="stylesheet">
    @yield('link')


</head>

<body>

    @include('layouts.nav')

    @yield('contenido')




    <!-- Footer -->
    <footer class="py-5">
        <div>
            <i class="icono fab fa-facebook-square"></i>
            <i class="icono fab fa-instagram"></i>
            <i class="icono fab fa-twitter-square"></i>
        </div>
        <p class="text-black">visitanos en nuestras redes sociales!</p>

        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- iconos -->
    <script src="\fontawesome\js\all.js"></script>
    <!-- Alert flotantes Toastr -->
    <script src="/js/toastr.min.js"></script>
    <!-- JavaScript de items carrito -->
    <script src="/js/carrito.js"></script>
    @yield('script')


</body>

</html>