@extends('admin.admin')

@section('title', 'Siswa')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card p-5">
                        <div class="d-flex justify-content-end">
                            {{-- <div class="tanggal">
                        <button class="btn btn-primary">
                            kalender
                        </button>
                      </div> --}}
                        </div>
                        <div class="table-ekskul">
                            <table class="table table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">No. HP</th>
                                        <th scope="col">Ekskul 1</th>
                                        <th scope="col">Ekskul 2</th>
                                        <th scope="col" class="text-center">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <th scope="row">1</th>
                                        <td>Faiz</td>
                                        <td>XII RPL 1</td>
                                        <td>08XXXXXXXXXX</td>
                                        <td>Badminton</td>
                                        <td>Futsal</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="update d-flex align-items-center">
                                                    <button class="btn btn-primary" type="submit"> Edit</button>
                                                </div>
                                                <div class="delete">
                                                    <button class="btn btn-danger" type="submit"> Delete</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <th scope="row">2</th>
                                        <td>Satiria</td>
                                        <td>XI MM 1</td>
                                        <td>08XXXXXXXXXX</td>
                                        <td>Badminton</td>
                                        <td>Futsal</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="update d-flex align-items-center">
                                                    <button class="btn btn-primary" type="submit"> Edit</button>
                                                </div>
                                                <div class="delete">
                                                    <button class="btn btn-danger" type="submit"> Delete</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <th scope="row">3</th>
                                        <td>Tasmuin</td>
                                        <td> X BDP 3</td>
                                        <td>08XXXXXXXXXX</td>
                                        <td>Badminton</td>
                                        <td>Futsal</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="update d-flex align-items-center">
                                                    <button class="btn btn-primary" type="submit"> Edit</button>
                                                </div>
                                                <div class="delete">
                                                    <button class="btn btn-danger" type="submit"> Delete</button>
                                                </div>
                                            </div>
                                        </td>
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
