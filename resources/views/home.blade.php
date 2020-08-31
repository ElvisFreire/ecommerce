@extends('layouts.estruc')

@section('titulo', 'Home')


@section('link')
<link rel="stylesheet" href="/css/slick.min.css">
<link rel="stylesheet" href="/css/slick-theme.min.css">
<link rel="stylesheet" href="/css/menu-bar.css">
<link rel="stylesheet" href="/css/input-numero.css">
@endsection


@section('contenido')

<!-- Page Content -->
<div class="container  bg-light" id="contenido">

    <!-- Banner seccion -->

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/1150x500" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/1150x500" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/1150x500" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- inicio menu bar -->

    <div class="bar-menu">
        <h1>Realiza tus compras!</h1>
        <div class="logo-slider">
            
             
            @for($i = 1; $i <= 3; $i++) 
            <?php
               echo " <div class='item'  id=",$i,"> <a href='/producto' ><img src='http://placehold.it/400x200' ></a></div>"
            ?> 
            @endfor
                    
                
            
    
        </div>
        </div>
        <!-- fin menu bar -->

        <!-- inicio buscador -->

        <div class="contenedor-buscador">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Busca el producto que deseas!">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        <!-- fin buscador -->

        <!-- productos-->

        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Nombre producto</a>
                        </h4>
                        <h5><b>$24.99</b></h5>
                        <h6>CONT. NETO: 150g</h6>
                        <p class="card-text">Aqui va una pequeña descripcion del producto</p>
                    </div>
                    <div class="card-footer">
                        <div class="handle-counter" id="handleCounter">
                            <a href="#" class="btn btn-primary">Agregar</a>
                            <button class="counter-minus btn btn-primary" onClick="activarContador(this.name, this.id)"
                                id='menos' name="1">-</button>
                            <input type="text" name="contador1" value="1">
                            <button class="counter-plus btn btn-primary" onClick="activarContador(this.name, this.id)"
                                name="1" id="plus">+</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Nombre producto</a>
                        </h4>
                        <h5><b>$24.99</b></h5>
                        <h6>CONT. NETO: 150g</h6>
                        <p class="card-text">Aqui va una pequeña descripcion del producto</p>
                    </div>
                    <div class="card-footer">
                        <div class="handle-counter" id="handleCounter">
                            <a href="#" class="btn btn-primary">Agregar</a>
                            <button class="counter-minus btn btn-primary" onClick="activarContador(this.name, this.id)"
                                id='menos' name="2">-</button>
                            <input type="text" name="contador2" value="1">
                            <button class="counter-plus btn btn-primary" onClick="activarContador(this.name, this.id)"
                                name="2" id="plus">+</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Nombre producto</a>
                        </h4>
                        <h5><b>$24.99</b></h5>
                        <h6>CONT. NETO: 150g</h6>
                        <p class="card-text">Aqui va una pequeña descripcion del producto</p>
                    </div>
                    <div class="card-footer">
                        <div class="handle-counter" id="handleCounter">
                            <a href="#" class="btn btn-primary">Agregar</a>
                            <button class="counter-minus btn btn-primary" onClick="activarContador(this.name, this.id)"
                                id='menos' name="3">-</button>
                            <input type="text" name="contador3" value="1">
                            <button class="counter-plus btn btn-primary" onClick="activarContador(this.name, this.id)"
                                name="3" id="plus">+</button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- fin productos-->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->




    @endsection


    @section('script')

    <!-- menu-bar JavaScript -->
    <script src="/js/slick.min.js"></script>
    <script src="/js/menu-bar.js"></script>

    @endsection