<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="not-ie no-js" lang="en">

<!-- Mirrored from tkkhalifahjogja.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Dec 2019 10:50:38 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
<style>
        /* Alerts ====================================== */
        .alert {
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            border-radius: 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            -ms-box-shadow: none;
            box-shadow: none;
            border: none;
            color: #fff !important;
        }

        .alert .alert-link {
            color: #fff;
            text-decoration: underline;
            font-weight: bold;
        }

        .alert-success {
            background-color: #2b982b;
            height: 400px;
            width: 100%;
            
        }

        .alert-info {
            background-color: #00b0e4;
        }

        .alert-warning {
            background-color: #ff9600 !important;
        }

        .alert-danger {
            background-color: #fb483a !important;
        }

        .alert-dismissible .close {
            color: #fff;
            opacity: 1;
            border: none;
            text-shadow: none;
        }

    </style> 
    <link href='http://fonts.googleapis.com/css?family=Salsa|Rancho|Jockey+One|Oswald|Yanone+Kaffeesatz'
        rel='stylesheet' type='text/css' />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name='description'
        content="TK Amanah Pekanbaru.Hidupku hanya untuk Allah, Teladanku Rasulullah.TK Khalifah Berbasis tauhid dan enterpreneur.Mempunyai 9 cabang yang tersebar di Yogyakarta." />
    <meta name='keywords'
        content="TK, Kindergarten, Playgroup, Care, Balita, Anak, Khalifah, Alif-a, Jogja, Islami, Tauhid, Enterpreneur, Berbakti, Sholeh, Sholehah,Jujur, Shiddiq, Amanah, Terpercaya, Fathonah, Cerdas" />
    <meta name='robots' content='index,follow' />
    <title>Beranda | TK Amanah</title>
    <link href="/jogja/resource/doc/images/logo_tk.png" rel="SHORTCUT ICON" />
    <!--themes style-->
    <link rel="stylesheet" type="text/css" href="/jogja/resource/themes/public/load-style.css" media="screen" />
    <!--other style-->
    <link rel="stylesheet" type="text/css" href="/jogja/resource/themes/public/css/styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/jogja/resource/themes/public/css/camera.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/jogja/resource/themes/public/css/video-js.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/jogja/resource/themes/public/css/prettyPhoto.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/jogja/resource/themes/public/css/flexnav.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/jogja/resource/themes/public/themeChanger/css/colorpicker.css"
        media="all" />
    <link rel="stylesheet" type="text/css" href="/jogja/resource/themes/public/themeChanger/css/themeChanger.css"
        media="all" />
    <link rel="stylesheet" type="text/css" href="/jogja/resource/themes/public/css/table.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/jogja/resource/themes/public/css/animate.css" media="all" />



    <script src="/jogja/ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

</head>

