@extends('layouts.main')

@section('title')
	{{$tienda->nombre}}
@endsection

@section('nav')
    <a href="" id="gestionButton" class="trn" data-trn-key="Gest">Gestión</a>
    <select name="idioma" id="idiomaSelect" onchange="window.location='{{url('t-'.$tienda->id)}}/'+this.options[this.selectedIndex].value">
        <option value="es">ES</option>
        <option value="en">EN</option>
        <option value="eus">EUS</option>
    </select>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
            $('#gestionButton').attr('href','{{url('t-'.$tienda->id.'/gestion/')}}/'+getLang());
            optionSelected = document.getElementById('idiomaSelect').querySelectorAll('option[value="'+getLang()+'"]');
            optionSelected[0].setAttribute('selected',true);
        })
    </script>
@endsection

@section('content')
        <div id="main">

            <div id="tinfo">
                <div>
                    <p><strong class="trn" data-trn-key="Desc">Descripción:&nbsp;</strong> {{$tienda->descripcion}}</p>
                    <p><strong class="trn" data-trn-key="Loc">Local</strong>: {{$tienda->direccion}}</p>
                    <p><strong class="trn" data-trn-key="Tlf">Teléfono</strong>: {{$tienda->telefono}}</p>
                    <p><a href="{{$tienda->web}}"><img src="/img/explore.svg"></a></p>
                </div>
                <div>
                    <img src="/img/tiendas/{{$tienda->logo}}">
                </div>
            </div>
            
@endsection