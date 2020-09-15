@extends('layouts.master')

@section('content')
    <div class="row text-center justify-content-center align-items-center" style="margin: 5px;margin-top: 5%;">
        <div class="col">
            <div class="container">
                <h2>Crear Producto</h2>
                 @include('util.message')
                 @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <form method="POST" action="{{ route('item.save') }}">
                    @csrf
                    <div class="form-row text-center justify-content-center align-items-center">
                        <div class="col-6"><label class="col-form-label">Nombre:</label></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="Ingresa el nombre" name="name"></div>
                        <div class="col-6"><label class="col-form-label">Marca:</label></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="Ingresa la marca" name="brand"></div>
                        <div class="col-6"><label class="col-form-label">Referencia:</label></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="Ingresa la referencia" name="reference"></div>
                        <div class="col-6"><label class="col-form-label">Stock:</label></div>
                        <div class="col"><input class="form-control" type="number" placeholder="Ingresa el stock" name="stock"></div>
                        <div class="col-6"><label class="col-form-label">Valor:</label></div>
                        <div class="col"><input class="form-control" type="number" placeholder="Ingresa el valor" name="value"></div>
                        <div class="col-6"><label class="col-form-label">Id del proveedor:</label></div>
                        <div class="col"><input class="form-control" type="number" placeholder="Ingresa el proveedor id" name="supplier_id"></div>
                    </div>
                    <input class="btn btn-primary" style="margin: 5px;" type="submit" value="Crear" />
                </form>
            </div>
        </div>
    </div>
@endsection
