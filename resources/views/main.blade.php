<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
<div class="container page-container">
    <header>
        <div class="search-form">
            <form action="{{url('/search')}}" method="post">
                {{csrf_field()}}
                <div class="input-group">
                    <input type="text" name="search-key"
                            class="form-control form-control-sm"
                            placeholder="Search">
                    <div class="input-group-append">
                        <button class="input-group-button" type="submit">Go</button>
                    </div>
                </div>
            </form>
        </div>
        <a href="{{url('/')}}">
            <img src="{{asset('images/MDC-Logo-clipped.png')}}" alt="MDC Logo">
            <span class="title">Mater Dei College</span><br>
            <span class="subtitle">
                Tubigon, Bohol, Philippines<br>
                Tel. No. +63 38 508 8106
            </span>
        </a>
    </header>

    @yield('featured')

    <div class="row">
        <div class="col-lg-3 sidebar">
            @include('nav')
        </div>
        <div class="col-lg-9 " style="padding-top: 15px;">
            <div style="padding-right: 20px;">
                @yield('content')
            </div>
        </div>
    </div>

    <footer>
        Copyright &copy; 2019. Mater Dei College<br>
        All rights reserved.
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</div>
</body>
</html>
