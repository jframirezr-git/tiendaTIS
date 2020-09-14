@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Salidas registradas</div>
                <div class="card-body">
                <ul id="errors">
                @foreach($data["all_output"] as $all_output)
                    <li>{{ $all_output->getId() }}</li>
                    <li>{{ $all_output->getValue() }}</li>
                    <li>{{ $all_output->getDate() }}</li>
                    <li>{{ $all_output->getQuantity() }}</li>
                    <a class="btn btn-primary" href="{{ route('output.show', ['id' => $all_output->getId()]) }}">Ver más</a></br></br>
                @endforeach
                </ul>
                <input type="button" onclick="window.location.href='/output'" value="Volver" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
