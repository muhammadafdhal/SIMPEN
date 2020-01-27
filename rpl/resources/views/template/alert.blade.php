@if ($message = Session::get('warning'))
  <div class="alert alert-icon alert-warning" role="alert">
      <button data-dismiss="alert" class="close"></button>
      <i class="fe fe-bell mr-2" aria-hidden="true"></i> {!! $message !!}
  </div>
@endif

@if ($message = Session::get('daftar'))
  <div class="alert alert-icon alert-warning" role="alert">
      <button data-dismiss="alert" class="close"></button>
      <i class="fe fe-bell mr-2" aria-hidden="true"></i> {!! $message !!}
  </div>
@endif

@if ($message = Session::get('berhasil_daftar'))
  <div class="alert alert-icon alert-warning" role="alert">
      <button data-dismiss="alert" class="close"></button>
      <i class="fe fe-bell mr-2" aria-hidden="true"></i> {!! $message !!}
  </div>
@endif

@if ($message = Session::get('bayar'))
  <div class="alert alert-icon alert-success" role="alert">
      <button data-dismiss="alert" class="close"></button>
      <i class="fe fe-bell mr-2" aria-hidden="true"></i> {!! $message !!}
  </div>
@endif

@if ($message = Session::get('success'))
  <div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="alert-heading">{{ $message }}!</h4>
    <p>Pengajuan jurnal anda telah selesai dilakukan, dan akan segera di proses. Tunggu konfirmasi untuk harga dan pengerjaan. <br> Terima kasih telah menggunakan layanan kami.</p>
    <hr>
    <p class="mb-0">Hubungi admin kami jika anda butuh bantuan di - <a href="https://journal-apps.com" target="_blank">Journal Apps</a></p>
  </div>
@endif

@if ($message = Session::get('berhasil_daftar'))
  <div class="alert alert-icon alert-success" role="alert">
      <button data-dismiss="alert" class="close"></button>
      <i class="fe fe-bell mr-2" aria-hidden="true"></i> {!! $message !!}
  </div>
@endif

@if ($message = Session::get('tambah'))
  <div class="alert alert-icon alert-success" role="alert">
      <button data-dismiss="alert" class="close"></button>
      <i class="fe fe-bell mr-2" aria-hidden="true"></i> {!! $message !!}
  </div>
@endif

@if ($message = Session::get('hapus'))
  <div class="alert alert-icon alert-success" role="alert">
      <button data-dismiss="alert" class="close"></button>
      <i class="fe fe-bell mr-2" aria-hidden="true"></i> {!! $message !!}
  </div>
@endif

@if ($message = Session::get('edit'))
  <div class="alert alert-icon alert-success" role="alert">
      <button data-dismiss="alert" class="close"></button>
      <i class="fe fe-bell mr-2" aria-hidden="true"></i> {!! $message !!}
  </div>
@endif
