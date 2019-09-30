<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <title>Mater Dei College | Web Admin</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-static top">
        <div class="container">
            <a class="navbar-brand" href="{{url('/admin')}}">
                Mater Dei College
            </a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/posts')}}">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/widgets')}}">Widgets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/admin/users')}}">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/logout')}}">Logout</a>
                </li>

            </ul>
        </div>

    </nav>

    <br>

    <div class="container">
        @yield('content')
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
