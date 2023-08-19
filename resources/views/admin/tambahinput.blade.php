@extends('admin.admin')

@section('title','tambah ekskul')

@section('content')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card p-5">
                    <form action="{{ route('create_ekskul') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Ekskul</label>
                            <input autofocus type="text" class="form-control" name="nm_ekskul" id="exampleFormControlInput1" placeholder="Masukkan nama Ekskul">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Ekskul</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" placeholder="Deskripsi Ekskul"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar Ekskul</label>
                            <input class="form-control" name="gambar" type="file" id="formFile">
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