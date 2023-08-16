@extends('admin.admin')

@section('title', 'absen')

@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col">
                    <div class="card p-5">
                        <div class="ekskul row">
                            {{-- Foreach start --}}
                            <div class="col-12">
                                <a class="text-light" href="{{ route('index_ekskul') }}">
                                    <div class="card card-ekskul" style="border: 1px solid black">
                                        <div class="card-body" id="card-ekskul">
                                            <h3>Futsal</h3>
                                            <p>Futsal</p>
                                            <p>Futsal</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            {{-- End Foreach --}}
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
