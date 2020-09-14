@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes registrados</div>
                <div class="card-body">
                <ul id="errors">
                @foreach($data["all_customer"] as $all_customer)
                    <li>{{ $all_customer->getId() }}</li>
                    <li>{{ $all_customer->getName() }}</li>
                    <li>{{ $all_customer->getDocument() }}</li>
                    <li>{{ $all_customer->getMail() }}</li>
                    <li>{{ $all_customer->getPhone() }}</li>
                    <li>{{ $all_customer->getAddress() }}</li>
                    <a class="btn btn-primary" href="{{ route('customer.show', ['id' => $all_customer->getId()]) }}">Ver más</a></br></br>
                @endforeach
                </ul>
                <input type="button" onclick="window.location.href='/customer'" value="Volver" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
