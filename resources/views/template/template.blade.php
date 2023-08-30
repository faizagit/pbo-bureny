<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link href="{{ asset('../../assets_admin/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="navbar-home sticky-top">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index_home') }}">
                    <img src="{{ asset('assets/img/logo-ekskul.png') }}" alt="" style="width: 50px;">
                </a>
                <form class="d-flex">
                    @auth
                    <div class="login d-flex justify-content-end mx-1">
                        <a href="{{ route('index_dashboard') }}" class="btn btn-warning text-light"
                        style="width: 200px; border: none;">Dashboard</a>
                    </div>
                    <div class="logout d-flex justify-content-end">
                        <a href="{{ route('logout') }}" class="btn btn-danger text-light"
                        style="width: 200px; border: none;">Logout</a>
                    </div>
                    @else
                    <div class="login d-flex justify-content-end mx-1">
                        <a href="{{ route('index_login') }}" class="btn btn-success text-light"
                            style="width: 200px; border: none;">Login</a>
                    </div>
                    @endauth
                </form>
            </div>
        </nav>
    </div>
    <style>
        body {
            background-image: url('{{ asset('assets/img/wp-smkn1.jpeg') }}');
            background-size: contain;
            font-family: 'Quicksand', sans-serif;
        }
    </style>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
</body>

</html>
