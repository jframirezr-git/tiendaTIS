@extends('layouts.master')

@section("title", $data["sale"]["date"] )
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $data["sale"]["date"] }}</div>
                    <div class="card-body">
                        <b>Factura:</b> {{ $data["sale"]["invoice"] }}<br />
                        <b>Id de la compra:</b> {{ $data["sale"]["id"] }}<br />
                        <b>Id del producto:</b> {{$data["sale"]["item_id"] }}<br />
                        <b>Cliente:</b> {{ $data["sale"]["customer_id"] }}<br />
                        <b>Cantidad:</b> {{ $data["sale"]["quantity"] }}<br />
                        <b>Valor:</b> {{ $data["sale"]["unit_value"] }}<br />
                    </div>
                </div>
                <form method="POST" action="{{ route('refund.save') }}">
                    @csrf
                    <div style="display: none">
                        <div class="col-6"><input class="form-control" type="text" name="item_id" value="{{$data["sale"]["item_id"]}}" ></div>
                        <div class="col-6"><input class="form-control" type="text" name="date" value="{{date(DATE_RFC2822)}}"></div>
                        <div class="col-6"><input class="form-control" type="number" name="quantity" value="{{$data["sale"]["quantity"] }}"></div>
                        <div class="col-6"><input class="form-control" type="number" name="unit_value" value="{{$data["sale"]["unit_value"] }}"></div>
                    </div>
                    <input class="btn btn-primary" style="margin: 5px;" type="submit" value="Pedir Reenvolso" />
                </form>
            </div>
        </div>
    </div>
@endsection
