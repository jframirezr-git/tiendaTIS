@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="row text-center justify-content-center align-items-center" style="margin: 5px;margin-top: 5%;">
    <div class="col">
        <div class="container">
            <h2>Crear Entrada</h2>
            @include('util.message')
            @if($errors->any())
            <ul id="errors">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('input.save') }}">
                @csrf
                <div class="form-row text-center justify-content-center align-items-center">
                    <div class="col-6"><label class="col-form-label">Valor:</label></div>
                    <div class="col-6"><input class="form-control" type="number" placeholder="Ingresa el valor" name="value"></div>
                    <div class="col-6"><label class="col-form-label">Fecha:</label></div>
                    <div class="col-6"><input class="form-control" type="date" placeholder="Ingresa la fecha" name="date"></div>
                    <div class="col-6"><label class="col-form-label">Factura:</label></div>
                    <div class="col-6"><input class="form-control" type="number" placeholder="Ingresa la factura" name="bill"></div>
                    <div class="col-6"><label class="col-form-label">Cantidad:</label></div>
                    <div class="col"><input class="form-control" type="number" placeholder="Ingresa la cantidad" name="quantity"></div>
                    <div class="col-6"><label class="col-form-label">Id del articulo:</label></div>
                    <div class="col"><input class="form-control" type="number" placeholder="Ingresa el articulo id" name="item_id"></div>
                </div>
                <input class="btn btn-primary" style="margin: 5px;" type="submit" value="Crear" />
            </form>
        </div>
    </div>
</div>
@endsection
