@extends('layouts.master')

@section("title", $data["sale"]["date"] )
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $data["sale"]["date"] }}</div>
                    <div class="card-body">
                        <b>Id de la compra:</b> {{ $data["sale"]["id"] }}<br />
                        <b>Id del producto:</b> {{$data["sale"]["item_id"] }}<br />
                        <b>Cliente:</b> {{ $data["sale"]["cliente"] }}<br />
                        <b>Cantidad:</b> {{ $data["sale"]["quantity"] }}<br />
                        <b>Valor:</b> {{ $data["sale"]["unit_value"] }}<br />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
