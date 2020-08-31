<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class producto
{
    //
    public $idProducto;
    public $nommbre;
    public $descripcion;
    public $nombreCorto;
    public $precio;
    public $imagen;
    public $visible;
    public $contNeto;
    public $descuento;
    public $stok;
    public $creado;
    public $actualizado;
    public $producto;

    public function __construct() {
        
    }

    function aggProducto(){
        return 0;
    }
    function brrProducto(){
        return 0;
    }
    function edtProducto(){
        return 0;
    }
    function verProducto(){
        return $this->producto=DB::select('select * from producto');
        
    }

}
