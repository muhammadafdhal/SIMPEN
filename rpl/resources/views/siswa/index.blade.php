@extends('template.app')
@section('siswa')
active
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Siswa
                </h2><br>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($siswa as $t)

                            <tr>
                                <td>{{$no++}}.</td>
                                <td>{{$t->name}}</td>
                                <td>{{$t->jk_pen}}</td>
                                <td>{{$t->alamat}}</td>
                                <td><a href="/siswa/detail/{{$t->id}}" class="btn btn-info">Detail</a></td>
                                </td>
                            </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Content -->
@endsection
