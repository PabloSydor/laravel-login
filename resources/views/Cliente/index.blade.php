@extends('plantilla')

@section('titulo', 'Cliente')


@section('contenido')
<h1>Welcome {{auth()->user()->login}}</h1>
<p>Clientes</p>
@endsection

