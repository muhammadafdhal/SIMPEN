@extends('template.app')

@section('content')


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Edit Informasi
                </h2>
            </div>
            <div class="body">
                <form method="post" action="/informasi/edit/{{$info->id}}/save" enctype="multipart/form-data">
                    @csrf {{ method_field('patch')}}

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Judul Informasi</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea type="text" id="password_2" name="judul" class="form-control"
                                        placeholder="Masukkan Judul Informasi">{{$info->judul}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Informasi</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea type="text" id="password_2" name="informasi" class="form-control"
                                        placeholder="Masukkan Informasi">{{$info->informasi}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Status Informasi</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="col-sm-6">
                                <select class="form-control show-tick" name="status" required>
                                    <option value="">-- Please select --</option>
                                    <option value="Pengumuman"<?php if ($info->status=="Pengumuman") {echo "selected";} ?>>Pengumuman</option>
                                    <option value="Info Pendaftaran"<?php if ($info->status=="Info Pendaftaran") {echo "selected";} ?>>Info Pendaftaran</option>
                                    <option value="Prestasi"<?php if ($info->status=="Prestasi") {echo "selected";} ?>>Prestasi</option>


                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Foto</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" id="password_2" name="foto" class="form-control"
                                        placeholder="Enter your Alamat">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
