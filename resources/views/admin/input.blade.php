@extends('admin.admin')

@section('title','input absen')
    
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
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Futsal</td>
                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores, exercitationem animi officia quo eos culpa voluptas odio dolorem, non natus neque libero alias.</td>
                                <td>futsal.jpg</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>badminton</td>
                                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima natus officiis sed ab accusantium illum autem consequuntur suscipit repellat eos quis, vel exercitationem.</td>
                                <td>badminton.jpg</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>taekwondo</td>
                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis aliquid sunt, modi tenetur non pariatur commodi fuga sint at. Accusamus assumenda sint quibusdam.</td>
                                <td>taekwondo.jpg</td>
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