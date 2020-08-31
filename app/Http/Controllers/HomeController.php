<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view ('home');
    }
}
