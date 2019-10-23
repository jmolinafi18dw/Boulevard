<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tienda;
use App\Producto;

class MainController extends Controller
{
    // redirige al landing page con las tiendas de la base de datos guardads en una variable
	function landingPage($lang = 'es'){
		return view('welcome',[
			'tiendas'=>Tienda::get(),
            'lang'=>$lang
		]);
	}

    // redirige a la pantalla de una tienda especifica con los datos de ella
    function getTienda($id, $lang){
    	return view('tienda',[
    		'id'=>$id,
    		'tienda'=>Tienda::where('id',$id)->first(),
            'lang'=>$lang
    	]);
    }

    // redirige a la pantalla de gestión de una tienda especifica devolviendo datos sobre la tienda y sus productos (solo los del idioma actual)
    function getGestion($id, $lang){
    	return view('gestion',[
    		'id'=>$id,
    		'tienda'=>Tienda::where('id',$id)->first(),
    		'productos'=>Producto::where('id_tienda',$id)->where('lang',$lang)->get(),
            'lang'=>$lang
   		]);
    }

    // redirige a la pantalla de gestión y carga todos los datos necesarios
    function redirectGestion($id,$lang){
        return redirect('/t-'.$id.'/gestion/'.$lang);
    }

    // redirige a la pantalla donde se pueden añadir productos a la tienda
    function goAnadir($id, $lang){
    	return view('anadir', [
            'tienda'=>Tienda::where('id',$id)->first(),
            'lang'=>$lang
        ]);
    }

    // elimina el producto especificado y redirecciona a la pantalla de gestión de la tienda correspondiente a ese producto
    function eliminarProducto($id, $pId,$lang){
    	Producto::where('id',$pId)->delete();
    	return $this->redirectGestion($id,$lang);
    }

    // si el stock actual es positivo, lo cambia a negativo, y viceversa.
    function cambiarStock($id, $pId,$lang){
    	$stock = Producto::where('id',$pId)->first()->stock;
    	Producto::where('id',$pId)->update(['stock'=> $stock == 0 ? 1 : 0]);
        return $this->redirectGestion($id,$lang);
    }

    // crea un nuevo producto para una tienda
    function nuevoProducto($id, Request $request, $lang){
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

        return $this->redirectGestion($id,$lang);
    }
}
