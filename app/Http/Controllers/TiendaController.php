<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TiendaController extends Controller
{
	function landingPage(){
		return view('welcome',[
			'tiendas'=>DB::select('select * from tiendas')
		]);
	}
    function getTienda($id){
    	return view('tienda',[
    		'id'=>$id,
    		'tienda'=>DB::select('select * from tiendas where id = '.$id)[0]
    	]);
    }
    function getGestion($id){
    	return view('gestion',[
    		'id'=>$id,
    		'tienda'=>DB::select('select * from tiendas where id = '.$id)[0],
    		'productos'=>DB::select('select * from productos where id_tienda = '.$id)
   		]);
    }
    function goAnadir($id){
    	return view('anadir', ['tienda'=>DB::select('select * from tiendas where id = '.$id)[0]]);
    }
}
