@extends('template.app2')
<!-- @section('status-home')
active
@endsection -->
@section('beranda')
current-menu-item
@endsection
@section('content')

<div id="kids_middle_container">
    <!-- .content -->

    <div class="kids_top_content">

        <div class="kids_top_content_head">

            <div class="kids_top_content_head_body"></div>

        </div><!-- .kids_top_content_head -->

        <div class="kids_top_content_middle">

            <div class="l-page-width">
                <!-- slogan -->
                <div class='slogan'>
                    <h1>Berani Rapi-Berani Bersih-Berani Sehat<h2>
                </div>

                <div class="one_half">
                    <!-- headline -->

                    <div class="latest-posts-widget type-1 widget">

                        <h3 style="color: #fefefe">Info Pendaftaran</h3>

                        <ul>
                            @foreach ($pendaftaran as $t)

                            <li>
                            
                                <!--/ kids_image_wrapper-->

                                <div class="kids_post_content" style="color: #E6E7E8;">
                                    
                                    <p>{{$t->informasi}}</p>

                                </div>
                                <!--/ kids_post_content-->
                            </li>
                            @endforeach

                        </ul>

                    </div>
                </div>

                <div class="one_half_last">
                    <!-- Pengumuman -->

                    <div class="latest-posts-widget type-1 widget">

                        <h3 style="color: #fefefe">Pengumuman</h3>

                        <ul>
                            @foreach($pengumuman as $t)

                            <li>
                                <div class="kids_post_content" style="color: #E6E7E8;">
                                    <p> {{$t->informasi}}</p>
                                </div>
                                <!--/ kids_post_content-->
                            </li>
                            @endforeach

                        </ul>

                    </div>
                    <!--/ widget_latest_poss -->

                </div>
                <!--/ one_half_last-->

                <div class="kids_clear"></div>


            </div>
            <!--/ l-page-width-->

        </div><!-- .kids_top_content_middle -->

        <div class="kids_top_content_footer">
            <div class="l-page-width">
                <section class="kids_posts_container clearfix">

                    <article class="kids_post_block l-grid-4">
                        <h1><img class="icon" src="/jogja/resource/doc/homepage/icons/sample-icon1.png" alt="" /><span
                                style="color : darkblue;">Prestasi</span></h1>
                        <div class="kids_post_content">
                            <p style="color: #000;">
                                Juara 2 mewarnai tingkat Kecamatan tahun 2015. Juara 3 menggambar tingkat Kota Pekanbaru
                                tahun 2016. Mewakili kec. Tampan lomba menyanyi kota Pekanbaru tahun 2017. TK islam
                                terbersih tahun 2014.</p>
                            <h4><a class="l-float-right link"
                                    href="/prestasi">Selengkapnya</a>
                            </h4>
                        </div>
                    </article>

                    <article class="kids_post_block l-grid-4">
                        <h><img class="icon" src="/jogja/resource/doc/homepage/icons/sample-icon2.png" alt="" /><span
                                style="color : darkblue;">Kenapa Memilih Kami</span></h3>
                            <div class="kids_post_content">
                                <p style="color: #000;">
                                    Sistem pembelajaran di TK kami lebih menyenangkan dan tepercaya. Selain itu,
                                    pelajaran Baca Tulis Al-quran metode IQRA sudah diterapkan. Hafalan surat-surat
                                    pendek hadist doa-doa harian ayat-ayat pilihan. Menggunakan sistem Moving class.
                                    Sudah tepercaya sejak 2010.
                                </p>
                            </div>
                    </article>

                    <article class="kids_post_block l-grid-4">
                        <h1><img class="icon" src="/jogja/resource/doc/homepage/icons/sample-icon3.png" alt="" /><span
                                style="color : darkblue;">Kekuatan Kami</span></h1>
                        <div class="kids_post_content">
                            <p style="color: #000;">
                                Kami berusaha untuk memberikan yang terbaik dalam konsep pendidikan di TK AMANAH.
                                Berbasis Tauhid dalam memberikan pendidikan kepada anak sehingga dalam melakukan
                                segala sesuatu dididik belajar dari keteladanan Rasullah Muhammad SAW.
                                <br /> &nbsp;
                            </p>
                        </div>
                    </article>

                </section><!-- .kids_posts_container -->
            </div>
        </div>

    </div><!-- .kids_top_content -->

    <div class="kids_bottom_content">

        <div class="l-page-width">

            <div class="kids_bottom_content_container clearfix">

            </div>
            <!--/ .work-carousel-->

        </div>
        <!--/ .kids_bottom_content_container-->
    </div>
    <!--/ .l-page-width-->

    <div class="l-page-width clearfix">
    </div>
    <!--/ .l-page-width-->

</div>
@endsection
