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
        <form action="" method="post" class="addForm" enctype="multipart/form-data" onsubmit="return validar()">
        	@csrf
        	<select name="lang">
        		<option value="null" disabled selected>Elige un idioma</option>
        		<option value="en">Inglés</option>
        		<option value="es">Español</option>
        	</select>
        	<input type="text" placeholder="Nombre del producto" id="nombre" name="nombre">
        	<textarea placeholder="Descripcion" name="descripcion"></textarea>
        	<div style="display: flex;flex-direction: row;">
        		<input type="checkbox" name="stock"><label for="stock">Stock</label>
        	</div>
        	<div style="display: flex; flex-direction: column;">
        		<label for="imagen">Suba aquí una imagen del producto:</label>
                <!-- este input solo acepta ficheros de tipo imagen -->
        		<input type="file" id="imagen" name="imagen" accept="image/*">
        	</div>
        	<input type="submit" name="submit">
        </form>
    </div>
@endsection
<script type="text/javascript">
        function validar() {
        //obteniendo el valor que se puso en los campos del formulario
        valtexto = document.getElementById("nombre").value;
        valimg = document.getElementById("imagen").value;

        //la condición
        if (valtexto.length == 0 || /^\s+$/.test(valtexto) || valtexto.length == null) {
            alert("Introduce un nombre de producto");
            return false;
        }

        if (valimg.length == 0) {
            alert("Introduce una imagen de producto");
            return false;
        }
        return true;        
    }

</script>