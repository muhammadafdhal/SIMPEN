@extends('template.app')
@section('editprofil')
active
@endsection
@section('content')


<div class="row clearfix">
    <div class="col-xs-12 col-sm-3">
        <div class="card profile-card">
            <div class="profile-header">&nbsp;</div>
            <div class="profile-body">
                <div class="image-area">
                    <img src="../../images/userrr.png" alt="AdminBSB - Profile Image" />
                </div>
                <div class="content-area">
                    <h3>{{Auth::user()->name}}</h3>
                    <p>{{Auth::user()->no_hp}}</p>
                    <p>{{Auth::user()->email}}</p>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xs-12 col-sm-9">
        <div class="card">
            <div class="body">
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        
                        <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab"
                                data-toggle="tab">Profile Settings</a></li>
                        <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab"
                                data-toggle="tab">Change Password</a></li>
                    </ul>

                    <br>
                    <br>
                    @foreach ($errors->all() as $error)
                            <p class="text-danger">{{$error}}</p>
                            @endforeach

                    <div class="tab-content">
                        

                        <div role="tabpanel" class="tab-pane fade in active" id="profile_settings">
                            <form method="post" action="/editprofil/edit/{{ $editprofil->id }}/save"
                                enctype="multipart/form-data" class="form-horizontal">
                                @csrf {{ method_field('patch')}}
                                <div class="form-group">
                                    <label for="NameSurname" class="col-sm-2 control-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="NameSurname" name="name"
                                                placeholder="Masukan Nama" value="{{Auth::user()->name}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="email" class="form-control" id="Email" name="email"
                                                placeholder="Masukkan Email" value="{{Auth::user()->email}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="Email" name="alamat"
                                                placeholder="Masukkan Alamat" value="{{Auth::user()->alamat}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Email" class="col-sm-2 control-label">No HP</label>
                                    <div class="col-sm-10">
                                        <div class="form-line">
                                            <input type="number" class="form-control" id="Email" name="no_hp"
                                                placeholder="Masukkan No HP" value="{{Auth::user()->no_hp}}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                            
                            <form class="form-horizontal" method="post"
                                action="/editprofil/password/{{ $editprofil->id }}/save" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="OldPassword" class="col-sm-3 control-label">Password Lama</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="OldPassword"
                                                name="current_password" placeholder="Password Lama" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NewPassword" class="col-sm-3 control-label">Password Baru</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="NewPassword"
                                                name="new_password" placeholder="Password Baru" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NewPasswordConfirm" class="col-sm-3 control-label">Konfirmasi</label>
                                    <div class="col-sm-9">
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="NewPasswordConfirm"
                                                name="new_confirm_password" placeholder="Konfirmasi" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-danger">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
