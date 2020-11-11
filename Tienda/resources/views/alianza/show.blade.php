@extends('layouts.master')

@section('styles')
  @parent
    <link href="{{ asset('css/Article-Clean.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Article-Dual-Column.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Article-List.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Navigation-Clean.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Navigation-with-Search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
    @foreach ($data as $data)
        <div class="col-4 text-center d-lg-flex align-self-center justify-content-lg-start align-items-lg-end">
            <div class="container">
                <div class="card">
                <div class="card-header">{{$data->id}}</div>
                    <div class="card-body">
                        <b>Nombre:</b>{{$data->name}}<br/>
                        <b>Correo:</b>{{$data->email}}<br/>
                        <b>Teléfono:</b>{{$data->phone}}<br/>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
