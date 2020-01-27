@extends('template.app2')

@section('pendaftaran')
current-menu-item
@endsection

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm"
                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}

<!-- tampilan dashboard -->

<div id="kids_middle_container">
    <!-- .content -->
    <style>
        .c-style {
            margin-bottom: 30px;
            /*margin-left: -212px;
        text-align: center;*/
            font-size: 20px;
            color: #385EA7;
            text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.9);
            line-height: 1.5;
            margin-top: -62px;
        }

        .c-style-bottom {
            margin-bottom: 20px;
            /*margin-left: -195px;
        text-align: center;*/
            font-size: 20px;
            color: #385EA7;
            text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.9);
            line-height: 1.5;
        }

    </style>
    <div class="kids_top_content">

        <div class="kids_top_content_head">
            <div class="kids_top_content_head_body"></div>
        </div><!-- .kids_top_content_head -->

        <div class="kids_top_content_middle">
            <div class="l-page-width">
                <!-- .kids_posts_container -->
            </div>
        </div><!-- .kids_top_content_middle -->

        <div class="kids_top_content_footer"></div><!-- .end_middle_cloud -->

    </div><!-- .end_middle_cloud  -->

    <div class="bg-level-2-full-width-container kids_bottom_content">

        <div class="bg-level-2-page-width-container l-page-width no-padding">

            <section class="kids_bottom_content_container">

                <div class="entry-container">

                    <div class="header_container">

                        <h1>Pendaftaran</h1>

                        <ul id="breadcrumbs">
                            <li><a href="home.html">Beranda</a></li>
                            <li>Pendaftaran</li>
                        </ul>

                    </div>

                    <div class="l-grid-9 l-float-left ">
                        <div class="post-item-contac">


                            <!--<div class="l-grid-9 l-float-left">-->

                            <h1 style="text-align:center">Form Pendaftaran TK AMANAH</h1>
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
                                class="contactForm">
                                <!--                        <form action="#" method="post" id="contactform" class="contactForm">-->
                                @csrf
                                <fieldset>
                                    <div class="row">
                                        <label for="wname">Nama Calon Anak/Siswa:</label>
                                        <input name="name" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Masukan nama" value="{{ old('name') }}" id="wname" type="text"
                                            required autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <label>Jenis Kelamin</label>
                                    <div class="demo-radio-button" required autofocus>
                                        <input name="jk_pen" value="laki-laki" type="radio" class="with-gap"
                                            id="radio_3">Laki-Laki
                                        <input name="jk_pen" value="perempuan" type="radio" id="radio_4"
                                            class="with-gap">Perempuan

                                    </div>

                                    <br>

                                    <div class="row">
                                        <label for="wmail">Tempat Lahir:</label>
                                        <input class="form-control @error('tempat_lahir_pen') is-invalid @enderror"
                                            name="tempat_lahir_pen" placeholder="Masukan Tempat Lahir"
                                            value="{{ old('tempat_lahir_pen') }}" id="wmail" type="text" required
                                            autofocus>

                                        @error('tempat_lahir_pen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="wmail">Tanggal Lahir:</label>
                                        <input type="date"
                                            class="form-control @error('tgl_lahir_pen') is-invalid @enderror"
                                            name="tgl_lahir_pen" placeholder="Masukan Tanggal Lahir"
                                            value="{{ old('tgl_lahir_pen') }}" required autofocus>

                                        @error('tgl_lahir_pen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="wmail">Anak ke-:</label>
                                        <input type="number" class="form-control @error('anak_ke') is-invalid @enderror"
                                            name="anak_ke" placeholder="Masukan Anak-Ke" value="{{ old('anak_ke') }}"
                                            required autofocus>

                                        @error('anak_ke')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="wmail">Nama Ayah:</label>
                                        <input type="text"
                                            class="form-control @error('nama_ayah_pen') is-invalid @enderror"
                                            name="nama_ayah_pen" placeholder="Masukan Nama Ayah"
                                            value="{{ old('nama_ayah_pen') }}" required autofocus>

                                        @error('nama_ayah_pen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="wmail">Nama Ibu:</label>
                                        <input type="text"
                                            class="form-control @error('nama_ibu_pen') is-invalid @enderror"
                                            name="nama_ibu_pen" placeholder="Masukan Nama Ibu"
                                            value="{{ old('nama_ibu_pen') }}" required autofocus>

                                        @error('nama_ibu_pen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="wmail">Pekerjaan Ayah:</label>
                                        <input type="text" type="text"
                                            class="form-control @error('pekerjaan_ayah') is-invalid @enderror"
                                            name="pekerjaan_ayah" placeholder="Masukan Pekerjaan Ayah"
                                            value="{{ old('pekerjaan_ayah') }}" required autofocus>

                                        @error('pekerjaan_ayah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                    <div class="row">
                                        <label for="wmail">Pekerjaan Ibu:</label>
                                        <input type="text"
                                            class="form-control @error('pekerjaan_ibu') is-invalid @enderror"
                                            name="pekerjaan_ibu" placeholder="Masukan Pekerjaan Ibu"
                                            value="{{ old('pekerjaan_ibu') }}" required autofocus>

                                        @error('pekerjaan_ibu')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                    <div class="row">
                                        <label for="wmail">Alamat:</label>
                                        <input type="text" type="text"
                                            class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                            placeholder="Masukan Pekerjaan Alamat" value="{{ old('alamat') }}" required
                                            autofocus>
                                        @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="wmail">No HP:</label>
                                        <input type="number" class="form-control @error('no_hp') is-invalid @enderror"
                                            name="no_hp" placeholder="Masukan Nomor Hp" value="{{ old('no_hp') }}"
                                            required autofocus>
                                        @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="wmail">Akte Kelahiran:</label>
                                        <input type="file" class="form-control @error('akte') is-invalid @enderror"
                                            name="akte" value="{{ old('akte') }}" required autofocus>
                                        @error('akte')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="wmail">Surat Nikah:</label>
                                        <input type="file"
                                            class="form-control @error('surat_nikah') is-invalid @enderror"
                                            name="surat_nikah" value="{{ old('surat_nikah') }}" required autofocus>
                                        @error('surat_nikah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="wmail">Kartu Keluarga:</label>
                                        <input type="file" class="form-control @error('kk') is-invalid @enderror"
                                            name="kk" value="{{ old('kk') }}" required autofocus>
                                        @error('kk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="wmail">Email:</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" placeholder="Masukan Email" value="{{ old('email') }}" required
                                            autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="wmail">Password:</label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="Masukan Password" value="{{ old('password') }}" required
                                            autofocus>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <label for="wmail">Confirm Password:</label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            placeholder="Confirm Password" value="{{ old('password') }}" required
                                            autofocus>
                                    </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="button medium button-style1 l-float-right-send">
                                            {{ __('Daftar') }}
                                        </button>
                                    </div>

                                </fieldset>

                            </form>
                            <!--/ #contactform-->
                            <!-- <input type="button" id="btn" value="Pesan telah dikirim"
                                style="margin-left: auto; margin-right: auto; display: none"> -->
                        </div>
                    </div>

                    <div class="l-float-left type-1 widget-contact" style="margin-left: 45px;">
                        <aside id="sidebar">
                            <div class="c-style-bottom">Peta TK AMANAH</div>
                            <div class="type-1 widget-address">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6206717472096!2d110.45356831442557!3d-7.829910679945935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNDknNDcuNyJTIDExMMKwMjcnMjAuNyJF!5e0!3m2!1sen!2sid!4v1450062022664"
                                    width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <br />

                            <div class="type-1 widget-address ">
                                <div class="c-style-bottom">Detail Kontak</div>
                                <p><strong>TK AMANAH</strong></p>
                                <table>
                                    <!--<tr>
                                    <td colspan="2"><b>Alamat Kantor</b></td>
                                </tr>-->
                                    <!--<tr>
                                    <td colspan="2"><b>Kontak Kami</b></td>
                                </tr>-->
                                    <tr>
                                        <td width="10%"><img alt=""
                                                src="../resource/doc/images/icon/telp-icon1.jpg" /><span>Telpon</span>
                                        </td>
                                        <td width="60%">: 0813 6285 0528 <br> </td>
                                    </tr>
                                    <tr>
                                        <td><img alt=""
                                                src="../resource/doc/images/icon/gmail-icons.png" /><span>Email</span>
                                        </td>
                                        <td>: tkamanahpanam@yahoo.com</td>
                                    </tr>
                                    <tr>
                                        <td><img alt="" src="../resource/doc/images/icon/wa-k.png" /><span>WA</span>
                                        </td>
                                        <td>: 0813 6285 0528</td>
                                    </tr>
                                    <!--<tr>
                                    <td><img alt="" src="http://tkkhalifahjogja.com//resource/doc/images/icon/icon-1.png"/><span>Ym</span></td>
                                    <td>: <a href="ymsgr:sendIM?advertilization"><img src="http://opi.yahoo.com/online?u=advertilization&m=g&t=1" /> </a></td>    
                                </tr>-->
                                </table>
                            </div>
                            <!--/ contact-address-->
                        </aside>
                    </div>
                    <!--/ l-grid-5-->
                    <div class="kids_clear"></div>
                </div><!-- .gallery_container -->
            </section><!-- .bottom_content_container -->
            <div class="bg-level-2-left" id="bg-level-2-left"></div> <!-- .left_patterns -->
            <div class="bg-level-2-right" id="bg-level-2-right"></div><!-- .right_patterns -->
        </div>
    </div>
</div>



@endsection
