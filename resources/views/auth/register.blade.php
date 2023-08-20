@extends('auth.template-login')

@section('title', 'Register')

@section('content')
    <div class="login mx-auto my-5" style=" width:60%">
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
                                <h1 class="text-center mb-3">Register</h1>
                            </div>
                            <form action="/register" method="post">
                                @csrf
                                <div class="form">
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label ">Nama</label>
                                      <input type="text" name="nama" class="form-control rounded-pill @error('nama') is-invalid @enderror" id="nama" aria-describedby="emailHelp" autofocus required value="{{ old('nama') }}">
                                      @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                      @enderror
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label ">Kelas</label>
                                      <input type="text" name="kelas" class="form-control rounded-pill @error('kelas') is-invalid @enderror" id="kelas" aria-describedby="emailHelp" required value="{{ old('kelas') }}">
                                      @error('kelas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                      @enderror
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label ">Username</label>
                                      <input type="text" name="username" class="form-control rounded-pill @error('username') is-invalid @enderror" id="username" aria-describedby="emailHelp" required value="{{ old('username') }}">
                                      @error('username')
                                      <div class="invalid-feedback">{{ $message }}</div>
                                      @enderror
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label ">Password</label>
                                      <input type="password" name="password" class="form-control rounded-pill @error('password') is-invalid @enderror" id="password" required>
                                      @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                      @enderror
                                    </div>
                                    <div class="login d-flex justify-content-center mt-3">
                                        <button class="btn btn-danger w-100 rounded-pill" type="submit">Register</button>
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
