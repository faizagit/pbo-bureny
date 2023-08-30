@extends('admin.admin')

@section('title','ekskul')
    
@section('content')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card p-5">
                    <div class="back d-flex align-item-center">
                        <a href="{{ route('index_absen') }}"><i data-feather="chevron-left"></i> Back</a>
                    </div>
                    <div class="d-flex p-1 justify-content-center">
                        <div class="title px-3 text-light bg-info rounded-pill">
                            <h3 class="pt-2">Absen Ekskul</h3>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                      <div class="tanggal">
                        <button class="btn btn-primary">
                            kalender
                        </button>
                      </div>
                    </div>
                    <div class="table-ekskul">
                        <table class="table table-striped">
                            <thead>
                              <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col" class="text-center">Keterangan</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($absen as $item)
                              <tr class="text-center">
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{ $item->user->nama }}</td>
                                <td>{{ $item->user->kelas }} {{ $item->user->jurusan->nm_jurusan }}</td>
                                @if($item->keterangan == 'Hadir')
                                <td class="text-success text-center">
                                  <span class="badge bg-success fs-6"> Absen </span>
                                </td>
                                @else
                                <td class="text-danger text-center">
                                  <span class="badge bg-danger fs-6"> Izin </span>
                                </td>       
                                @endif
                              @empty
                              <tr>
                                <th scope="row" colspan="4">Data belum tersedia</th>
                              </tr>
                              @endforelse
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection