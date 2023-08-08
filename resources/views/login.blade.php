@extends('template.template')

@section('title','Login')

@section('content')
    <div class="login mx-auto my-5" style=" width:60%">
        <div class="container">
            <div class="card">
                <div class="card-body p-0">
                    <div class="d-flex">
                        <div class="col">
                            <div class="img">
                                <img src="{{ asset("assets/img/wp-login.jpg") }}" alt="" style="max-width: 400px; ">
                            </div>
                        </div>
                        <div class="col p-4 ">
                            <div class="title">
                                <h1 class="text-center mb-3">Login</h1>
                            </div>
                            <form>
                                <div class="form">
                                    <div class="mt-5">
                                      <label for="exampleInputEmail1" class="form-label ">Username</label>
                                      <input type="email" class="form-control rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus>
                                    </div>
                                    <div class="mt-4">
                                      <label for="exampleInputPassword1" class="form-label ">Password</label>
                                      <input type="password" class="form-control rounded-pill" id="exampleInputPassword1">
                                    </div>
                                    <div class="login d-flex justify-content-center mt-5">
                                        <a href="{{ route('index_home') }}" class="btn btn-danger rounded-pill w-100">Login</a>
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