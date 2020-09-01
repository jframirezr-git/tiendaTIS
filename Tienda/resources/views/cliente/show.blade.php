@extends('layouts.master')

@section("title", $data["clients"]["id"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["clients"]["id"] }}</div>
                <div class="card-body">
                    <b>Nombre:</b> {{ $data["clients"]["nombre"] }}<br/>
                    <b>Documento:</b> {{ $data["clients"]["documento"] }}<br/><br/>
                    <b>Correo:</b> {{ $data["clients"]["correo"] }}<br/><br/>
                    <b>Teléfono:</b> {{ $data["clients"]["telefono"] }}<br/><br/>
                    <b>Dirección:</b> {{ $data["clients"]["direccion"] }}<br/><br/>
                    <input type="button" onclick="window.location.href='/cliente/show'" value="Volver" />
                </div>
                <form method="POST" action="{{ url("cliente/delete/{$data["clients"]["id"]}") }}">
                    @csrf
                    @method('DELETE')
 
                <button class="btn btn-primary" type="submit">Eliminar</button>
            </div>
        </div>
    </div>
</div>
@endsection