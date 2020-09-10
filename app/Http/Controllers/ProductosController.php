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
        //se envia all por parametro
        //producto almacenaría todos los productos existentes en BD
        $producto=new producto();
        $producto=$producto->verProducto("all");
        
        return view('producto', compact('producto'));
    }
    
}
?>