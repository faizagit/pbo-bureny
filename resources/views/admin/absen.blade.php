@extends('admin.admin')

@section('title', 'absen')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card p-5">
                        <div class="ekskul row">
                        <div class="col-12">
                                <a class="text-light" href="{{ route('index_ekskul', $ekskul->ekskul1) }}">
                                    <div class="card card-ekskul" style="border: 1px solid black">
                                        <div class="card-body" id="card-ekskul">
                                            <h3>{{$ekskul->ekskulpertama->nm_ekskul}}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @isset($ekskul->ekskul2)
                            <div class="col-12">
                                <a class="text-light" href="{{ route('index_ekskul', $ekskul->ekskul2) }}">
                                    <div class="card card-ekskul" style="border: 1px solid black">
                                        <div class="card-body" id="card-ekskul">
                                            <h3>{{$ekskul->ekskulkedua->nm_ekskul}}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endisset
                            @isset($ekskul->ekskul3)
                            <div class="col-12">
                                <a class="text-light" href="{{ route('index_ekskul', $ekskul->ekskul3) }}">
                                    <div class="card card-ekskul" style="border: 1px solid black">
                                        <div class="card-body" id="card-ekskul">
                                            <h3>{{$ekskul->ekskulketiga->nm_ekskul}}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // $(document).ready(function () {
        //     $("#card-ekskul").clone().appendTo('#card-ekskul-shadow');
        // });
    </script>
@endsection
