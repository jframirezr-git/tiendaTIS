@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sistema de ventas</div>

                <div class="card-body">
                    <a  class="btn btn-primary"href="{{ url('/ventas/create')}}">Crear</a>
                    <a  class="btn btn-primary"href="{{ url('/ventas/showlist')}}">Mostrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
