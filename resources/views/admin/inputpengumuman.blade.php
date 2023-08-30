@extends('admin.admin')

@section('title', 'input absen')

@section('content')
<div class="page-content">
    <div class="main-wrapper">
        <div class="row">
            <div class="col">
                <div class="card p-5">
                    <div class="tambah-ekskul mb-3">
                        <a href="{{ route('input_pengumuman', $ekskul_id)}}" class="btn btn-success">Tambah Ekskul</a>
                    </div>
                    <div class="isi-ekskul">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jadwal</th>
                                <th scope="col">Pengumuman</th>
                                <th scope="col">Keterangan</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($ekskul as $item)
                              <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td style="width: 180px">{{ $item->created_at->isoFormat('dddd, D MMMM Y') }} Jam {{ $item->created_at->addHour(7)->translatedFormat('H:i') }}</td>
                                <td>{{ $item->pengumuman }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <div class="update d-flex align-items-center">
                                            <a href="{{ route('edit_pengumuman', $item->id) }}">
                                                <button class="btn btn-primary" type="submit"> Edit</button>
                                            </a>
                                        </div>
                                        <div class="delete">
                                            <form action="{{ route('delete_pengumuman', ['id' => $item->id]) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <input type="hidden" id="ekstrakurikuler_id" name="ekstrakurikuler_id" value="{{ $ekskul_id }}">
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
