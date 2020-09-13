@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Suppliers</div>

                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ url('/supplier/create')}}">New</a>
                        <a class="btn btn-primary" href="{{ url('/supplier/showlist')}}">Suppliers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

