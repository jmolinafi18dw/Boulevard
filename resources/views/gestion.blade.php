@extends('layouts.main')

@section('title')
	{{$tienda->nombre}}
@endsection

@section('nav')
@endsection

@section('content')
        <div id="main">
            <div id="tinfo">
                <div>
                    <p><strong>Descripción:&nbsp;</strong> {{$tienda->descripcion}}</p>
                    <p><strong>Localización en el Centro</strong>: {{$tienda->direccion}}</p>
                    <p><strong>Teléfono</strong>: {{$tienda->telefono}}</p>
                    <p><a href="{{$tienda->web}}">Web</a></p>
                </div>
                <div>
                    <img src="/img/tiendas/{{$tienda->logo}}">
                </div>
            </div>
            <div id="filtro">
				<input type="text" name="Filtro" id="filtroTexto">
				<button id="filtroSubmit">Buscar</button>
				<button id="filtroClear">Limpiar</button>
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
							<td align="center">
								<form action="{{url('t-'.$tienda->id.'p-'.$producto->id.'/cambiarStock')}}" method="post">
									@csrf
									<input type="checkbox" name="stock"
										@if($producto->stock==1)
											checked
										@endif
									>
									<input style="display:none" type="submit" name="submit">
								</form>
							</td>
							<td align="center"><img src="/img/productos/producto-{{$producto->id}}.{{$producto->extension}}" class="imagenProducto"></td>
							<td align="center">
								<a href="{{url('t-'.$tienda->id.'p-'.$producto->id.'/eliminar')}}"><img src="/img/delete.svg"></a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
@endsection
@section('js')
	<script>
		// cuando cambia el valor del checkbox se hace submit del formulario, y se cambia su valor en la base de datos
		$('input[type="checkbox"]').change(function(){
			$(this).siblings('input[type="submit"]').click();
		});

		$('#filtroSubmit').click(function(){
			let texto = $('#filtroTexto').val();
			// muestra todos los tr por si alguno ha sido escondido
			$('tr').show();
			$('#noResults').hide();
			if(texto){
				// mira que cada "tr" (menos el primero porque es el título), no contenga el texto introducido en el input, y si no lo tiene lo esconde
				$('tr:not(:first-child):not(:contains('+texto+'))').hide();
				
				let visibleRows = $('tr').filter(function() {
				    return $(this).css('display') !== 'none';
				}).length;

				if(visibleRows === 1){
					$('table').append('<tr id="noResults"><td colspan="5" align="center">No hay resultados correspondientes a <i>'+texto+'</i></td></tr>')
				}
				$('#filtroTexto').val(null);
			}
		});
		$('#filtroClear').click(function(){
			$('tr').show();
			$('#noResults').hide();
			$('#filtroTexto').val(null);
		});
	</script>
@endsection