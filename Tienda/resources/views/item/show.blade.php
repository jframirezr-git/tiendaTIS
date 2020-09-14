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
        <div class="col-4 text-center d-lg-flex align-self-center justify-content-lg-start align-items-lg-end">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                        <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p><a class="card-link" href="#">Ver más</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection