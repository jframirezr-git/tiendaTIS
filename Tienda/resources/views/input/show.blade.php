@extends('layouts.master')

@section("title", $data["inputs"]["id"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["inputs"]["id"] }}</div>
                <div class="card-body">
                    <b>Valor:</b> {{ $data["inputs"]["value"] }}<br/>
                    <b>Fecha:</b> {{ $data["inputs"]["date"] }}<br/>
                    <b>Factura:</b> {{ $data["inputs"]["bill"] }}<br/>
                    <b>Cantidad:</b> {{ $data["inputs"]["quantity"] }}<br/>
                    <input type="button" onclick="window.location.href='/input/show'" value="Volver" />
                </div>
                <form method="POST" action="{{ url("input/delete/{$data["inputs"]["id"]}") }}">
                    @csrf
                    @method('DELETE')
 
                <button class="btn btn-primary" type="submit">Eliminar</button>
            </div>
        </div>
    </div>
</div>
@endsection