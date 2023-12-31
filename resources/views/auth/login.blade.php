@extends('auth.template-login')

@section('title', 'Login')

@section('content')
    <div class="login mx-auto my-5" style=" width:60%">
        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="container">
            <div class="card">
                <div class="card-body p-0">
                    <div class="d-flex">
                        <div class="col">
                            <div class="img">
                                <img src="{{ asset('../assets/img/wp-login.jpg') }}" alt=""
                                    style="max-width: 400px; ">
                            </div>
                        </div>
                        <div class="col p-4 ">
                            <div class="title">
                                <h1 class="text-center mb-3">Login</h1>
                            </div>
                            <form action="/login" method="post">
                                @csrf
                                <div class="form">
                                    <div class="mt-5">
                                        <label for="exampleInputEmail1" class="form-label ">Username</label>
                                        <input type="text" class="form-control rounded-pill" name="username"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" autofocus>
                                    </div>
                                    <div class="mt-4">
                                        <label for="exampleInputPassword1" class="form-label ">Password</label>
                                        <input type="password" class="form-control rounded-pill" name="password"
                                            id="exampleInputPassword1">
                                    </div>
                                    <div class="login d-flex justify-content-center mt-5">
                                        <button class="btn btn-danger rounded-pill w-100">Login</button>
                                    </div>
                                    <div class="register text-center">
                                        belum punya akun? <a href="{{ route('index_register') }}">Register sekarang</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
