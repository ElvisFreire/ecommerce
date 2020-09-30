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
                <h2 class="title">Event Registration Form</h2>
            </div>
            <div class="contenidoform">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Factura</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">#</span>
                                </div>
                                <input type="number" class="form-control" id="factura" placeholder="Número de factura"
                                    required>
                                <div class="invalid-feedback">
                                    Porfavor ingrese número de factura.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">RUC o RISE</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">#</span>
                                </div>
                                <input type="number" class="form-control" id="ruc" placeholder="Número de RUC o RISE"
                                    required>
                                <div class="invalid-feedback">
                                    Porfavor ingrese número de RUC o RISE.
                                </div>
                            </div>
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
                                <input type="text" class="form-control" id="nombre" placeholder="Nombres completos"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="apellido" placeholder="Apellidos completos"
                                required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="text" class="form-control" id="email" placeholder="Correo electrónico"
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Porfavor ingrese su correo.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-home"></i></span>
                                </div>
                                <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" required>
                                <div class="invalid-feedback">
                                    Porfavor ingrese su ciudad.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="provincia" placeholder="Provincia" required>
                            <div class="invalid-feedback">
                                Porfavor ingrese su Provincia.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" id="calle1" placeholder="Calle principal" required>
                                <div class="invalid-feedback">
                                    Porfavor ingrese dirección.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" id="calle2" placeholder="Calle secundaria" required>
                                <div class="invalid-feedback">
                                    Porfavor ingrese dirección.
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-phone-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" id="telefono" placeholder="Teléfono fijo" required>
                                <div class="invalid-feedback">
                                    Porfavor ingrese dirección.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-mobile-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" id="celular" placeholder="Teléfono celular"
                                    required>
                                <div class="invalid-feedback">
                                    Porfavor ingrese dirección.
                                </div>
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
                                <input type="text" class="form-control" id="negocio" placeholder="Nombre de Negocio"
                                    required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" id="calle1" placeholder="Calle principal" required>
                                <div class="invalid-feedback">
                                    Porfavor ingrese dirección.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                            class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" id="calle2" placeholder="Calle secundaria" required>
                                <div class="invalid-feedback">
                                    Porfavor ingrese dirección.
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-rw">
                        <div class="colmd-4 mb-3">
                            <label for="validationCustom01"><b>Tipo de Cliente</b></label>
                        </div>
                        <div class="col-md-8 mb-3">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                    class="custom-control-input" required>
                                <label class="custom-control-label" for="customRadioInline1">Mayorista</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                    class="custom-control-input" required>
                                <label class="custom-control-label" for="customRadioInline2">Covertura</label>
                            </div>
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
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

    </script>
@endsection
