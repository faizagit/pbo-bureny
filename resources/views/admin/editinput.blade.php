@extends('admin.admin')

@section('title', 'tambah ekskul')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card p-5">
                        <form action="{{ route('update_ekskul', $ekskul->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama Ekskul</label>
                                <input autofocus type="text" class="form-control @error('nm_ekskul') is-invalid @enderror" name="nm_ekskul" value="{{ old('nm_ekskul', $ekskul->nm_ekskul) }}"
                                    id="exampleFormControlInput1" placeholder="Masukkan nama Ekskul" required>
                                @error('nm_ekskul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Ekskul</label>
                                <textarea class="form-control" name="deskripsi @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" required
                                    placeholder="Deskripsi Ekskul">{{ old('deskripsi', $ekskul->deskripsi) }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Pilih Hari</label>
                                <select class="form-select form-select-lg mb-6" aria-label="Large select example" name="hari" required>
                                    <option value="" selected disabled>Hari Ekskul</option>
                                    <option value="Senin" @if($ekskul->hari == "Senin")  selected @endif>Senin</option>
                                    <option value="Selasa" @if($ekskul->hari == "Selasa")  selected @endif>Selasa</option>
                                    <option value="Rabu" @if($ekskul->hari == "Rabu")  selected @endif>Rabu</option>
                                    <option value="Kamis" @if($ekskul->hari == "Kamis")  selected @endif>Kamis</option>
                                    <option value="Jumat" @if($ekskul->hari == "Jumat")  selected @endif>Jumat</option>
                                    <option value="Sabtu" @if($ekskul->hari == "Sabtu")  selected @endif>Sabtu</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jam</label>
                                <input type="text" name="jam" class="form-control @error('jam') is-invalid @enderror" id="exampleInputPassword1" value="{{ old('jam', $ekskul->jam) }}" required>
                                @error('jam')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar Ekskul</label>
                                <input class="form-control" name="gambar @error('gambar') is-invalid @enderror" type="file" id="formFile">
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
