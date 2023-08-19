@extends('template.template')

@section('title', 'dashboard 2')

@section('content')
    <div class="container">
        <div class="tabs">
            <div class="card rounded-4 mx-auto w-100" style="margin-top:100px; margin-bottom:100px">
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
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Schedule 2</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-column">
                                    <div class="card mb-3">
                                        <div class="card-body text-center">
                                            <h6>Anda belum absen</h6>
                                        </div>
                                    </div>
                                    <div class="card">
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
