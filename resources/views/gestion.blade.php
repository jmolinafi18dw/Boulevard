@extends('layouts.main')

@section('title')
	{{$tienda->nombre}}
@endsection

@section('nav')
@endsection

@section('content')
        <div id="main">
            <div id="info">
                <img  class="logo-tienda" src="/img/tiendas/{{$tienda->logo}}">
                <p><strong>Descripción:&nbsp;</strong> {{$tienda->descripcion}}</p>
                <p><strong>Localización en el Centro</strong>: {{$tienda->direccion}}</p>
                <p><strong>Teléfono</strong>: {{$tienda->telefono}}</p>
                <p><a href="{{$tienda->web}}">Web</a></p>
            </div>
            <div id="filtro">
				<input type="text" name="Filtro">
				<button>Buscar</button>
				<a href="{{url('t-'.$id.'/anadir')}}">Añadir Nuevo</a>
			</div>
			<div class="container">
				
				<table>
					<tr id="lineaTit">
						<td>Nombre</td>
						<td>Descripción</td>
						<td>Stock</td>
						<td>Imagen</td>
						<td></td>
					</tr>
					@foreach($productos as $producto)
						<tr>
							<td>{{$producto->nombre}}</td>
							<td>{{$producto->descripcion}}</td>
							<td>
								@if($producto->stock==0)
									No disponible
								@else
									Disponible
								@endif
							</td>
							<td><img src="/img/productos/{{$producto->imagen}}"></td>
						</tr>
					@endforeach
				</table>
			</div>
@endsection