@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="row text-center justify-content-center align-items-center" style="margin: 5px;margin-top: 5%;">
    <div class="col">
        <div class="container">
            <h2>{{__('create_client.title_create_client')}}</h2>
            @include('util.message')
            @if($errors->any())
            <ul id="errors">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('customer.save') }}">
                @csrf
                <div class="form-row text-center justify-content-center align-items-center">
                    <div class="col-6"><label class="col-form-label">{{__('create_client.name')}}</label></div>
                    <div class="col-6"><input class="form-control" type="text" placeholder="{{__('create_client.name_placeholder')}}" name="name"></div>
                    <div class="col-6"><label class="col-form-label">{{__('create_client.document')}}</label></div>
                    <div class="col-6"><input class="form-control" type="number" placeholder="{{__('create_client.document_placeholder')}}" name="document"></div>
                    <div class="col-6"><label class="col-form-label">{{__('create_client.e-mail')}}</label></div>
                    <div class="col-6"><input class="form-control" type="text" placeholder="{{__('create_client.e-mail_placeholder')}}" name="mail"></div>
                    <div class="col-6"><label class="col-form-label">{{__('create_client.phone')}}</label></div>
                    <div class="col"><input class="form-control" type="number" placeholder="{{__('create_client.phone_placeholder')}}" name="phone"></div>
                    <div class="col-6"><label class="col-form-label">{{__('create_client.direction')}}</label></div>
                    <div class="col"><input class="form-control" type="text" placeholder="{{__('create_client.direction_placeholder')}}" name="address"></div>
                </div>
                <input class="btn btn-primary" style="margin: 5px;" type="submit" value={{__('create_client.create_button')}} />
            </form>
        </div>
    </div>
</div>
@endsection
