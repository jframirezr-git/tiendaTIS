@extends('layouts.master')

@section("title", $data["title"])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Supplier</div>
                    <div class="card-body">
                        @if($errors->any())
                            <ul id="errors">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ route('supplier.save') }}">
                            @csrf
                            <label>
                                <input type="text" placeholder="Supplier" name="name" value="{{ old('name') }}" />
                            </label>
                            <label>
                                <input type="text" placeholder="Document" name="document" value="{{ old('document') }}" />
                            </label>
                            <label>
                                <input type="text" placeholder="Direction" name="direction" value="{{ old('direction') }}" />
                            </label>
                            <label>
                                <input type="text" placeholder="Mail" name="mail" value="{{ old('mail') }}" />
                            </label>
                            <label>
                                <input type="text" placeholder="Phone" name="phone" value="{{ old('phone') }}" />
                            </label>

                            <input type="submit" value="Send" />
                        </form>
                        <div class="card-body">
                            <a class="btn btn-primary" href="{{ url('/suppliers/showlist')}}">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

