<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class categoriaProducto
{
    public  $Categoria;

    public function __construct() {
        
    }
  
    function aggCategoria(){
        return 0;
    }
    function brrCategoria(){
        return 0;
    }
    function edtCategoria(){
        return 0;
    }
    public function verCategoria(){
        
        $this->Categoria=DB::select('select * from categorias');
    }


}
?>