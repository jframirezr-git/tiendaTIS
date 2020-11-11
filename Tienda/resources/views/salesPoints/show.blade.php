@extends('layouts.master')

@section("title", $data["title"])

@section('styles')
  @parent
    <link href="{{ asset('css/Article-Clean.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Article-Dual-Column.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Article-List.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Navigation-Clean.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Navigation-with-Search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        
        <div class="col-4 text-center d-lg-flex align-self-center justify-content-lg-start align-items-lg-end">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ubicación</h4>
                        <h6 class="text-muted card-subtitle mb-2">Punto de venta #1</h6>
                        <div>
                        <?php
                            $adrress = "DHA lahore"
                            ?>
                            <iframe width="300" height="300" src="https://maps.google.com/maps?q=<?php echo $adrress; ?>&ouput=embed"></iframe>
                            <?php
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
