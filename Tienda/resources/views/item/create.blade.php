@extends('layouts.master')

@section('content')
    <div class="row text-center justify-content-center align-items-center" style="margin: 5px;margin-top: 5%;">
        <div class="col">
            <div class="container">
                <h2>{{__('create_product.title_create_product')}}</h2>
                 @include('util.message')
                 @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <form method="POST" action="{{ route('item.save') }}">
                    @csrf
                    <div class="form-row text-center justify-content-center align-items-center">
                        <div class="col-6"><label class="col-form-label">{{__('create_product.name')}}</label></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="{{__('create_product.name_placeholder')}}" name="name"></div>
                        <div class="col-6"><label class="col-form-label">{{__('create_product.brand')}}</label></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="{{__('create_product.brand_placeholder')}}" name="brand"></div>
                        <div class="col-6"><label class="col-form-label">{{__('create_product.reference')}}</label></div>
                        <div class="col-6"><input class="form-control" type="text" placeholder="{{__('create_product.reference_placeholder')}}" name="reference"></div>
                        <div class="col-6"><label class="col-form-label">{{__('create_product.stock')}}</label></div>
                        <div class="col"><input class="form-control" type="number" placeholder="{{__('create_product.stock_placeholder')}}" name="stock"></div>
                        <div class="col-6"><label class="col-form-label">{{__('create_product.value')}}</label></div>
                        <div class="col"><input class="form-control" type="number" placeholder="{{__('create_product.value_placeholder')}}" name="value"></div>
                        <div class="col-6"><label class="col-form-label">{{__('create_product.id_supplier')}}</label></div>
                        <div class="col"><input class="form-control" type="number" placeholder="{{__('create_product.id_supplier_placeholder')}}" name="supplier_id"></div>
                    </div>
                    <input class="btn btn-primary" style="margin: 5px;" type="submit" value="{{__('create_product.create_button')}}" />
                </form>
            </div>
        </div>
    </div>
@endsection
