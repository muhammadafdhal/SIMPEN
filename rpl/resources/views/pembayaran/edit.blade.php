@extends('template.app')

@section('content')


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <form method="post" action="/dokter/edit/{{ $dokter->dk_id }}/save" enctype="multipart/form-data">
                    @csrf {{ method_field('patch')}}

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Nama Lengkap</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="dk_nama" id="email_address_2" class="form-control"
                                        placeholder="Enter your email Nama" value="{{ $dokter->dk_nama }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Alamat Lengkap</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="password_2" name="dk_alamat" class="form-control"
                                placeholder="Enter your Alamat" value="{{ $dokter->dk_alamat}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Spesialis Dokter</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="col-sm-6">
                                <select class="form-control show-tick" name="dk_spesialis" required>
                                    <option value="">-- Please select --</option>
                                    <option value="Gigi" <?php if ($dokter->dk_spesialis=="Gigi") {echo "selected";} ?>>Dokter Gigi</option>
                                    <option value="THT" <?php if ($dokter->dk_spesialis=="THT") {echo "selected";} ?>>Dokter THT</option>
                                    <option value="Penyakit Dalam" <?php if ($dokter->dk_spesialis=="Penyakit Dalam") {echo "selected";} ?>>Dokter Penyakit Dalam</option>
                                    <option value="Tulang" <?php if ($dokter->dk_spesialis=="Tulang") {echo "selected";} ?>>Dokter Tulang</option>

                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
