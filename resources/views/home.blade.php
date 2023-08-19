@extends('template.template')

@section('title','Home')
    
@section('content')
    <div class="container my-5">
        <div class="login d-flex justify-content-end">
            <a href="{{ route('index_login') }}" class="btn btn-success text-light" style="width: 200px; border: none;" >Login</a>
        </div>
        <div class="title mb-5 d-flex justify-content-center">
            <h1 class="text-center text-light fw-bold bg-danger p-3 rounded-pill">Ekstrakurikuler</h1>
        </div>
        <div class="body row">
            @foreach ($ekskul as $item)
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="img pb-3">
                            <img src="{{asset('storage/gambar_ekskul/' . $item->gambar)}}" class="rounded" style="max-width: 100%;" alt="">
                        </div>
                        <div class="desc">
                            <p>{{ $item->deskripsi }}<b>...</b></p>
                        </div>
                        <div class="detail d-flex mb-4" style="height: 20px">
                            <a class="text-decoration-none detail-hover fs-5 "  href="" data-bs-toggle="modal" data-bs-target="#modal{{ $item->id }}">Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @foreach ($ekskul as $item)
        <div class="modal fade " id="modal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $item->nm_ekskul }}</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="image-modal">
                        <img class="w-100 rounded" src="{{asset('storage/gambar_ekskul/' . $item->gambar)}}" alt="salah oi">
                    </div>
                </div>
                <div class="modal-footer">
                    {{ $item->deskripsi }}
                    <p></p>
                </div>
              </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection