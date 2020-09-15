@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="row text-center justify-content-center align-items-center" style="margin: 5px;margin-top: 5%;">
    <div class="col">
        <div class="container">
            <h2>Crear Cliente</h2>
            @include('util.message')
            @if($errors->any())
            <ul id="errors">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('customer.save') }}">
                @csrf
                <div class="form-row text-center justify-content-center align-items-center">
                    <div class="col-6"><label class="col-form-label">Nombre:</label></div>
                    <div class="col-6"><input class="form-control" type="text" placeholder="Ingrese su nombre" name="name"></div>
                    <div class="col-6"><label class="col-form-label">Documento:</label></div>
                    <div class="col-6"><input class="form-control" type="number" placeholder="Ingrese su documento" name="document"></div>
                    <div class="col-6"><label class="col-form-label">Correo:</label></div>
                    <div class="col-6"><input class="form-control" type="text" placeholder="Ingrese su correo" name="mail"></div>
                    <div class="col-6"><label class="col-form-label">Telefono:</label></div>
                    <div class="col"><input class="form-control" type="number" placeholder="Ingrese su telefono" name="phone"></div>
                    <div class="col-6"><label class="col-form-label">Direccion:</label></div>
                    <div class="col"><input class="form-control" type="number" placeholder="Ingrese su direccion" name="address"></div>
                </div>
                <input class="btn btn-primary" style="margin: 5px;" type="submit" value="Crear" />
            </form>
        </div>
    </div>
</div>
@endsection
