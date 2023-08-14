@extends('admin.admin')

@section('title','absen')

@section('content')
            <div class="page-content">
                <div class="main-wrapper">
                    <div class="row">
                        <div class="col">
                            <div class="card p-5">
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
                                          <tr class="text-center">
                                            <th scope="row">1</th>
                                            <td>Faiz</td>
                                            <td>XII RPL 1</td>
                                            <td class="text-success text-center">
                                              <span class="badge bg-success fs-6"> Absen </span>
                                            </td>
                                          </tr>
                                          <tr class="text-center">
                                            <th scope="row">2</th>
                                            <td>Satiria</td>
                                            <td>XI MM 1</td>
                                            <td class="text-danger text-center">
                                              <span class="badge bg-danger fs-6"> Izin </span>
                                            </td>
                                          </tr>
                                          <tr class="text-center">
                                            <th scope="row">3</th>
                                            <td>Tasmuin</td>
                                            <td> X BDP 3</td>
                                            <td class="text-danger text-center">
                                              <span class="badge bg-danger fs-6"> Izin </span>
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