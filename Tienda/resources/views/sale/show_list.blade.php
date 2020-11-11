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
        @foreach($data["sale"] as $sale)
            <div class="col-4 text-center d-lg-flex align-self-center justify-content-lg-start align-items-lg-end">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$sale->getDate()}}</h4>
                            <h6 class="text-muted card-subtitle mb-2">{{__('show_sales.item')}}{{$sale->getItemId()}}</h6>
                            <h6 class="text-muted card-subtitle mb-2">{{__('show_sales.quantity')}}{{$sale->getQuantity()}}</h6>
                            <h6 class="text-muted card-subtitle mb-2">{{__('show_sales.client')}}{{$sale->getCustomerId()}}</h6>
                            <a class="btn btn-primary" href="{{ route('sale.show', ['id' => $sale->getId()]) }}">{{__('show_sales.see_more_button')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
