@extends('template.app')
@section('status-home')
active
@endsection
@section('content')

<!-- begin:: Content -->

<!-- #END# Widgets -->
<!-- CPU Usage -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="row clearfix">

    <div class="body">
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success')}}
            </div>
            @endif
        </div>
    </div>
    @if(Auth::user()->rule == 'Guru')
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">people_outline</i>
                </div>
                <div class="content">
                    <div class="text">
                        <h4 sytle="text-align:center"><em>Jumlah Siswa TK AMANAH
                            </em></h4>
                    </div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">
                    </div>
                </div>
                <div class="icon">
                    <h1>{{$siswa}}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-3 col-sm-12  col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">list</i>
                </div>
                <div class="content">
                    <div class="text"><em>
                            <h3 sytle="text-align:center"> PENDAFTARAN
                        </em></h3>
                    </div>
                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">
                    </div>
                </div>
                <div class="icon">
                    <h1>{{$pendaftaran}}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">credit_card</i>
                </div>
                <div class="content">

                    <div class="text"><em>
                            <h3 sytle="text-align:center">PEMBAYARAN
                        </em></h3>
                    </div>

                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">
                    </div>
                </div>
                <div class="icon">
                <h1> {{$pembayaran}}</h1>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endif
</div>
</div>
</div>


<!-- end:: Content -->
@endsection
