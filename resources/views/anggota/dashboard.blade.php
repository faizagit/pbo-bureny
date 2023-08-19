@extends('template.template')

@section('title', 'dashboard')

@section('content')
    <div class="container">
        <div class="tabs">
            <div class="card rounded-4 mx-auto w-100" style="margin-top:100px; margin-bottom:100px; ">
                <div class="card-body d-flex justify-content-center ">
                    <div class="d-flex flex-column w-100">
                        <div class="isi-tabs mb-2 ">
                            <ul class="nav nav-underline ">
                                <li class="nav-item">
                                    <a class="@if (Route::current()->getName() === 'index_dashboard') active @endif text-dark nav-link"
                                        href="{{ route('index_dashboard') }}">Futsal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="@if (Route::current()->getName() === 'index_dashboard2') active @endif text-dark nav-link"
                                        href="{{ route('index_dashboard2') }}">Badminton</a>
                                </li>
                                <li class="nav-item">
                                    <a class="@if (Route::current()->getName() === 'index_dashboard3') active @endif text-dark nav-link"
                                        href="{{ route('index_dashboard3') }}">Voli</a>
                                </li>
                            </ul>
                        </div>
                        <div class="schedule row">
                            <div class="col-md-6">
                                <div class="card" style="border: 3px solid; background-color:rgb(190, 240, 255)">
                                    <div class="card-body pt-0">
                                        <div class="d-flex gap-2 py-3" style="border-bottom: 1px solid;">
                                            <div class="icon text-bg-primary rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 50px; height: 50px;">
                                                <i data-feather="calendar"></i>
                                            </div>
                                            <div class="jadwal">
                                                <p class="fs-6 m-0">Pertemuan Hari Sabtu 19-08-2023</p>
                                                <p class="m-0">Jam 10.00</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 py-3" style="border-bottom: 1px solid;">
                                            <div class="icon text-bg-primary rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 50px; height: 50px;">
                                                <i data-feather="calendar"></i>
                                            </div>
                                            <div class="jadwal">
                                                <p class="fs-6 m-0">Pertemuan Hari Sabtu 19-08-2023</p>
                                                <p class="m-0">Jam 10.00</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 py-3" style="border-bottom: 1px solid;">
                                            <div class="icon text-bg-primary rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 50px; height: 50px;">
                                                <i data-feather="calendar"></i>
                                            </div>
                                            <div class="jadwal">
                                                <p class="fs-6 m-0">Pertemuan Hari Sabtu 19-08-2023</p>
                                                <p class="m-0">Jam 10.00</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 py-3" style="border-bottom: 1px solid;">
                                            <div class="icon text-bg-primary rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 50px; height: 50px;">
                                                <i data-feather="calendar"></i>
                                            </div>
                                            <div class="jadwal">
                                                <p class="fs-6 m-0">Pertemuan Hari Sabtu 19-08-2023</p>
                                                <p class="m-0">Jam 10.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column">
                                    <div class="card mb-3" style="border: 3px solid; background-color:rgb(241, 226, 255)">
                                        <div class="card-body text-center">
                                            <div class="absen mb-3">
                                                <h5>Anda Belum Absen!</h5>
                                            </div>
                                            <div class="d-flex flex-column gap-2 mb-3">
                                                <div class="button-absen">
                                                    <button class="btn btn-info text-light w-100">Absen</button>
                                                </div>
                                                <div class="button-izin">
                                                    <button class="btn btn-danger w-100">Izin</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" style="border: 1px solid">
                                        <div class="card-body text-center">
                                            <h6>Kalender</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
