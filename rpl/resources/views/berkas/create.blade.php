@extends('template.app')

@section('content')

<!-- begin:: Content -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Tambah Berkas
                </h2>
            </div>
            <div class="body">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Akte Kelahiran</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" name="ps_nama" id="email_address_2" class="form-control"
                                        placeholder="Enter your email Nama">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Kartu Keluarga</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" id="password_2" name="ps_alamat" class="form-control"
                                        placeholder="Enter your Alamat">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Kartu Nikah</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" id="password_2" name="ps_keluhan" class="form-control"
                                        placeholder="Enter your Alamat">
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>

                    <!-- <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                           
                        </div>
                    </div> -->
                </form>
                <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <a href="/berkas">
                            <button class="btn btn-primary m-t-15 waves-effect">Save</button>
                           </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- end:: Content -->


@endsection
