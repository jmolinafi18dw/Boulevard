@extends('layouts.main')

@section('title')
	{{$tienda->nombre}}
@endsection

@section('nav')
    <a href="{{url('t-'.$tienda->id.'/gestion')}}">Gestion</a>
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
            <section>
                <div id="tiendas">
                    <div class="tienda">
                        <img src="https://us.media.fashionnetwork.com/m/7802/ea72/aad3/fa3e/fb95/394f/fb88/db44/f598/7cc8/7cc8.jpg">
                    </div>
                    <div class="tienda">
                        <img src="https://media.fashionnetwork.com/m/3633/9366/530f/b931/4ecb/07d7/0d5d/aff2/d466/5cfe/5cfe.png">
                    </div>
                    <div class="tienda">
                        <img src="https://algo-bonito.com/blog/wp-content/uploads/2018/09/animal-print-algo-bonito-2.jpg">
                    </div>
                    <div class="tienda">
                        <img src="https://construccionesardanaz.com/wp-content/uploads/2016/12/Algo-bonito_Pamplona_Ardanaz002.jpg">
                    </div>
                </div>
            </section>
@endsection