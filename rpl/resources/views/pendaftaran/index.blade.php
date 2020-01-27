@extends('template.app')

@section('pendaftaran')
active
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Pendaftaran
                </h2><br>
            </div>
            <div class="card-body">
                @if(session('daftar'))
                <div class="alert alert-success" role="alert">
                    {{ session('daftar')}}
                </div>
                @endif
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                              
                                <th>Detail</th>
                                <th>Status</th>
                                <th>Verifikasi Pendaftaran</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($pendaftaran as $key => $t)

                            <tr>
                                <td>{{$no++}}.</td>
                                <td>{{$t->name}}</td>
                                <td>{{$t->jk_pen}}</td>
                                <td>{{$t->alamat}}</td>
                                <td><a href="/pendaftaran/detail/{{$t->id}}">Lihat Detail</a></td>


                                <td>{{$t->verifikasi}}</td>
                                <td class="datatable-ct">
                                    @if ($t->verifikasi == "Menunggu")

                                    <a href="/ubah_status/save/{{$t->id}}" class="btn btn-info">Diterima</a>
                                    @elseif ($t->verifikasi == "Diterima")
                                    <a href="" class="btn btn-info">Berhasil</a>
                                    @endif
                                </td>
                            </tr>
                            <div class="modal fade" id="defaultModali{{$t[0]}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="defaultModalLabel{{$t[0]}}">File/Foto</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="/images/berkas/{{$t->akte}}" alt="">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link waves-effect"
                                                data-dismiss="modal">CLOSE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="defaultModalii{{$t[0]}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="defaultModalLabel{{$t[0]}}">File/Foto</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="/images/kartu-keluarga/{{$t->kk}}" alt="">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link waves-effect"
                                                data-dismiss="modal">CLOSE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="defaultModaliiii{{$t[0]}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="defaultModalLabel{{$t[0]}}">File/Foto</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="/images/surat-nikah/{{$t->surat_nikah}}" alt="">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link waves-effect"
                                                data-dismiss="modal">CLOSE</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Content -->
@endsection
