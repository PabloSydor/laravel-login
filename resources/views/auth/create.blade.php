@extends('plantilla')
@section('titulo', 'Create Account')

@section('contenido')

    <h1>Create Account</h1>

    @if (!empty($error))
        <div class="text-danger">
            {{ $error }}
        </div>
    @endif

    <form action="{{ route('acc.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user">Username:</label>
            <input type="text" class="form-control"
            name="user" id="user" />
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control"
            name="password" id="password" />
        </div>
        <input type="submit" name="enviar" value="Enviar"
        class="btn btn-dark btn-block">
    </form>
@endsection
