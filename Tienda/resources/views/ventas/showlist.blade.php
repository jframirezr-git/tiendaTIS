@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h5>Lista de ventas</h5>
            <div class="row p-5">
                <div class="col-md-12">
                    <ul id="errors">
                        @foreach($data["sales"] as $sales)
                            <ul class="list-group list-group-horizontal-xl">
                                <li class="list-group-item">{{ $sales->getId() }}</li>
                                <li class="list-group-item">{{ $sales->getValor_unidad() }}</li>
                                <li class="list-group-item"> {{ $sales->getFecha() }}</li>
                                <li class="list-group-item">{{ $sales->getFactura() }}</li>
                                <li class="list-group-item">{{ $sales->getCantidad() }}</li>
                                <li class="list-group-item">{{ $sales->getDocumento() }}</li>
                                <li class="list-group-item">{{ $sales->getId_articulo() }}</li>
                                <li class="list-group-item">{{ $sales->getId_cliente() }}</li>
                            </ul>
                            <a class="btn btn-primary" href="{{ route('ventas.show', ['id' => $sales->getId()]) }}">Ver detalles</a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection