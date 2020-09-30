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
 .modal-content{
    margin-top: 200px;
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

        <div id="tablaLista" class="table-responsive-md"></div>
        </div>
   




    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Confirme Identidad
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                
                </div>
                <div class="modal-body">
                    <form action="#" class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control" id="cedula" placeholder="Ingrese Cedúla">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Aceptar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
@endsection