@extends('layouts.master')

@section("title", $data["customers"]["id"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["customers"]["id"] }}</div>
                <div class="card-body">
                    <b>{{__('show_client.name')}}</b> {{ $data["customers"]["name"] }}<br/>
                    <b>{{__('show_client.document')}}</b> {{ $data["customers"]["document"] }}<br/>
                    <b>{{__('show_client.e-mail')}}</b> {{ $data["customers"]["mail"] }}<br/>
                    <b>{{__('show_client.phone')}}</b> {{ $data["customers"]["phone"] }}<br/>
                    <b>{{__('show_client.direction')}}</b> {{ $data["customers"]["address"] }}<br/><br/>
                </div>
                <form method="POST" action="{{ url("customer/delete/{$data["customers"]["id"]}") }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary" type="submit">{{__('show_client.delete_button')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
