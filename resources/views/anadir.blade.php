@extends('layouts.main')

@section('title')
	{{$tienda->nombre}}
@endsection

@section('nav')
@endsection

@section('content')
        <form action="" method="post">
        	@csrf
        	<input type="text" name="nombre">
        	<input type="text" name="descripcion">
        	<input type="text" name="stock">
        	<input type="text" name="imagen">
        	<input type="text" name="enlace">
        </form>
@endsection