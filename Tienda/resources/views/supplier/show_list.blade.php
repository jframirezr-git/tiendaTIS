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
        @foreach($data["supplier"] as $supplier)
            <div class="col-4 text-center d-lg-flex align-self-center justify-content-lg-start align-items-lg-end">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$supplier->getName()}}</h4>
                            <h6 class="text-muted card-subtitle mb-2">{{__('show_supplier.contact')}}{{$supplier->getContact()}}</h6>
                            <h6 class="text-muted card-subtitle mb-2">{{__('show_supplier.phone')}}{{$supplier->getPhone()}}</h6>
                            <a class="btn btn-primary" href="{{ route('supplier.show', ['id' => $supplier->getId()]) }}">{{__('show_supplier.see_more_button')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row text-center">
        <div class="col">
            <a class="btn btn-primary" type="button" style="margin: 5px;" href="{{ url('/supplier/create') }}">{{__('home_page.create_supplier')}}</a>
        </div>
    </div>
@endsection
