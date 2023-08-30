@extends('admin.admin')

@section('title', 'tambah ekskul')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card p-5">
                        <form action="{{ route('create_pengumuman')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="ekstrakurikuler_id" name="ekstrakurikuler_id" value="{{ $ekskul_id }}">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="exampleInputPassword1" name="tanggal" required>
                                @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Pengumuman</label>
                                <textarea class="form-control @error('pengumuman') is-invalid @enderror" name="pengumuman" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Deskripsi Ekskul" required></textarea>
                                @error('pengumuman')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
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

@endsection
