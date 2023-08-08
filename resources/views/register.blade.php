@extends('template.template')

@section('title','Regsiter')

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
                                <h1 class="text-center mb-3">Register</h1>
                            </div>
                            <form>
                                <div class="form">
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label ">Nama</label>
                                      <input type="email" class="form-control rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus>
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label ">Kelas</label>
                                      <input type="email" class="form-control rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label ">Username</label>
                                      <input type="email" class="form-control rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label ">Password</label>
                                      <input type="password" class="form-control rounded-pill" id="exampleInputPassword1">
                                    </div>
                                    <div class="login d-flex justify-content-center mt-3">
                                        <a href="{{ route('index_login') }}" class="btn btn-danger w-100 rounded-pill">Register</a>
                                    </div>
                                    {{-- <div class="register text-center">
                                        belum punya akun? <a href="{{ route('register') }}">Register sekarang</a>
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection