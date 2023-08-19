@extends('template.template')

@section('title', 'Home')

@section('content')
    <div class="container my-5">
        <div class="title mb-5 d-flex justify-content-center">
            <h1 class="text-center text-light fw-bold bg-danger p-3 rounded-pill">Ekstrakurikuler</h1>
        </div>
        <div class="body row">
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/badminton.jpg') }}" class="rounded" style="max-width: 100%;"
                                alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis odio quis architecto
                                obcaecati, quam sed, rerum eveniet iusto natus, quod harum pariatur saepe <b>...</b></p>
                        </div>
                        <div class="detail d-flex mb-4" style="height: 20px">
                            <a class="text-decoration-none detail-hover fs-5 " href="" data-bs-toggle="modal"
                                data-bs-target="#modal2">Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/balbalan.jpg') }}" class="rounded" style="max-width: 100%;"
                                alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis odio quis architecto
                                obcaecati, quam sed, rerum eveniet iusto natus, quod harum pariatur saepe <b>...</b></p>
                        </div>
                        <div class="detail d-flex mb-4" style="height: 20px">
                            <a class="text-decoration-none detail-hover fs-5 " href="" data-bs-toggle="modal"
                                data-bs-target="#modal2">Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/basket.jpg') }}" class="rounded" style="max-width: 100%;"
                                alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis odio quis architecto
                                obcaecati, quam sed, rerum eveniet iusto natus, quod harum pariatur saepe <b>...</b></p>
                        </div>
                        <div class="detail d-flex mb-4" style="height: 20px">
                            <a class="text-decoration-none detail-hover fs-5 " href="" data-bs-toggle="modal"
                                data-bs-target="#modal2">Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/taekwondo.jpg') }}" class="rounded" style="max-width: 100%;"
                                alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis odio quis architecto
                                obcaecati, quam sed, rerum eveniet iusto natus, quod harum pariatur saepe <b>...</b></p>
                        </div>
                        <div class="detail d-flex mb-4" style="height: 20px">
                            <a class="text-decoration-none detail-hover fs-5 " href="" data-bs-toggle="modal"
                                data-bs-target="#modal2">Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/badminton.jpg') }}" class="rounded" style="max-width: 100%;"
                                alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis odio quis architecto
                                obcaecati, quam sed, rerum eveniet iusto natus, quod harum pariatur saepe <b>...</b></p>
                        </div>
                        <div class="detail d-flex mb-4" style="height: 20px">
                            <a class="text-decoration-none detail-hover fs-5 " href="" data-bs-toggle="modal"
                                data-bs-target="#modal2">Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{ asset('assets/img/badminton.jpg') }}" class="rounded" style="max-width: 100%;"
                                alt="">
                        </div>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis odio quis architecto
                                obcaecati, quam sed, rerum eveniet iusto natus, quod harum pariatur saepe <b>...</b></p>
                        </div>
                        <div class="detail d-flex mb-4" style="height: 20px">
                            <a class="text-decoration-none detail-hover fs-5 " href="" data-bs-toggle="modal"
                                data-bs-target="#modal2">Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade " id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Futsal</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="image-modal">
                            <img class="w-100 rounded" src="{{ asset('assets/img/balbalan.jpg') }}" alt="salah oi">
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-start">
                        <div class="jadwal">
                            Jadwal : Sabtu. 19-08-2023.
                        </div>
                        <div class="jam">
                            10.00
                        </div>
                    </div>
                    <div class="modal-footer">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque molestias aliquid quod
                            voluptatum laboriosam dolorem error libero magnam perferendis corrupti. Architecto molestiae
                            voluptates neque modi iure delectus placeat voluptatum dolor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
