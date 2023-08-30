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
                                        href="{{ route('index_dashboard') }}">{{ $ekskul->ekskulpertama->nm_ekskul }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="@if (Route::current()->getName() === 'index_dashboard2') active @endif text-dark nav-link"
                                        href="{{ route('index_dashboard2') }}">{{ $ekskul->ekskulkedua->nm_ekskul }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="@if (Route::current()->getName() === 'index_dashboard3') active @endif text-dark nav-link"
                                        href="{{ route('index_dashboard3') }}">{{ $ekskul->ekskulketiga->nm_ekskul }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="schedule row">
                            <div class="col-md-6">
                                <div class="card" style="border: 3px solid; background-color:rgb(190, 240, 255)">
                                    <div class="card-body pt-0">
                                        @foreach ($pengumuman as $item)
                                        <div class="d-flex gap-2 py-3" style="border-bottom: 1px solid;">
                                            <div class="icon text-bg-primary rounded-circle d-flex justify-content-center align-items-center"
                                                style="width: 50px; height: 50px;">
                                                <i data-feather="calendar"></i>
                                            </div>
                                            <div class="jadwal">
                                                <p class="fs-6 m-0">Pertemuan Hari {{ $ekskul->ekskulpertama->hari }} {{$item->tanggal}}</p>
                                                <p class="m-0">{{ $ekskul->ekskulpertama->jam }}</p>
                                            </div>
                                        </div>
                                        @endforeach
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
                                                    <form action="{{ route('absensi', $ekskul->ekskul1) }}" method="post">
                                                        @csrf
                                                        <button class="btn btn-info text-light w-100">Absen</button>
                                                    </form>
                                                </div>
                                                <div class="button-izin">
                                                    <button class="btn btn-danger w-100" data-bs-toggle="modal"
                                                        data-bs-target="#modal">Izin</button>
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
                            <div class="modal fade " id="modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Izin Ekskul</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('izin', $ekskul->ekskul1)}}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <label for="exampleFormControlTextarea1" class="form-label">Alasan Izin</label>
                                                <textarea class="form-control @error('alasan') is-invalid @enderror" name="alasan" id="exampleFormControlTextarea1" rows="3"
                                                    placeholder="Alasan Izin" required></textarea>
                                                @error('alasan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="modal-footer">
                                                <a>
                                                    <button class="btn btn-info">Submit</button>
                                                </a>
                                            </div>
                                        </form>
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
