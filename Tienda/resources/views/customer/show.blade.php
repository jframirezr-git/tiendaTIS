@extends('layouts.master')

@section("title", $data["customers"]["id"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["customers"]["id"] }}</div>
                <div class="card-body">
                    <b>Nombre:</b> {{ $data["customers"]["name"] }}<br/>
                    <b>Documento:</b> {{ $data["customers"]["document"] }}<br/>
                    <b>Correo:</b> {{ $data["customers"]["mail"] }}<br/>
                    <b>Teléfono:</b> {{ $data["customers"]["phone"] }}<br/>
                    <b>Dirección:</b> {{ $data["customers"]["address"] }}<br/><br/>
                    <input type="button" onclick="window.location.href='/customer/show'" value="Volver" />
                </div>
                <form method="POST" action="{{ url("customer/delete/{$data["customers"]["id"]}") }}">
                    @csrf
                    @method('DELETE')
 
                <button class="btn btn-primary" type="submit">Eliminar</button>
            </div>
        </div>
    </div>
</div>
@endsection