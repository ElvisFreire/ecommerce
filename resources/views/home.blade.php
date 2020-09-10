@extends('layouts.estruc')

@section('titulo', 'Home')


@section('link')
<link rel="stylesheet" href="/css/slick.min.css">
<link rel="stylesheet" href="/css/slick-theme.min.css">
<link rel="stylesheet" href="/css/menu-bar.css">
<link rel="stylesheet" href="/css/input-numero.css">
@endsection


@section('contenido')

@php
    $lista=\Session::get('carrito');
@endphp
<!-- Page Content -->
<div class="container  bg-light" id="contenido">

    <!-- Banner seccion -->

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://libresse-images.essity.com/images-c5/75/275075/optimized-AzureJPG2K/rutina-homepagebanner-1500x600px-jpg.jpg?w=1500&h=600&imPolicy=dynamic" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://media-exp1.licdn.com/dms/image/C4E1BAQHZSccfAqvueg/company-background_10000/0?e=2159024400&v=beta&t=jbwZRaM1xoNtCCjp8FsXID6uraIHmdNgwta7X0Mc0UM" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://ml9ggqyby6dm.i.optimole.com/lyA_5Pc-jS1aBbpo/w:auto/h:auto/q:90/https://ferjos.com.gt/wp-content/uploads/2020/05/cashitas-2.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://colcafe.s3.amazonaws.com/co-colcafe/wp-content/uploads/2020/05/22165634/05-22-BannerPostres1500x600-Colcafe-v1.png" alt="Third slide">
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
            <!-- ciclo que rrecorre un array donde contiene todos los productos BD-->
            
            @foreach ($producto as $item)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100" id="cont{{ $item->idProducto }}">
                        <img class="card-img-top" src="{{ $item->imagen }}" alt="">
                        <div class="card-body" >
                            <h4 class="card-title">
                                <a href="#">{{ $item->nombre }}</a>
                            </h4>
                            <h5><b>${{ $item->precio }}</b></h5>
                            <h6>CONT. NETO: {{ $item->contNeto }}</h6>
                            <p class="card-text">{{ $item->descripcion }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="handle-counter" id="handleCounter">
                                <button class="btn btn-primary" onClick=" aggitem(
                                    {{$item->idProducto}}
                                )">Agregar</button>
                                <button class="counter-minus btn btn-primary"
                                    onClick="activarContador(this.name, this.id)" id='menos'
                                    name="{{ $item->idProducto }}">-</button>
                                <input type="text" name="contador{{ $item->idProducto }}" value="1">
                                <button class="counter-plus btn btn-primary"
                                    onClick="activarContador(this.name, this.id)" name="{{ $item->idProducto }}"
                                    id="plus">+</button>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

            <!-- fin productos-->

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
    <script>
        $('.carousel').carousel({
        interval: 2500
        })
        //esta parte de codigo lee la variable de seción al recargar la página, 
        //estableciendo la cantidad en cada item, y pintando el borde inferior verde
        window.onload = function() 
        {
            @if($lista['item'] != NULL)
            @foreach($lista['item'] as $valor)
            document.getElementsByName("contador" + '{{$valor['id']}}')[0].value = '{{$valor['cantidad']}}';
            document.getElementById("cont" + '{{$valor['id']}}').style.borderBottom= 'rgb(29 181 2) 8px solid';
            @endforeach
            @endif

        }
    </script>
    @endsection