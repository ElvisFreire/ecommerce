@extends('layouts.estruc')
@section('titulo', 'Mi carrito')
<link rel="stylesheet" href="/css/listaCompra.css">

@section('link')
<style>
  #tabla{
      border-radius: 5em;
      margin-bottom: 30px;
      padding: 1em;
      text-align: center;
  }
 
 
</style>
@endsection
@section('contenido')
@php
    
    $lista=\Session::get('carrito');
@endphp

<div class="container text-center bg-light" id="contenido">
   <br><br><br>
    <div class="cont-carrito">        
        <div class="page-header" id="texto" >
            <h1><i class="fas fa-shopping-cart"></i> Mi lista de compras</h1>
        </div>
        
        <br>

        <div id="tablaLista" class="table-responsive-md">
            
        </div>
        
        
    </div>
    <div id="compra-final" class="compra-final"></div>
    <br>
</div>

@endsection
@section('script')
@endsection