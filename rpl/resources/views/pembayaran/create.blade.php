@extends('template.app')

@section('content')

<script>
    var total_harga = 0;

    function TotalHarga() {

        if (document.getElementById('basic_checkbox_1').checked)
            var harga = 150000;
        else
            var harga = -150000;

        total_harga += parseFloat(harga);
        $("#bayar").val(total_harga);


        $("#bayar").val(total_harga);
    }

    function TotalHarga2() {

        if (document.getElementById('basic_checkbox_2').checked)
            var harga = 150000;
        else
            var harga = -150000;

        total_harga += parseFloat(harga);
        $("#bayar").val(total_harga);


        $("#bayar").val(total_harga);
    }

    function TotalHarga3() {

        if (document.getElementById('basic_checkbox_3').checked)
            var harga = 150000;
        else
            var harga = -150000;

        total_harga += parseFloat(harga);
        $("#bayar").val(total_harga);


        $("#bayar").val(total_harga);
    }

    function TotalHarga4() {

        if (document.getElementById('basic_checkbox_4').checked)
            var harga = 150000;
        else
            var harga = -150000;

        total_harga += parseFloat(harga);
        $("#bayar").val(total_harga);


        $("#bayar").val(total_harga);
    }

    function TotalHarga5() {

        if (document.getElementById('basic_checkbox_5').checked)
            var harga = 150000;
        else
            var harga = -150000;

        total_harga += parseFloat(harga);
        $("#bayar").val(total_harga);


        $("#bayar").val(total_harga);
    }

    function TotalHarga6() {

        if (document.getElementById('basic_checkbox_6').checked)
            var harga = 150000;
        else
            var harga = -150000;

        total_harga += parseFloat(harga);
        $("#bayar").val(total_harga);


        $("#bayar").val(total_harga);
    }

    function TotalHarga7() {

        if (document.getElementById('basic_checkbox_7').checked)
            var harga = 150000;
        else
            var harga = -150000;

        total_harga += parseFloat(harga);
        $("#bayar").val(total_harga);


        $("#bayar").val(total_harga);
    }

    function TotalHarga8() {

        if (document.getElementById('basic_checkbox_8').checked)
            var harga = 150000;
        else
            var harga = -150000;

        total_harga += parseFloat(harga);
        $("#bayar").val(total_harga);


        $("#bayar").val(total_harga);
    }

    function TotalHarga9() {

        if (document.getElementById('basic_checkbox_9').checked)
            var harga = 150000;
        else
            var harga = -150000;

        total_harga += parseFloat(harga);
        $("#bayar").val(total_harga);


        $("#bayar").val(total_harga);
    }

    function TotalHarga10() {

        if (document.getElementById('basic_checkbox_10').checked)
            var harga = 150000;
        else
            var harga = -150000;

        total_harga += parseFloat(harga);
        $("#bayar").val(total_harga);


        $("#bayar").val(total_harga);
    }

    function TotalHarga11() {

        if (document.getElementById('basic_checkbox_11').checked)
            var harga = 150000;
        else
            var harga = -150000;

        total_harga += parseFloat(harga);
        $("#bayar").val(total_harga);


        $("#bayar").val(total_harga);
    }

    function TotalHarga12() {

        if (document.getElementById('basic_checkbox_12').checked)
            var harga = 150000;
        else
            var harga = -150000;

        total_harga += parseFloat(harga);
        $("#bayar").val(total_harga);


        $("#bayar").val(total_harga);
    }

</script>

<!-- begin:: Content -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Tambah Pembayaran
                </h2>
            </div>
            <div class="body">
                <form method="post" action="/pembayaran/tambah/save" enctype="multipart/form-data">
                    @csrf

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Bulan</label>
                        </div>
                        <div class="col-lg-6 col-md-10 col-sm-8 col-xs-7">
                            <div class="demo-checkbox">

                                <input type="hidden" name="status" value="Menunggu" />
                                <input type="checkbox" onclick="TotalHarga()" id="basic_checkbox_1" class="filled-in"
                                    name="bulan[]" value="Juli" />
                                <label for="basic_checkbox_1">Juli</label>

                                <input type="checkbox" onclick="TotalHarga2()" id="basic_checkbox_2" class="filled-in"
                                    name="bulan[]" value="Agustus" />
                                <label for="basic_checkbox_2">Agustus</label>

                                <input type="checkbox" onclick="TotalHarga3()" id="basic_checkbox_3" class="filled-in" name="bulan[]"
                                    value="September" />
                                <label for="basic_checkbox_3">September</label>

                                <input type="checkbox" onclick="TotalHarga4()" id="basic_checkbox_4" class="filled-in" name="bulan[]"
                                    value="Oktober" />
                                <label for="basic_checkbox_4">Oktober</label>

                                <input type="checkbox" onclick="TotalHarga5()" id="basic_checkbox_5" class="filled-in" name="bulan[]"
                                    value="November" />
                                <label for="basic_checkbox_5">November</label>

                                <input type="checkbox" onclick="TotalHarga6()" id="basic_checkbox_6" class="filled-in" name="bulan[]"
                                    value="Desember" />
                                <label for="basic_checkbox_6">Desember</label>

                                <input type="checkbox" onclick="TotalHarga7()" id="basic_checkbox_7" class="filled-in" name="bulan[]"
                                    value="Januari" />
                                <label for="basic_checkbox_7">Januari</label>

                                <input type="checkbox" onclick="TotalHarga8()" id="basic_checkbox_8" class="filled-in" name="bulan[]"
                                    value="Februari" />
                                <label for="basic_checkbox_8">Februari</label>

                                <input type="checkbox" onclick="TotalHarga9()" id="basic_checkbox_9" class="filled-in" name="bulan[]"
                                    value="Maret" />
                                <label for="basic_checkbox_9">Maret</label>

                                <input type="checkbox" onclick="TotalHarga10()" id="basic_checkbox_10" class="filled-in" name="bulan[]"
                                    value="April" />
                                <label for="basic_checkbox_10">April</label>

                                <input type="checkbox" onclick="TotalHarga11()" id="basic_checkbox_11" class="filled-in" name="bulan[]"
                                    value="Mei" />
                                <label for="basic_checkbox_11">Mei</label>

                                <input type="checkbox" onclick="TotalHarga12()" id="basic_checkbox_12" class="filled-in" name="bulan[]"
                                    value="Juni" />
                                <label for="basic_checkbox_12">Juni</label>


                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="email_address_2">Jumlah : RP.</label>
                        </div>
                        <div class="col-lg-6 col-md-10 col-sm-8 col-xs-7">
                            <input type="text" id="bayar" class="filled-in" name="total" value="" disabled />
                        </div>
                    </div>
                    <!-- <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Nominal</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="password_2" name="ps_alamat" class="form-control"
                                        placeholder="Enter your Alamat">
                                </div>
                            </div>
                        </div>
                    </div> -->
                    @if(Auth::user()->rule == 'Orangtua')
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Bukti</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" id="password_2" name="bukti" class="form-control"
                                        placeholder="Enter your Alamat">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if(Auth::user()->rule == 'Guru')
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="password_2">Nama Anak</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="col-sm-6">
                                <select class="form-control show-tick" name="bukti" required>
                                    <option value="">-- Please select --</option>
                                    @foreach ($orangtua as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="row clearfix">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">

                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>

                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@if(Auth::user()->rule == 'Orangtua')
<h5> Silahkan Transfer Uang Ke REKENING SEKOLAH <br> <br>
    542-10-100-816-85-38 <br> <br>
    A/N Yayasan TK Amanah
</h5>
@endif
</div>
<!-- end:: Content -->


@endsection
