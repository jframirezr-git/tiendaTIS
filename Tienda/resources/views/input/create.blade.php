@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    @include('util.message')
            <div class="card">
                <div class="card-header">Crear Entrada</div>
                <div class="card-body">
                @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <form method="POST" action="{{ route('input.save') }}">
                    @csrf
                    <input type="number" placeholder="Ingresa el valor" name="value" value="{{ old('value') }}" /><br>
                    <input type="date" placeholder="Ingresa la fecha" name="date" value="{{ old('date') }}" /><br>
                    <input type="number" placeholder="Ingresa la factura" name="bill" value="{{ old('bill') }}" /><br>
                    <input type="number" placeholder="Ingresa la cantidad" name="quantity" value="{{ old('quantity') }}" /><br>
                    <input type="number" placeholder="Ingresa el articulo" name="item_id" value="{{ old('item_id') }}" /><br>
                    <input type="submit" value="Crear" />
                </form>
                <input type="button" onclick="window.location.href='/input'" value="Volver" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
