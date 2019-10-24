<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tienda;
use App\Producto;

class TiendaController extends Controller
{
    // redirige al landing page con las tiendas de la base de datos guardads en una variable
	function landingPage(){
		return view('welcome',[
			'tiendas'=>Tienda::get()
		]);
	}

    // redirige a la pantalla de una tienda especifica con los datos de ella
    function getTienda($id){
    	return view('tienda',[
    		'id'=>$id,
    		'tienda'=>Tienda::where('id',$id)->first()
    	]);
    }

    // redirige a la pantalla de gestión de una tienda especifica devolviendo datos sobre la tienda y sus productos (solo los del idioma actual)
    function getGestion($id){
    	return view('gestion',[
    		'id'=>$id,
    		'tienda'=>Tienda::where('id',$id)->first(),
    		'productos'=>Producto::where('id_tienda',$id)->where('lang','es')->get()
   		]);
    }

    // redirige a la pantalla de gestión y carga todos los datos necesarios
    function redirectGestion($id){
        return redirect('/t-'.$id.'/gestion');
    }

    // redirige a la pantalla donde se pueden añadir productos a la tienda
    function goAnadir($id){
    	return view('anadir', ['tienda'=>Tienda::where('id',$id)->first()]);
    }

    // elimina el producto especificado y redirecciona a la pantalla de gestión de la tienda correspondiente a ese producto
    function eliminarProducto($id, $pId){
    	Producto::where('id',$pId)->delete();
    	return $this->redirectGestion($id);
    }

    // si el stock actual es positivo, lo cambia a negativo, y viceversa.
    function cambiarStock($id, $pId){
    	$stock = Producto::where('id',$pId)->first()->stock;
    	Producto::where('id',$pId)->update(['stock'=> $stock == 0 ? 1 : 0]);
        return $this->redirectGestion($id);
    }

    // crea un nuevo producto para una tienda
    function nuevoProducto($id, Request $request){
        // coge la extensión de la subida
        $extensionImagen = $request->imagen->getClientOriginalExtension();

        // crea un producto
        $producto = new Producto;
        // le añade su idioma (si es diferente a 'en' pondrá 'es')
        $producto->lang = $request->lang == 'en' ? 'en' : 'es';
        $producto->nombre = $request->nombre;
        $producto->stock = $request->stock == 'on' ? 1 : 0;
        $producto->descripcion = $request->descripcion;
        $producto->extension = $extensionImagen;
        $producto->id_tienda = $id;
        // guarda el producto en la base de datos
        $producto->save();

        // almacena la imagen del producto en '/public/img/productos/' con el nombre 'producto-{id}.{extension}'
        $request->imagen->storeAs('/productos/', 'producto-'.$producto->id.'.'.$extensionImagen, 'productos');

        return $this->redirectGestion($id);
    }
}
