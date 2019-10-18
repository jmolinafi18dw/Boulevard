@extends('layouts.main')

@section('title')
	Gestión de tienda
@endsection

@section('css')
	<link rel="stylesheet" type="text/css" href="css/tienda.css">
@endsection

@section('nav')
@endsection

@section('content')
	<div class="container">
		<div id="filtro">
			<input type="text" name="Filtro">
			<button>Buscar</button>
			<button>Añadir Nuevo</button>
		</div>
		<table>
			<tr id="lineaTit">
				<td>Nombre</td>
				<td>Descripción</td>
				<td>Imagen</td>
				<td>Stock</td>
				<td>Enlace</td>
			</tr>
			<tr>
				<td>Skynni</td>
				<td>Pantalon hombre</td>
				<td>skynni.jpg</td>
				<td>Si</td>
				<td>----</td>
			</tr>
		</table>
	</div>
@endsection