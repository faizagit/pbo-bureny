@extends('admin.admin')

@section('title', 'edit pengumuman')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card p-5">
                        <form action="{{ route('update_pengumuman', $pengumuman->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="exampleInputPassword1" name="tanggal" value="{{ old('pengumuman', $pengumuman->tanggal) }}" required>
                                @error('tanggal')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jam</label>
                                <input type="text" class="form-control @error('jam') is-invalid @enderror" id="exampleInputPassword1" name="jam" value="{{ old('pengumuman', $pengumuman->jam) }}" required>
                                @error('jam')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Pengumuman</label>
                                <textarea class="form-control @error('pengumuman') is-invalid @enderror" name="pengumuman" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Deskripsi Ekskul" required>{{ old('pengumuman', $pengumuman->pengumuman) }}</textarea>
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
