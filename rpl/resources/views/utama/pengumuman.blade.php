@extends('template.app2')
@section('pengumuman')
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
                <!-- .kids_posts_container -->
            </div>
        </div><!-- .kids_top_content_middle -->

        <div class="kids_top_content_footer"></div><!-- .end_middle_cloud -->

    </div><!-- .end_middle_cloud  -->

    <div class="bg-level-2-full-width-container kids_bottom_content">

        <div class="bg-level-2-page-width-container l-page-width no-padding">

            <section class="kids_bottom_content_container">

                <div class="entry-container" id="sbr">

                    <div class="header_container">

                        <h1>Daftar Pengumuman</h1>


                        <ul id="breadcrumbs">
                            <li> <a href="../index.html">Beranda</a> </li>
                            <li>Pengumuman</li>
                        </ul><!-- breadcrumbs-->

                    </div>
                    <!--header_container-->

                    <div id="post-content" class="blog">
                    @foreach($pengumuman as $t)
                        <article class="post-item">

                            <div class="post-meta">
                                <div class="post-date">
                                    <span class="day">{{$t->created_at->format('d')}}</span>
                                    <span class="month">{{$t->created_at->format('M Y')}}</span>
                                </div>
                            </div>
                            <!--/ post-meta-->

                            <div class="post-entry clearfix">

                                <div class="post-title">
                                    <h1><a
                                            href="post/detail/minitrip-tk-khalifah-condongcatur-ke-sindu-kusuma-edupark.html">{{$t->judul}}
                                        </a></h1>
                                </div>
                                <!--/ post-title-->

                                    
                                <!--/ post-thumb-->

                                <div class="entry">
                                   {{$t->informasi}}
                                    <br>
                
                                </div>
                                <!--/ entry-->

                            </div>
                            <!--/ post-entry -->

                            <div class="post-footer">

                                <div class="post_cats l-float-left">

                                </div>
                                <!--/ post-cats -->

                                <!--<div class="post_tags l-float-right">
                                <p><span style="color: #fff;">Kategori:</span> 
                                    <a class="link" href="#">Berita</a>
                                </p>
                            </div>-->
                                <!--/ post-tags -->

                                <div class="kids_clear"></div>

                            </div>
                            <!--/ post-footer-->

                        </article>
                        @endforeach

                    </div>
                    <div class="kids_clear"></div>

                </div><!-- .gallery_container -->
                <div class="col_secandary"></div>
            </section><!-- .bottom_content_container -->

            <div class="bg-level-2-left" id="bg-level-2-left"></div> <!-- .left_patterns -->
            <div class="bg-level-2-right" id="bg-level-2-right"></div><!-- .right_patterns -->

        </div>

    </div>
</div>
@endsection
