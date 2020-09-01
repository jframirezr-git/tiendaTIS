@extends('layouts.master')

@section("title", $data["numero_factura"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["sales"]["id"] }}</div>
                <div class="card-body">
                    <b>Valor:</b> {{ $data["sales"]["valor_unidad"] }}<br />
                    <b>Cantidad:</b> {{ $data["sales"]["cantidad"] }}<br />
                    <b>Fecha:</b> {{ $data["sales"]["fecha"] }}<br />
                    <b>Documento:</b> {{ $data["sales"]["documento"] }}<br />
                    <b>ID articulo:</b> {{ $data["sales"]["id_articulo"] }}<br />
                    <b>ID cliente:</b> {{ $data["sales"]["id_cliente"] }}<br />
                </div>
                <form method="POST" action="{{ url("ventas/delete/{$data["sales"]["id"]}") }}">
                    @csrf
                    @method('DELETE')
 
                <button class="btn btn-primary" type="submit">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
