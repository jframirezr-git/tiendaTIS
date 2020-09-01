@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    @include('util.message')
            <div class="card">
                <div class="card-header">Crear Cliente</div>
                <div class="card-body">
                @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <form method="POST" action="{{ route('cliente.save') }}">
                    @csrf
                    <input type="text" placeholder="Ingresa tu nombre" name="nombre" value="{{ old('nombre') }}" /><br>
                    <input type="number" placeholder="Ingresa tu documento" name="documento" value="{{ old('documento') }}" /><br>
                    <input type="text" placeholder="Ingresa tu correo" name="correo" value="{{ old('correo') }}" /><br>
                    <input type="number" placeholder="Ingresa tu teléfono" name="telefono" value="{{ old('telefono') }}" /><br>
                    <input type="text" placeholder="Ingresa tu dirección" name="direccion" value="{{ old('direccion') }}" /><br>
                    <input type="submit" value="Crear" />
                </form>
                <input type="button" onclick="window.location.href='/cliente'" value="Volver" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
