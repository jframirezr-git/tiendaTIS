@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu Entradas</div>

                <div class="card-body">
                    <button type="button" onclick="window.location.href='/input/'">Registrar entrada</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
