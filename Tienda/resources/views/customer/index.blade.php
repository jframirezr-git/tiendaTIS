@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu Clientes</div>

                <div class="card-body">
                    <button type="button" onclick="window.location.href='/customer/create'">Crear cliente</button>
                    <button type="button" onclick="window.location.href='/customer/show'">Ver clientes</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
