@extends('layouts.master')

@section('content')
    <div class="col-4 offset-4 text-center" style="text-align: center;">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$data["name"]}}</h4>
                    <h6 class="text-muted card-subtitle mb-2">Stock:{{$data["stock"]}}</h6>
                    <p class="card-text">Marca:{{ $data["brand"]}}</p>
                    <p class="card-text">Referencia:{{ $data["reference"]}}</p>
                    <form method="POST" action="{{ url("items/delete/{$data["items"]["id"]}") }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
