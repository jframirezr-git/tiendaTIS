@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
    @include('util.message')
            <div class="card">
                <div class="card-header">Crear Cliente</div>
                <div class="card-body">
                @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <form method="POST" action="{{ route('customer.save') }}">
                    @csrf
                    <input type="text" placeholder="Ingresa tu nombre" name="name" value="{{ old('name') }}" /><br>
                    <input type="number" placeholder="Ingresa tu documento" name="document" value="{{ old('document') }}" /><br>
                    <input type="text" placeholder="Ingresa tu correo" name="mail" value="{{ old('mail') }}" /><br>
                    <input type="number" placeholder="Ingresa tu teléfono" name="phone" value="{{ old('phone') }}" /><br>
                    <input type="text" placeholder="Ingresa tu dirección" name="address" value="{{ old('address') }}" /><br>
                    <input type="submit" value="Crear" />
                </form>
                <input type="button" onclick="window.location.href='/customer'" value="Volver" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
