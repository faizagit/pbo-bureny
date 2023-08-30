@extends('admin.admin')

@section('title', 'input absen')

@section('content')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card p-5">
                    <div class="tambah-ekskul mb-3">
                        <a href="{{ route('index_tambahinput') }}" class="btn btn-success">Tambah Ekskul</a>
                    </div>
                    <div class="isi-ekskul">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Eskul</th>
                                <th scope="col">Deskripsi Ekskul</th>
                                <th scope="col">Gambar Ekskul</th>
                                <th scope="col">Jadwal</th>
                                <th scope="col">Keterangan</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($ekskul as $item)
                              <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{ $item->nm_ekskul }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td><img src="{{asset('storage/gambar_ekskul/' . $item->gambar)}}" width="200px" alt="location-team"></td>
                                <td style="width: 180px">Sabtu, 19-08-2023. Jam 10.00</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div class="update d-flex align-items-center">
                                            <button class="btn btn-primary" type="submit"> Edit</button>
                                        </div>
                                        <div class="delete">
                                            <form action="{{ route('delete_ekskul', ['id' => $item->id]) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"> Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                              </tr>
                              @empty
                              <tr>
                                <th scope="row" colspan="4">Data belum tersedia</th>
                              </tr>
                              @endforelse
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
