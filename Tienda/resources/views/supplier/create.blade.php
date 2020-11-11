@extends('layouts.master')

@section('content')
    <div class="row text-center justify-content-center align-items-center" style="margin: 5px;margin-top: 5%;">
        <div class="col">
            <div class="container">
                <h2>{{__('create_supplier.title_create_supplier')}}</h2>
                @include('util.message')
                @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form method="POST" action="{{ route('supplier.save') }}">
                    @csrf
                    <div class="form-row text-center justify-content-center align-items-center">
                        <div class="col-6"><label class="col-form-label">{{__('create_supplier.supplier')}}</label></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="{{__('create_supplier.supplier_placeholder')}}" name="name"></div>
                        <div class="col-6"><label class="col-form-label">{{__('create_supplier.contact')}}</label></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="{{__('create_supplier.contact_placeholder')}}" name="contact"></div>
                        <div class="col-6"><label class="col-form-label">{{__('create_supplier.document')}}</label></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="{{__('create_supplier.document_placeholder')}}" name="document"></div>
                        <div class="col-6"><label class="col-form-label">{{__('create_supplier.direction')}}</label></div>
                        <div class="col"><input class="form-control" type="text" placeholder="{{__('create_supplier.direction_placeholder')}}" name="direction"></div>
                        <div class="col-6"><label class="col-form-label">{{__('create_supplier.e-mail')}}</label></div>
                        <div class="col"><input class="form-control" type="text" placeholder="{{__('create_supplier.e-mail_placeholder')}}" name="mail"></div>
                        <div class="col-6"><label class="col-form-label">{{__('create_supplier.phone')}}</label></div>
                        <div class="col"><input class="form-control" type="number" placeholder="{{__('create_supplier.phone_placeholder')}}" name="phone"></div>
                    </div>
                    <input class="btn btn-primary" style="margin: 5px;" type="submit" value="{{__('create_supplier.add_button')}}" />
                </form>
            </div>
        </div>
    </div>
@endsection

