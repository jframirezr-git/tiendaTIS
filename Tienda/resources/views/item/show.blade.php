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
        @foreach($data["all_items"] as $all_items)
        <div class="col-4 text-center d-lg-flex align-self-center justify-content-lg-start align-items-lg-end">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$all_items->getName()}}</h4>
                        <h6 class="text-muted card-subtitle mb-2">Stock:{{$all_items->getStock()}}</h6>
                        <a class="btn btn-primary" href="{{ route('item.show_item', ['id' => $all_items->getId()]) }}">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row text-center">
        <div class="col">
        <a class="btn btn-primary" type="button" style="margin: 5px;" href="{{ url('/item/create') }}">Crear Producto</a>
        </div>
    </div>
@endsection