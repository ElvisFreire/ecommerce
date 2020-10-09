@extends('layouts.estruc')

@section('titulo', 'Home')


@section('link')

@endsection
<style>
    .cabezera {
        margin-left: 5%;
        margin-right: 5%;
        background-color: 232222;
        padding: 2%;
        color: white;
        border-radius: 24px 24px 0px 0px;
        text-align: center;
        border-bottom: solid;
        border-color: azure;
    }

    .contenidoform {
        margin-left: 5%;
        margin-right: 5%;
        padding: 3%;
        color: black;
        border-radius: 0px 0px 24px 24px;
        border: solid #232222;

    }

    .btn-primary {
        background-color: black;
    }

</style>

@section('contenido')


    <!-- Page Content -->
    <div class="container  bg-light" id="contenido">
        <br><br><br>
        <div class="carta">
            <div class="cabezera">
                <h2 class="title">Formulario </h2>
            </div>
            <div class="contenidoform">
                <form method="POST" action="form-val" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Factura</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">#</span>
                                </div>
                                <input type="number" class="form-control" name="factura" id="factura"
                            value="{{old('factura')}}" placeholder="Número de factura">
                            </div>
                            {!! $errors->first('factura', "<small style='color:red'>:message</small><br>") !!}
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">RUC o RISE</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">#</span>
                                </div>
                                <input type="number" class="form-control" name="ruc" id="ruc"
                                value="{{old('ruc')}}" placeholder="Número de RUC o RISE">
                            </div>
                            {!! $errors->first('ruc', "<small style='color:red'>:message</small><br>") !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="img">Foto de factura</label>
                            <input type="file" name="img" id="" value="{{old('img')}}">
                            {!! $errors->first('img', "<small style='color:red'>:message</small><br>") !!}
                        </div> 
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Datos del Cliente</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="nombre" id="nombre"
                                value="{{old('nombre')}}" placeholder="Nombres completos">
                            </div>
                            {!! $errors->first('nombre', "<small style='color:red'>:message</small><br>") !!}
                        </div>

                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" name="apellido" id="apellido"
                            value="{{old('apellido')}}" placeholder="Apellidos completos">
                            {!! $errors->first('apellido', "<small style='color:red'>:message</small><br>") !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="email" class="form-control" name="email" id="email"
                                value="{{old('email')}}" placeholder="Correo electrónico" aria-describedby="inputGroupPrepend">
                            </div>
                            {!! $errors->first('email', "<small style='color:red'>:message</small><br>") !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-home"></i></span>
                                </div>
                                <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad" value="{{old('ciudad')}}">
                            </div>
                            {!! $errors->first('ciudad', "<small style='color:red'>:message</small><br>") !!}
                        </div>

                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" name="provincia" id="provincia" placeholder="Provincia" value="{{old('provincia')}}">
                            {!! $errors->first('provincia', "<small style='color:red'>:message</small><br>") !!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" name="calle1" id="calle1"
                                value="{{old('calle1')}}" placeholder="Calle principal">
                            </div>
                            {!! $errors->first('calle1', "<small style='color:red'>:message</small><br>") !!}
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" name="calle2" id="calle2"
                                value="{{old('calle2')}}" placeholder="Calle secundaria">
                            </div>
                            {!! $errors->first('calle2', "<small style='color:red'>:message</small><br>") !!}
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-mobile-alt"></i></span>
                                </div>
                                <input type="number" class="form-control" name="celular" id="celular"
                                value="{{old('celular')}}" placeholder="Teléfono celular">
                            </div>
                            {!! $errors->first('celular', "<small style='color:red'>:message</small><br>") !!}
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-phone-alt"></i></span>
                                </div>
                                <input type="number" class="form-control" name="telefono" id="telefono"
                                value="{{old('telefono')}}" placeholder="Teléfono fijo">

                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Datos de negocio</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-store"></i></span>
                                </div>
                                <input type="text" class="form-control" name="negocio" id="negocio"
                                value="{{old('negocio')}}" placeholder="Nombre de Negocio">
                            </div>
                            {!! $errors->first('negocio', "<small style='color:red'>:message</small><br>") !!}
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" name="negociocalle1" id="negocioCalle1"
                                value="{{old('negociocalle1')}}" placeholder="Calle principal">
                            </div>
                            {!! $errors->first('negociocalle1', "<small style='color:red'>:message</small><br>") !!}
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" name="negociocalle2" id="negociocalle2"
                                value="{{old('negociocalle2')}}" placeholder="Calle secundaria">
                            </div>
                            {!! $errors->first('negociocalle2', "<small style='color:red'>:message</small><br>") !!}
                        </div>

                    </div>
                    <div class="form-rw">
                        <div class="colmd-4 mb-3">
                            <label for="validationCustom01"><b>Tipo de Cliente</b></label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipoCliente" id="gridRadios1"
                                 value="Mayorista">
                                <label class="form-check-label" for="gridRadios1">
                                    Mayorista
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipoCliente" id="gridRadios2"
                                 value="Covertura">
                                <label class="form-check-label" for="gridRadios2">
                                    Covertura
                                </label>
                            </div>
                            {!! $errors->first('tipoCliente', "<small style='color:red'>:message</small><br>") !!}
                        </div>

                    </div>


                    <button class="btn btn-dark" type="submit">Enviar datos</button>
                </form>
            </div>
        </div>
        <br>

    </div>
    <!-- /.container -->




@endsection


@section('script')

    <!-- menu-bar JavaScript -->
    <script src="/js/slick.min.js"></script>
    <script src="/js/menu-bar.js"></script>
   
@endsection
