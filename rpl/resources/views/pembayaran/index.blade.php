@extends('template.app')
@section('pembayaran')
active
@endsection
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @if($pendaftaran->rule == 'Orangtua')
        @if($pendaftaran->verifikasi == 'Diterima')
        <div class="card">
            <div class="header">
                <h2>
                    Pembayaran
                </h2><br>
                <a href="/pembayaran/tambah"><button type="button" class="btn btn-success waves-effect">
                        <i class="material-icons">add</i>
                        <span>Tambah</span>

                    </button>
                </a>
            </div>

            <div class="card-body">
                @if(session('proses'))
                <div class="alert alert-success" role="alert">
                    {{ session('proses')}}
                </div>
                @endif
            </div>


            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Anak</th>
                                <th>Bulan</th>
                                <th>Nominal</th>
                                <th>Bukti</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($siswa as $t)

                            <tr>
                                <td>{{$no++}}.</td>
                                <td>{{$t->name}}</td>
                                <td>{{$t->bulan}}</td>
                                <td>Rp. {{$t->total}}</td>
                                <td><img src="/images/bukti-pembayaran/{{$t->bukti}}" width="300" height="250" alt="">
                                </td>
                                @if(Auth::user()->rule == 'Guru')
                                <td class="datatable-ct">
                                    @if ($t->status == "Menunggu")

                                    <a href="" class="btn btn-info">Menunggu</a>

                                    @elseif($t->status == "Diterima")
                                    <a href="" class="btn btn-info">Diterima</a>
                                    @endif
                                </td>
                                @elseif(Auth::user()->rule == 'Orangtua')
                                <td class="datatable-ct">
                                    @if ($t->status == "Menunggu")

                                    <span class="label label-danger">Menunggu</span>

                                    @elseif($t->status == "Diterima")
                                    <span class="label label-success">Diterima</span>
                                    @endif
                                </td>
                                @endif
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
            @elseif(Auth::user()->rule =='Guru')

            <div class="card">
                <div class="header">
                    <h2>
                        Pembayaran
                    </h2><br>

                    <a href="/pembayaran/tambah"><button type="button" class="btn btn-success waves-effect">

                            <i class="material-icons">add</i>
                            <span>Tambah</span>

                        </button>
                    </a>
                </div>

                <div class="card-body">
                    @if(session('bayar'))
                    <div class="alert alert-success" role="alert">
                        {{ session('bayar')}}
                    </div>
                    @endif
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Anak</th>
                                    <th>Bulan</th>
                                    <th>Nominal</th>
                                    <th>Bukti</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($pembayaran as $t)

                                <tr>
                                    <td>{{$no++}}.</td>
                                    <td>{{$t->name}}</td>
                                    <td>{{$t->bulan}}</td>
                                    <td>{{$t->total}}</td>
                                    <td><button type="button" class="btn btn-default waves-effect m-r-20"
                                            data-toggle="modal" data-target="#defaultModali">View</button></td>
                                    <div class="modal fade" id="defaultModali" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="defaultModalLabel">File/Foto</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="/images/bukti-pembayaran/{{$t->bukti}}" width="400"
                                                        height="500" style="display: block; margin: auto;" alt="">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-link waves-effect"
                                                        data-dismiss="modal">CLOSE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <td class="datatable-ct">
                                        @if ($t->status == "Menunggu")

                                        <a href="/verifikasi/save/{{$t->id}}" class="btn btn-info">Verifikasi
                                            Pembayaran</a>

                                        @else

                                        Sudah Diverifikasi

                                        @endif
                                    </td>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- end:: Content -->
    @endsection
