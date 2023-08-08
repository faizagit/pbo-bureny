@extends('template.template')

@section('title','Home')
    
@section('content')
    <div class="container my-5">
        <div class="login d-flex justify-content-end">
            <a href="{{ route('index_login') }}" class="btn btn-secondary" style="width: 200px" >Login</a>
        </div>
        <div class="title mb-5">
            <h1 class="text-center fw-bold">Ekstrakurikuler</h1>
        </div>
        <div class="body row">
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/badminton.jpg') }}" class="rounded" style="max-width: 100%;" alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt qui quam saepe perspiciatis, magnam voluptas tempora error dolorum dolorem ipsum ullam cupiditate corrupti!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/balbalan.jpg') }}" class="rounded" style="max-width: 100%;" alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt qui quam saepe perspiciatis, magnam voluptas tempora error dolorum dolorem ipsum ullam cupiditate corrupti!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/basket.jpg') }}" class="rounded" style="max-width: 100%;" alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt qui quam saepe perspiciatis, magnam voluptas tempora error dolorum dolorem ipsum ullam cupiditate corrupti!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/taekwondo.jpg') }}" class="rounded" style="max-width: 100%;" alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt qui quam saepe perspiciatis, magnam voluptas tempora error dolorum dolorem ipsum ullam cupiditate corrupti!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/badminton.jpg') }}" class="rounded" style="max-width: 100%;" alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt qui quam saepe perspiciatis, magnam voluptas tempora error dolorum dolorem ipsum ullam cupiditate corrupti!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/badminton.jpg') }}" class="rounded" style="max-width: 100%;" alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt qui quam saepe perspiciatis, magnam voluptas tempora error dolorum dolorem ipsum ullam cupiditate corrupti!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/badminton.jpg') }}" class="rounded" style="max-width: 100%;" alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt qui quam saepe perspiciatis, magnam voluptas tempora error dolorum dolorem ipsum ullam cupiditate corrupti!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection