@extends('template.app')
@section('siswa')
active
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Detail
                </h2><br>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nama Anak</th>
                                <td>{{$detail->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$detail->email}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{$detail->jk_pen}}</td>
                            </tr>
                            <tr>
                                <th>Anak Ke-</th>
                                <td>{{$detail->anak_ke}}</td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td>{{$detail->tempat_lahir_pen}}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{$detail->tgl_lahir_pen}}</td>

                            </tr>
                            <tr>
                                <th>Nama Ayah</th>
                                <td>{{$detail->nama_ayah_pen}}</td>
                            </tr>

                            <tr>
                                <th>Nama Ibu</th>
                                <td>{{$detail->nama_ibu_pen}}</td>
                            </tr>

                            <tr>
                                <th>Pekerjaan Ayah</th>
                                <td>{{$detail->pekerjaan_ayah}}</td>
                            </tr>

                            <tr>
                                <th>Pekerjaan Ibu</th>
                                <td>{{$detail->pekerjaan_ibu}}</td>
                            </tr>

                            <tr>
                                <th>Alamat </th>
                                <td>{{$detail->alamat}}</td>
                            </tr>

                            <tr>
                                <th>No Hp</th>
                                <td>{{$detail->no_hp}}</td>
                            </tr>

                            <tr>
                                <th>Akte</th>
                                <td><button type="button" class="btn btn-default waves-effect m-r-20"
                                        data-toggle="modal" data-target="#defaultModali{{$detail[0]}}">View</button></td>

                                <div class="modal fade" id="defaultModali{{$detail[0]}}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="defaultModalLabel{{$detail[0]}}">File/Foto</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img src="/images/berkas/{{$detail->akte}}"  width="550" height="400" alt="">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-link waves-effect"
                                                    data-dismiss="modal">CLOSE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>

                            <tr>
                                <th>Kartu Keluarga</th>
                                <td><button type="button" class="btn btn-default waves-effect m-r-20"
                                        data-toggle="modal" data-target="#defaultModalii{{$detail[0]}}">View</button></td>

                                <div class="modal fade" id="defaultModalii{{$detail[0]}}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="defaultModalLabel{{$detail[0]}}">File/Foto</h4>
                                            </div>
                                            <div class="modal-body">
                                                <img src="/images/kartu-keluarga/{{$detail->kk}}"  width="550" height="400" alt="">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-link waves-effect"
                                                    data-dismiss="modal">CLOSE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>

                            <tr>
                                <th>Surat Nikah</th>
                                <td><button type="button" class="btn btn-default waves-effect m-r-20"
                                        data-toggle="modal" data-target="#defaultModaliii{{$detail[0]}}">View</button></td>

                                <div class="modal fade" id="defaultModaliii{{$detail[0]}}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="defaultModalLabel{{$detail[0]}}">File/Foto</h4>
                                            </div>
                                            <div class="modal-body">

                                                <img src="/images/surat-nikah/{{$detail->surat_nikah}}" width="550" height="400">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-link waves-effect"
                                                    data-dismiss="modal">CLOSE</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </thead>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Content -->
@endsection
