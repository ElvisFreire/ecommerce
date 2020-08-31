<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listaCompra;

class ListaController extends Controller
{

   
    public function aggitem()
    {
        $lista=new listaCompra();
        return $lista->aggItem($_GET['id'],$_GET['cant']);
    }
    public function brritem()
    {
        $lista=new listaCompra();
        return $lista->brrItem($_GET['id']);
    }
    public function verlista()
    {
        $lista=new listaCompra();
        return $lista->verLista();
    }
}
