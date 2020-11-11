<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title','Home Page')</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    @yield('styles')
</head>
<body style="background: rgb(239,235,248);">
<div id="app">
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: rgb(204,210,244);">
        <div class="container"><a class="navbar-brand" href="#">JSJ</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/items') }}">{{__('home_page.title_product')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/sale') }}">{{__('home_page.title_sale')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/customer/show')}}">{{__('home_page.title_client')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/supplier') }}">{{__('home_page.title_supplier')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/api/v1/alianza') }}">{{__('home_page.alliance')}}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/api/v1/grupo1') }}">{{__('home_page.entertainment')}}</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field" style="color: rgb(249,246,246);"><i class="fa fa-search" style="height: 19px;width: 15px;color: rgb(7,6,6);"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"
                            style="background: #f7f6f6;box-shadow: 0px 0px;border-top-left-radius: 3px;border-top-right-radius: 3px;border-bottom-right-radius: 3px;border-bottom-left-radius: 7px;"></div>
                </form>
                <div class="content">
                    <div class="row">
                        <div>
                            <a href="{{ url('/en') }}"><img src="https://images.vexels.com/media/users/3/163966/isolated/preview/6ecbb5ec8c121c0699c9b9179d6b24aa-inglaterra-bandera-idioma-icono-c--rculo-by-vexels.png" width="30" heigth="30"/></a>
                        </div>
                        <div style="margin-left: 15px">
                            <a href="{{ url('/es') }}"><img src="https://images.vexels.com/media/users/3/164599/isolated/preview/ce858535b77f22068049aca2457e59ad-bandera-de-espa--a-idioma-icono-circulo-by-vexels.png" width="30" heigth="30"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>
