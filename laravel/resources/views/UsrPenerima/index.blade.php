<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blood Bank | Penerima</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="{{ route('welcome.index') }}"><b>Blood Bank</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Daftar sebagai Penerima</p>

      <form action="{{ route('UsrPenerima.store') }}" method="POST">
        @CSRF
        <div class="input-group mb-3">
          <input type="text" id="nama_penerima" name="nama_penerima" class="form-control @error('nama_penerima') is-invalid @enderror" placeholder="Nama Lengkap">
          <small class="text-danger">@error('nama_penerima') {{$message}} @enderror</small>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat">
          <small class="text-danger">@error('alamat') {{$message}} @enderror</small>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <select class="form-control" name="id_darah" id="id_darah">
              <option disabled value>Golongan Darah</option>
              @foreach ($Darah as $item)
              <option value="{{ $item->id }}">{{ $item->golongan }}</option>
              @endforeach
            </select>
        </div>
        <div class="input-group mb-3">
          <input type="text" id="telpon" name="telpon" class="form-control @error('telpon') is-invalid @enderror" placeholder="No Telepon">
          <small class="text-danger">@error('telpon') {{$message}} @enderror</small>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone-square"></span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>