@extends('layouts.master')

@section("title", $data["outputs"]["id"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["outputs"]["id"] }}</div>
                <div class="card-body">
                    <b>Valor:</b> {{ $data["outputs"]["value"] }}<br/>
                    <b>Fecha:</b> {{ $data["outputs"]["date"] }}<br/>
                    <b>Cantidad:</b> {{ $data["outputs"]["quantity"] }}<br/>
                    <b>Articulo:</b> {{ $data["outputs"]["item_id"] }}<br/>
                    <input type="button" onclick="window.location.href='/output/show'" value="Volver" />
                </div>
                <form method="POST" action="{{ url("output/delete/{$data["outputs"]["id"]}") }}">
                    @csrf
                    @method('DELETE')
 
                <button class="btn btn-primary" type="submit">Eliminar</button>
            </div>
        </div>
    </div>
</div>
@endsection