<body class="t-pattern-1 kids-front-page t-menu-1 t-header-1 t-text-1 t-peachy">

    <div class="kids-bg-level-1">
        <!-- Header and menu -->

        <header id="kids_header">

            <div class="l-page-width clearfix">

                <div class="bg-level-1-left" id="bg-level-1-left"></div>
                <div class="bg-level-1-right" id="bg-level-1-right"></div>

                <div style="width: inherit; height: 80px; padding-top: 20px;">
                    <div id="kids_logo_block" style="text-align: center;">
                        <a id="kids_logo_text" href="index.html" title="TK Khalifah" ;>
                            <img src="/images/galeri/logo.jpeg" width="400" height="100" alt="" />
                        </a>
                    </div>
                    <!--/ #kids_logo_block-->
                </div>

                <div class="kids_clear">
                    @if (session('berhasil_daftar'))
                    <div class="alert alert-info" role="alert">
                    <h1 style="text-align:center; padding: 100px; color:#ffffff">{{ session('berhasil_daftar') }}</h1>
                    </div>


                    @endif
                </div>
                
                <br><br>

                <nav id="kids_main_nav">
                    <div class="menu-button">
                        <span class="menu-button-line"></span>
                        <span class="menu-button-line"></span>
                        <span class="menu-button-line"></span>
                    </div>
                    <ul class="clearfix flexnav" data-breakpoint="800">
                        <li class="@yield('beranda')"><a href="/">Beranda</a></li>
                        <li class="@yield('pengumuman')"><a href="/pengumuman">Pengumuman</a></li>
                        <li><a href="#">Profil</a>
                            <ul>
                                <li class="@yield('sambutan')"><a href="/sambutan">Sambutan Kepala Sekolah </a></li>
                                <li class="@yield('visi_misi')"><a href="/visi_misi">Visi Misi</a></li>
                                <li class="@yield('prestasi')"><a href="/prestasi">Prestasi</a></li>
                            </ul>
                        </li>
                        <li class="@yield('fasilitas')"><a href="/fasilitas">Fasilitas</a></li>
                        <li class="@yield('galeri')"><a href="/galeri">Galeri</a></li>
                        <li class="@yield('pendaftaran')"><a href="/register">Pendaftaran</a></li>
                        <li class="@yield('login')"><a href="/login">Login</a></li>
                    </ul>
                </nav><!-- #kids_main_nav -->
                <div class="kids_clear"></div>
            </div>
            <!--/ .l-page-width-->

        </header>
        <!--/ #kids_header-->
        <div class="bg-level-2-page-width-container l-page-width">

            <div class="kids_slider_bg">

                <div class="kids_slider_wrapper">

                    <div class="kids_slider_inner_wrapper">

                        <div class="camera_wrap camera_azure_skin" id="camera_wrap">
                            <div data-src="/images/galeri/arena.png.jpeg">
                            </div>
                            <div
                                data-src="/images/galeri/ruang_belajar1.jpeg">
                            </div>
                            <div
                                data-src="/images/galeri/kolam.jpeg">
                            </div>
                            <div data-src="/images/aktivitas/7.jpeg"></div>
                        </div><!-- #camera_wrap -->

                    </div>
                    <!--/ .kids_slider_inner_wrapper-->

                </div>
                <!--/ .kids_slider_wrapper-->

            </div>
            <!--/ .kids_slider_bg-->

            <br />

            <div class="bg-level-2-left" id="bg-level-2-left"></div>
            <div class="bg-level-2-right" id="bg-level-2-right"></div>

        </div><!-- .l-page-width -->
        <!-- end -->
    </div>

    <!-- content -->
    <div id="kids_middle_container">
        @yield('content')
    </div>
    <!--/ .kids_bottom_content-->
    </div>
    <!-- end -->

    <div class="kids_bottom_container">
        <!-- footer -->
        <div class="l-page-width clearfix">
            <div class="one_fourth">
                <div style='float:left; margin-right: 36px;'>
                    <img src="" />
                </div>
                <div class="alamats" style="float:left">
                    <p style="color: #ffffff;">
                        <b><strong>Website ini dikelola oleh :</strong> </b>
                        <br />TK AMANAH
                        <!--<br /> PGTK Khalifah Center -->
                        <br />Dewi Sartika : </strong>0813-6285-0528
                        <br />-
                        <!--<br /> Perum Timoho Asri II, Jl Teratai B 2 Melati Wetan Timoho Yogyakarta
				<br /> <strong>Telp :</strong> 0274 513731 | <strong>Customer Care : </strong>0821 3454 1551-->
                        <br />
                        <br />
                        Copyright &copy 2015 - 2019 TK AMANAH<br />

                    </p>
                </div>
            </div>


        </div>
        <!--/ l-page-width-->
        <!-- end -->
    </div><!-- .kids_bottom_container -->
    <div class="clear"></div>
    <!--<div class="footer-copyright">
            Copyright &copy; <a href="#"> </a>. Support By : <a href="http://amisoft.web.id" target="_blank">amisoft.web.id</a>
        </div>-->
    <!--Start of Tawk.to Script
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56f9f5e51d1573a22957e11e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
End of Tawk.to Script-->

    <!--        <div id="kids_theme_control_panel">
                    <a href="#" id="kids_theme_control_label"></a>
                </div>-->
    <script type="text/javascript" src="/jogja/resource/js/jquery/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/modernizr.custom.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/jquery-ui-1.8.16.custom.min.js"></script>
    <script type="text/javascript" src="/jogja/js/js_public/jquery.easing-1.3.min.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/jquery.lavalamp-1.4.min.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/camera.min.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/video.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/jquery.flexnav.min.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/jquery.tweet.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/scripts.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/themeChanger/colorpicker.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/themeChanger/themeChanger.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/textillate/jquery.fittext.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/textillate/jquery.lettering.js"></script>
    <script type="text/javascript" src="/jogja/resource/js/js_public/textillate/jquery.textillate.js"></script>

</body>

<!-- Mirrored from tkkhalifahjogja.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Dec 2019 10:52:29 GMT -->

</html>
