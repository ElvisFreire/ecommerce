<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use DB;

class listaCompra 
{
    public $precio;
    public $nombre;
    public $img;
    public $sub;

    public $carrito;
    
    function __construct()
    {   
        if(!\Session::has('carrito'))
        {
            $carrito=array(
                'item'=>array(),
                'total'=>0
            );
            \Session::put(['carrito'=>$carrito]);
        }
        $this->carrito=\Session::get('carrito');
    }
    function establecerDato($id)
    {
        $producto=DB::select('select * from producto where idProducto= ?',[$id]); 
        foreach ($producto as $valor) {
            $this->nombre=$valor->nombre;
            $this->img=$valor->imagen;
            $this->precio=$valor->precio;
        }

      //  DB::update('update producto set visible = 0 where idProducto= ?',[$id]); 

    }

    function aggItem($id,$cant){
        $i=0; 
        $ban=false; 
        $carrito=$this->carrito;
        $this->establecerDato($id);
        $this->sub= (double) $this->precio *$cant;
        if($carrito['item']==NULL)
            array_push($carrito['item'],[
                'id'=>$id,
                'nombre'=>$this->nombre,
                'img'=>$this->img,
                'precio'=>$this->precio,
                'cantidad'=>$cant,
                'subtotal'=>$this->sub
                ]);
        else
        {
            if(in_array($id, array_combine(array_keys($carrito['item']), array_column($carrito['item'],'id'))))
            {
                $i=array_keys(array_combine(array_keys($carrito['item']), array_column($carrito['item'], 'id')),$id);
                $carrito['item'][$i[0]]['cantidad']=$cant;
                $carrito['item'][$i[0]]['subtotal']=$this->sub;
            }else
                array_push($carrito['item'],[
                    'id'=>$id,
                    'nombre'=>$this->nombre,
                    'img'=>$this->img,
                    'precio'=>$this->precio,
                    'cantidad'=>$cant,
                    'subtotal'=>$this->sub
                ]);                
        }
        $this->carrito=$carrito;
        $carrito['total']=$this->Total();
        $this->aggSession($carrito);
        
        return  $carrito['total'];      
    }
   

    function brrItem($id){
        $i=0;
        $carrito=$this->carrito;        
        $i=array_keys(array_combine(array_keys($carrito['item']), array_column($carrito['item'], 'id')),$id);
        unset($carrito['item'][$i[0]]);
        $this->carrito=$carrito;
        $carrito['total']=$this->Total();
        $this->aggSession($carrito);
        return $carrito['total'];

    }


    function edtItem(){

    }
    function brrLista(){
        session()->forget('orderId');
        
    }
    function aggSession($value){
        \Session::put('carrito', $value);
        $this->carrito=\Session::get('carrito');
    }

    function Total(){
        $carrito=$this->carrito;
        $sub=0;
        foreach ($carrito['item'] as $valor) 
        {
            $sub=$sub+$valor['subtotal'];
        }
        return $sub;
    }

    function verLista()
    {
        return $this->carrito;
    }
}


?>