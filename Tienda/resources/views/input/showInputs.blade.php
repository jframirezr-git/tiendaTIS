@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Entradas registradas</div>
                <div class="card-body">
                <ul id="errors">
                @foreach($data["all_input"] as $all_input)
                    <li>{{ $all_input->getId() }}</li>
                    <li>{{ $all_input->getValue() }}</li>
                    <li>{{ $all_input->getDate() }}</li>
                    <li>{{ $all_input->getBill() }}</li>
                    <li>{{ $all_input->getQuantity() }}</li>
                    <a class="btn btn-primary" href="{{ route('input.show', ['id' => $all_input->getId()]) }}">Ver más</a></br></br>
                @endforeach
                </ul>
                <input type="button" onclick="window.location.href='/input'" value="Volver" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
