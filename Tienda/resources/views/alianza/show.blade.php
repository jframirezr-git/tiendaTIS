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
                        <b>{{__('alianza.name')}}</b>{{$data->name}}<br/>
                        <b>{{__('alianza.e-mail')}}</b>{{$data->email}}<br/>
                        <b>{{__('alianza.phone')}}</b>{{$data->phone}}<br/>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
