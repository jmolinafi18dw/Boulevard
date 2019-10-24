@extends('layouts.main')

@section('title')
	{{$tienda->nombre}}
@endsection

@section('nav')
    <a href="{{url('t-'.$tienda->id.'/gestion')}}">Gestión</a>
@endsection

@section('content')
        <div id="main">

            <div id="tinfo">
                <div>
                    <p><strong>Descripción:&nbsp;</strong> {{$tienda->descripcion}}</p>
                    <p><strong>Localización en el Centro</strong>: {{$tienda->direccion}}</p>
                    <p><strong>Teléfono</strong>: {{$tienda->telefono}}</p>
                    <p><a href="{{$tienda->web}}"><img src="/img/explore.svg"></a></p>
                </div>
                <div>
                    <img src="/img/tiendas/{{$tienda->logo}}">
                </div>
            </div>
            
@endsection