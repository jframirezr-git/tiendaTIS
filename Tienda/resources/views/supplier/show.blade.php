@extends('layouts.master')

@section("title", $data["supplier"]["name"] )
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $data["supplier"]["name"] }}</div>
                    <div class="card-body">
                        <b>Id del proveedor:</b> {{$data["supplier"]["id"] }}<br />
                        <b>Contacto:</b> {{ $data["supplier"]["contact"] }}<br />
                        <b>Documento:</b> {{ $data["supplier"]["document"] }}<br />
                        <b>E-Mail:</b> {{ $data["supplier"]["mail"] }}<br />
                        <b>Direccion:</b> {{ $data["supplier"]["direction"] }}<br />
                        <b>Telefono:</b> {{ $data["supplier"]["phone"] }}<br />
                    </div>
                    <form method="POST" action="{{ url("supplier/delete/{$data["supplier"]["id"]}") }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
