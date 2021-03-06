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
    @foreach ($games as $game)
        <div class="col-4 text-center d-lg-flex align-self-center justify-content-lg-start align-items-lg-end">
            <div class="container">
                <div class="card">
                <div class="card-header"><b>{{$game->title}}</b></div>
                    <div class="card-body">
                        <img src="{{$game->image}}" width="110" height="110">
                        <h6 class="text-muted card-subtitle mb-2" style="margin-top: 10px">{{$game->body}}</h6>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
