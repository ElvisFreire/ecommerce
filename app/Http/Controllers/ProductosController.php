<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$producto=Categoria::imprimir();
        $producto=new producto();
        $producto=$producto->verProducto();
        
        return view('producto', compact('producto'));
    }
    
}
?>