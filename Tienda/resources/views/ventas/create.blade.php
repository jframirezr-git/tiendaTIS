@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        @include('util.message')
            <div class="card">
                <div class="card-header">Crear nueva venta</div>
                <div class="card-body">
                @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <form method="POST" action="{{ route('ventas.save') }}">
                    @csrf
                    <div class="container row">
                        <div class= "form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Valor de la unidad:</label>
                                    <input type="number" class="form-control" placeholder="Valor unidad" name="valor_unidad" value="{{ old('valor_unidad') }}" />
                                    <label>Fecha:</label>
                                    <input type="text" class="form-control" placeholder="Fecha" name="fecha" value="{{ old('fecha') }}" />
                                    <label>Factura:</label>
                                    <input type="text" class="form-control" placeholder="Factura" name="factura" value="{{ old('factura') }}" />
                                    <label>Cantidad:</label>
                                    <input type="number" class="form-control" placeholder="Cantidad" name="cantidad" value="{{ old('cantidad') }}" />
                                </div>
                                <div class="col-md-6">
                                    <label>Documento:</label>
                                    <input type="number" class="form-control" placeholder="Documento" name="documento" value="{{ old('documento') }}" />
                                    <label>Id articulo:</label>
                                    <input type="number" class="form-control" placeholder="Id articulo" name="id_articulo" value="{{ old('id_articulo') }}" />
                                    <label>Id cliente:</label>
                                    <input type="number" class="form-control" placeholder="Id cliente" name="id_cliente" value="{{ old('id_cliente') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
