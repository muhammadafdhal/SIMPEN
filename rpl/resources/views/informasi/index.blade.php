@extends('template.app')
@section('informasi')
active
@endsection
@section('content')

<div class="row clearfix">
    <div class="col-xs-12 col-sm-12">
        <div class="card">
            <div class="body">
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                data-toggle="tab">Pengumuman</a></li>
                        <li role="presentation"><a href="#profile_settings" aria-controls="settings" role="tab"
                                data-toggle="tab">Prestasi</a></li>
                        <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab"
                                data-toggle="tab">Info Pendaftaran</a></li>
                    </ul>

                    <br>
                    <a href="/informasi/tambah"><button type="button" class="btn btn-success waves-effect">
                            <i class="material-icons">add</i>
                            <span>Tambah</span>

                        </button>
                    </a>
                    <br><br>

                    <div class="card-body">
                        @if(session('hapus'))
                        <div class="alert alert-success" role="alert">
                            {{ session('hapus')}}
                        </div>
                        @endif
                    </div>
                    <div class="card-body">
                        @if(session('tambah'))
                        <div class="alert alert-success" role="alert">
                            {{ session('tambah')}}
                        </div>
                        @endif
                    </div>
                    <div class="card-body">
                        @if(session('edit'))
                        <div class="alert alert-success" role="alert">
                            {{ session('edit')}}
                        </div>
                        @endif
                    </div>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                Data Pengumuman
                                            </h2><br>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Judul</th>
                                                            <th>Informasi</th>
                                                            <th>Aksi</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>

                                                        @php $no = 1; @endphp
                                                        @foreach ($info as $t)
                                                        @if($t->status=='Pengumuman')

                                                        <tr>
                                                            <td>{{$no++}}.</td>
                                                            <td>{{$t->judul}}</td>
                                                            <td>{{$t->informasi}}</td>
                                                            <td class="datatable-ct">

                                                                <a href="/informasi/edit/{{$t->id}}"
                                                                    class="btn btn-info">Edit</a>
                                                                <br>
                                                                <br>
                                                                <form method="post"
                                                                    action="/informasi/delete/{{$t->id}}">
                                                                    {{csrf_field()}} {{method_field('DELETE')}}
                                                                    <button type="submit" class="btn btn-danger"
                                                                    onclick="return confirm('Apakah Anda Ingin Menghapus Data ini?')"><a>Hapus</a></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        @endforeach




                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade in" id="profile_settings">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                Data Prestasi
                                            </h2><br>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Informasi</th>
                                                            <th>Foto</th>
                                                            <th>Aksi</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @php $no = 1; @endphp
                                                        @foreach ($info as $t)
                                                        @if($t->status=='Prestasi')

                                                        <tr>
                                                            <td>{{$no++}}.</td>
                                                            <td>{{$t->informasi}}</td>
                                                            <td><img src="/images/prestasi/{{$t->foto}}" alt=""></td>
                                                            <td class="datatable-ct">

                                                                <a href="/informasi/edit/{{$t->id}}"
                                                                    class="btn btn-info">Edit</a>
                                                                <br>
                                                                <br>
                                                                <form method="post"
                                                                    action="/informasi/delete/{{$t->id}}">
                                                                    {{csrf_field()}} {{method_field('DELETE')}}
                                                                    <button type="submit" class="btn btn-danger"
                                                                    onclick="return confirm('Apakah Anda Ingin Menghapus Data ini?')"><a>Hapus</a></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        @endforeach




                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">

                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                Data Info Pendaftaran
                                            </h2><br>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Informasi</th>
                                                            <th>Aksi</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @php $no = 1; @endphp
                                                        @foreach ($info as $t)
                                                        @if($t->status=='Info Pendaftaran')

                                                        <tr>
                                                            <td>{{$no++}}.</td>
                                                            <td>{{$t->informasi}}</td>
                                                            <td class="datatable-ct">

                                                                <a href="/informasi/edit/{{$t->id}}"
                                                                    class="btn btn-info">Edit</a>
                                                                <br>
                                                                <br>
                                                                <form method="post"
                                                                    action="/informasi/delete/{{$t->id}}">
                                                                    {{csrf_field()}} {{method_field('DELETE')}}
                                                                    <button type="submit" class="btn btn-danger"
                                                                    onclick="return confirm('Apakah Anda Ingin Menghapus Data ini?')"><a>Hapus</a></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        @endforeach




                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- end:: Content -->
@endsection
