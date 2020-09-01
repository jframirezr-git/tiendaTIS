@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes registrados</div>
                <div class="card-body">
                <ul id="errors">
                @foreach($data["clients"] as $clients)
                    <li>{{ $clients->getId() }}</li>
                    <li>{{ $clients->getNombre() }}</li>
                    <li>{{ $clients->getDocumento() }}</li>
                    <li>{{ $clients->getCorreo() }}</li>
                    <li>{{ $clients->getTelefono() }}</li>
                    <li>{{ $clients->getDireccion() }}</li>
                    <a class="btn btn-primary" href="{{ route('cliente.show', ['id' => $clients->getId()]) }}">Ver más</a>
                @endforeach
                </ul>
                <input type="button" onclick="window.location.href='/cliente'" value="Volver" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
