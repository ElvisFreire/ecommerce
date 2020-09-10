<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;

class HomeController extends Controller
{
    public function index()
    {
        if(!\Session::has('carrito'))
        {
            $carrito=array(
                'item'=>array(),
                'total'=>0
            );
            \Session::put(['carrito'=>$carrito]);
        }
        $producto=new producto();
        $producto=$producto->verProducto("3");

        return view ('home',compact('producto'));   
     }
}
