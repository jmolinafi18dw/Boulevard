@extends('layouts.main')

@section('title')
	{{$tienda->nombre}}
@endsection

@section('nav')
	<select name="idioma" id="idiomaSelect" onchange="window.location='{{url('t-'.$tienda->id.'/gestion/')}}/'+this.options[this.selectedIndex].value">
        <option value="es">ES</option>
        <option value="en">EN</option>
        <option value="eus">EUS</option>
    </select>
@endsection
@section('content')
        <div id="main">
        	<div id="selectedImage">
        		<img src=""/>
        	</div>
            <div id="tinfo">
                <div>
                    <p><strong class="trn" data-trn-key="Desc">Descripción:&nbsp;</strong> {{$tienda->descripcion}}</p>
                    <p><strong class="trn" data-trn-key="Loc">Local</strong>: {{$tienda->direccion}}</p>
                    <p><strong class="trn" data-trn-key="Tlf">Teléfono</strong>: {{$tienda->telefono}}</p>
                    <p><a href="{{$tienda->web}}">Web</a></p>
                </div>
                <div>
                    <img src="/img/tiendas/{{$tienda->logo}}">
                </div>
            </div>
            <div id="filtro">
				<input type="text" name="Filtro" id="filtroTexto">
				<button id="filtroSubmit" class="trn" data-trn-key="Buscar">Buscar</button>
				<button id="filtroClear" class="trn" data-trn-key="Limp">Limpiar</button>
				<a href="{{url('t-'.$id.'/anadir')}}" class="trn" id="addButton" data-trn-key="Añadir">Añadir Nuevo</a>
			</div>
			<div class="container">
				
				<table>
					<tr id="lineaTit">
						<td data-trn-key="Nombre">Nombre</td>
						<td data-trn-key="Desc">Descripción</td>
						<td>Stock</td>
						<td data-trn-key="Img">Imagen</td>
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

		$('#addButton').attr('href','{{url('t-'.$tienda->id.'/anadir/')}}/'+getLang());
        optionSelected = document.getElementById('idiomaSelect').querySelectorAll('option[value="'+getLang()+'"]');
        optionSelected[0].setAttribute('selected',true);
         
		// cuando cambia el valor del checkbox se hace submit del formulario, y se cambia su valor en la base de datos
		$('input[type="checkbox"]').change(function(){
			$(this).siblings('input[type="submit"]').click();
		});

		// estando en el input si pulsas enter hará click sobre le botón de buscar, llamando así a la función de debajo
		$('#filtroTexto').on('keypress',function(e) {
		    if(e.which == 13) $('#filtroSubmit').click()
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
					$('table').append('<tr id="noResults"><td colspan="5" align="center">No hay resultados correspondientes a <i>'+texto+'</i><br><small>Recuerde que la busqueda tiene en cuenta las mayusculas.</small></td></tr>')
				}
				$('#filtroTexto').val(null);
			}
		});
		$('#filtroClear').click(function(){
			$('tr').show();
			$('#noResults').hide();
			$('#filtroTexto').val(null);
		});

		// ver imagen en grande
		$('.imagenProducto').click(function(){
			$('#selectedImage > img').attr('src',$(this).attr('src'));
			$('#selectedImage').css('display','flex');
		});
		$('#selectedImage').click(function(e){
			if(e.target.nodeName.toLowerCase() != 'img')
				$(this).fadeOut(100);
		});
	</script>
@endsection