<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SorteoController extends Controller
{
    public function addForm()
    {
        request()->validate([
            'factura'=>'required',
            'ruc'=>'required',
            'img'=>'required',
            'nombre'=>'required',
            'apellido'=>'required',
            'email'=>'required|email',
            'ciudad'=>'required',
            'provincia'=>'required',
            'celular'=>'required',
            'calle1'=>'required',
            'calle2'=>'required',
            'negocio'=>'required',
            'negociocalle1'=>'required',
            'negociocalle2'=>'required',
            'tipoCliente'=>'required',


        ]);

        return request();

    }
}
