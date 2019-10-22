<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tienda;
use App\Producto;

class TiendaController extends Controller
{
    public $lang = 'es';

	function landingPage(){
		return view('welcome',[
			'tiendas'=>Tienda::get()
		]);
	}
    function getTienda($id){
    	return view('tienda',[
    		'id'=>$id,
    		'tienda'=>Tienda::where('id',$id)->first()
    	]);
    }
    function getGestion($id){
    	return view('gestion',[
    		'id'=>$id,
    		'tienda'=>Tienda::where('id',$id)->first(),
    		'productos'=>Producto::where('id_tienda',$id)->where('lang',$this->lang)->get()
   		]);
    }
    function goAnadir($id){
    	return view('anadir', ['tienda'=>Tienda::where('id',$id)->first()]);
    }
    function eliminarProducto($id, $pId){
    	Producto::where('id',$pId)->delete();
    	return $this->getGestion($id);
    }
    function cambiarStock($id, $pId){
    	$stock = Producto::where('id',$pId)->first()->stock;
    	Producto::where('id',$pId)->update(['stock'=> $stock == 0 ? 1 : 0]);
        return $this->getGestion($id);
    }
    function nuevoProducto($id, Request $request){
        $producto = new Producto;
        $producto->lang = $request->lang == 'en' ? 'en' : 'es';
        $producto->nombre = $request->nombre;
        $producto->stock = $request->stock == 'on' ? 1 : 0;
        $producto->imagen = $request->imagen;
        $producto->descripcion = $request->descripcion;
        $producto->id_tienda = $id;
        $producto->save();
        return $this->getGestion($id);
    }
}
