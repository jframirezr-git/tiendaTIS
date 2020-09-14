@extends('layouts.master')

@section("title", $data["title"])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h5>List of Suppliers</h5>
                <div class="row p-5">
                    <div class="col-md-12">
                        <ul id="errors">
                            @foreach($data["supplier"] as $supplier)
                                <ul class="list-group list-group-horizontal-xl">
                                    <li class="list-group-item">{{ $supplier->getId() }}</li>
                                    <li class="list-group-item">{{ $supplier->getName() }}</li>
                                    <li class="list-group-item">{{ $supplier->getDocument() }}</li>
                                    <li class="list-group-item">{{ $supplier->getMail() }}</li>
                                    <li class="list-group-item">{{ $supplier->getPhone() }}</li>
                                </ul>
                                <a class="btn btn-primary" href="{{ route('supplier.show',
                            ['id' => $supplier->getId()]) }}">See Details</a>
                            @endforeach
                        </ul>
                        <div class="card-body">
                            <a class="btn btn-primary" href="{{ url('/supplier/create')}}">New</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

