@extends('layouts.estruc')
@section('titulo', 'productos')


@section('link')
    <!-- stilos css  -->
    <link rel="stylesheet" href="/css/slick.min.css">
    <link rel="stylesheet" href="/css/slick-theme.min.css"><!-- stilos slick junto a js slick libreria para carrucel de categorias bar-menu  -->
    <link rel="stylesheet" href="/css/menu-bar.css">
    <link rel="stylesheet" href="/css/input-numero.css">
    <style>
        .cont-prod {
            padding-top: 80px;
            margin-left: 20px;
            height: 100%;
        }
        
       
      /*  .card-img-top {
            display: block;
            margin: auto;
            height: 200px;
            width: 150px;
            object-fit: cover;
        }*/

    </style>

@endsection
@section('contenido')
@php
    
    $lista=\Session::get('carrito');
@endphp
    <!-- contenido-->
    <div class="container  bg-light" id="contenido" >
        <div class='cont-prod'>


            <!-- inicio menu bar -->

            <div class="bar-menu">
                <h1 style="font-family: cursive"><b>Nombre Categoria</b></h1>
                <h1>Realiza tus compras!</h1>
                

            </div>
            <!-- fin menu bar -->


            <br>



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

            <br>
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
            <!-- /.row -->


        </div>
        <br>
    </div>

@endsection
@section('script')

    <!-- JavaScript -->
    <script src="/js/slick.min.js"></script>
    <script src="/js/menu-bar.js"></script>
    <script>
        window.onload = function() 
        {
            //esta parte de codigo lee la variable de seción al recargar la página, 
        //estableciendo la cantidad en cada item, y pintando el borde inferior verde
            @if($lista['item'] != NULL)
            @foreach($lista['item'] as $valor)
            document.getElementsByName("contador" + '{{$valor['id']}}')[0].value = '{{$valor['cantidad']}}';
            document.getElementById("cont" + '{{$valor['id']}}').style.borderBottom= 'rgb(29 181 2) 8px solid';
            @endforeach
            @endif

        }
    </script>

@endsection
