@extends('admin.admin')

@section('title', 'tambah ekskul')

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
                                <input autofocus type="text" class="form-control @error('nm_ekskul') is-invalid @enderror" name="nm_ekskul"
                                    id="exampleFormControlInput1" placeholder="Masukkan nama Ekskul" required>
                                @error('nm_ekskul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Ekskul</label>
                                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Deskripsi Ekskul" required></textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Pilih Hari</label>
                                <select class="form-select form-select-lg mb-6" aria-label="Large select example" name="hari" required>
                                    <option value="" disabled selected>Hari Ekskul</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jam</label>
                                <input type="text" name="jam" class="form-control @error('jam') is-invalid @enderror" id="exampleInputPassword1" required>
                                @error('jam')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar Ekskul</label>
                                <input class="form-control @error('gambar') is-invalid @enderror" name="gambar" type="file" id="formFile" required>
                                @error('gambar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <a>
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
