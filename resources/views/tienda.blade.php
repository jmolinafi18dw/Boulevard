@extends('layouts.main')

@section('title')
	{{$tienda->nombre}}
@endsection

@section('nav')
    <a href="{{url('t-'.$tienda->id.'/gestion/')}}" class="trn" data-trn-key="Gest">Gestión</a>
@endsection

@section('content')
        <div id="main">

            <div id="tinfo">
                <div>
                    <p><strong class="trn" data-trn-key="Desc">Descripción:&nbsp;</strong> {{$tienda->descripcion}}</p>
                    <p><strong class="trn" data-trn-key="Loc">Localización en el Centro</strong>: {{$tienda->direccion}}</p>
                    <p><strong class="trn" data-trn-key="Tlf">Teléfono</strong>: {{$tienda->telefono}}</p>
                    <p><a href="{{$tienda->web}}">Web</a></p>
                </div>
                <div>
                    <img src="/img/tiendas/{{$tienda->logo}}">
                </div>
            </div>
            
@endsection