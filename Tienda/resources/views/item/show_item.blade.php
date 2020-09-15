@extends('layouts.master')

@section('content')
    <div class="col-4 offset-4 text-center" style="text-align: center;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$data["name"]}}</h4>
                    <h6 class="text-muted card-subtitle mb-2">Stock:{{$data["stock"]}}</h6>
                    <p class="card-text">Marca:{{ $data["brand"]}}</p>
                    <p class="card-text">Referencia:{{ $data["reference"]}}</p>
                    <p class="card-text">Valor:{{ $data["value"]}}</p>
                    <form method="POST" action="{{ url("items/delete/{$data["items"]["id"]}") }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit">Eliminar</button>
                    </form>
                </div>
                <form method="POST" action="{{ route('sale.save') }}">
                    @csrf
                    <div style="display: none">
                        <div class="col-6"><input class="form-control" type="text" name="unit_value" value="{{ $data["value"]}}"></div>
                        <div class="col-6"><input class="form-control" type="text" name="date" value="{{date(DATE_RFC2822)}}"></div>
                        <div class="col-6"><input class="form-control" type="text" name="invoice" value="{{random_int(1,100)}}"></div>
                        <div class="col-6"><input class="form-control" type="text" name="quantity" value="1"></div>
                        <!--TODO falta implementar el logeo para identificar el customer por su id-->
                        <div class="col-6"><input class="form-control" type="text" name="customer_id" value="1" ></div>
                        <div class="col-6"><input class="form-control" type="text" name="item_id" value="{{$data["items"]["id"]}}"></div>
                    </div>
                    <input class="btn btn-primary" style="margin: 5px;" type="submit" value="Comprar" />
                </form>
            </div>
        </div>
    </div>
@endsection
