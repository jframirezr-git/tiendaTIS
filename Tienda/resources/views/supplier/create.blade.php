@extends('layouts.master')

@section('content')
    <div class="row text-center justify-content-center align-items-center" style="margin: 5px;margin-top: 5%;">
        <div class="col">
            <div class="container">
                <h2>Nuevo Proveedor</h2>
                @include('util.message')
                @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form method="POST" action="{{ route('supplier.save') }}">
                    @csrf
                    <div class="form-row text-center justify-content-center align-items-center">
                        <div class="col-6"><label class="col-form-label">Proveedor:</label></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="Ingresa al proveedor" name="name"></div>
                        <div class="col-6"><label class="col-form-label">Contacto:</label></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="Ingresa el contacto" name="contact"></div>
                        <div class="col-6"><label class="col-form-label">Documento:</label></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="Ingresa el documento del contacto" name="document"></div>
                        <div class="col-6"><label class="col-form-label">Direccion:</label></div>
                        <div class="col"><input class="form-control" type="text" placeholder="Ingresa la direccion del contacto" name="direction"></div>
                        <div class="col-6"><label class="col-form-label">E-Mail:</label></div>
                        <div class="col"><input class="form-control" type="text" placeholder="Ingresa el e-mail del contacto" name="mail"></div>
                        <div class="col-6"><label class="col-form-label">Telefono:</label></div>
                        <div class="col"><input class="form-control" type="number" placeholder="Ingresa el telefono del contacto" name="phone"></div>
                    </div>
                    <input class="btn btn-primary" style="margin: 5px;" type="submit" value="Agregar" />
                </form>
            </div>
        </div>
    </div>
@endsection

