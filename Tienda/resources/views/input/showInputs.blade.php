@extends('layouts.master')

@section("title", $data["title"])

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
    @foreach($data["all_input"] as $all_input)
    <div class="col-4 text-center d-lg-flex align-self-center justify-content-lg-start align-items-lg-end">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$all_input->getId()}}</h4>
                    <h6 class="text-muted card-subtitle mb-2">Valor:{{$all_input->getValue()}}</h6>
                    <h6 class="text-muted card-subtitle mb-2">Cantidad:{{$all_input->getQuantity()}}</h6>
                    <a class="btn btn-primary" href="{{ route('input.show', ['id' => $all_input->getId()]) }}">Ver más</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row text-center">
    <div class="col">
    <a class="btn btn-primary" type="button" style="margin: 5px;" href="{{ url('/input/create') }}">Crear Entrada</a>
    </div>
</div>
@endsection
