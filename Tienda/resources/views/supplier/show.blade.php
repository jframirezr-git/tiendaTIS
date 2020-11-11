@extends('layouts.master')

@section("title", $data["supplier"]["name"] )
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $data["supplier"]["name"] }}</div>
                    <div class="card-body">
                        <b>{{__('show_supplier.id_supplier')}}</b> {{$data["supplier"]["id"] }}<br />
                        <b>{{__('show_supplier.contact')}}</b> {{ $data["supplier"]["contact"] }}<br />
                        <b>{{__('show_supplier.document')}}</b> {{ $data["supplier"]["document"] }}<br />
                        <b>{{__('show_supplier.e-mail')}}</b> {{ $data["supplier"]["mail"] }}<br />
                        <b>{{__('show_supplier.direction')}}</b> {{ $data["supplier"]["direction"] }}<br />
                        <b>{{__('show_supplier.phone')}}</b> {{ $data["supplier"]["phone"] }}<br />
                    </div>
                    <form method="POST" action="{{ url("supplier/delete/{$data["supplier"]["id"]}") }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit">{{__('show_supplier.delete_button')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
