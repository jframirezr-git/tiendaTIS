@extends('layouts.master')

@section("title", $data["supplier"])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $data["supplier"]["id"] }}</div>
                    <div class="card-body">
                        <b>Name:</b> {{ $data["supplier"]["name"] }}<br />
                        <b>Document:</b> {{ $data["supplier"]["document"] }}<br />
                        <b>Mail:</b> {{ $data["supplier"]["mail"] }}<br />
                        <b>Direction:</b> {{ $data["supplier"]["direction"] }}<br />
                        <b>Phone:</b> {{ $data["supplier"]["phone"] }}<br />
                    </div>
                    <form method="POST" action="{{ url("supplier/delete/{$data["supplier"]["id"]}") }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
