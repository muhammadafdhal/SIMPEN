@extends('template.app')
@section('berkas')
active
@endsection
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    @if($pendaftaran->verifikasi == 'Diterima')
        <div class="card">
            <div class="header">
                <h2>
                    Berkas
                </h2><br>
                <a href="/berkas/tambah"><button type="button" class="btn btn-success waves-effect">
                        <i class="material-icons">add</i>
                        <span>Tambah</span>

                    </button>
                </a>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Akte Kelahiran</th>
                                <th>Kartu Keluarga</th>
                                <th>Kartu Nikah</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($berkas
                             as $t)

                            <tr>
                                <td>{{$no++}}.</td>
                                <td>{{$t->akte}}</td>
                                <td>{{$t->kk}}</td>
                                <td>{{$t->kartunikah}}</td>
                            </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
            @else
            <div class="row clearfix">
                <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                            <center>
                                Pendaftaran Sedang Diproses
                            </center>
                            </h2>
                            
                        </div>
                    </div>
                </div>
            </div>
        @endif
        </div>
    </div>
</div>

<!-- end:: Content -->
@endsection
