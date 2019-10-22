@extends('layouts.main')

@section('title')
	{{$tienda->nombre}}
@endsection

@section('nav')
@endsection

@section('content')
	<div class="tarjeta">
        <div class="tienda-logo">
        	<img src="/img/tiendas/{{$tienda->logo}}">
        </div>
        <form action="" method="post" class="addForm">
        	@csrf
        	<select name="lang">
        		<option value="null" disabled selected>Elige un idioma</option>
        		<option value="en">Inglés</option>
        		<option value="es">Español</option>
        	</select>
        	<input type="text" placeholder="Nombre" name="nombre" required>
        	<textarea placeholder="Descripcion" name="descripcion"></textarea>
        	<div style="display: flex;flex-direction: row;">
        		<input type="checkbox" name="stock"><label for="stock">Stock</label>
        	</div>
        	<div style="display: flex; flex-direction: column;">
        		<label for="imagen">Suba aquí una imagen del producto:</label>
        		<input type="file" name="imagen" required>
        	</div>
        	<input type="submit" name="submit">
        </form>
    </div>
@endsection