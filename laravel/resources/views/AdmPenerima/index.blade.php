@extends('layoutAdm.master')
@section('title', 'Penerima')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Penerima</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
          <li class="breadcrumb-item active">Penerima</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h3 class="card-title">Data Penerima</h3>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table-suppliers" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Golongan Darah</th>
              <th>No Telpon</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($Penerima as $item)
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->nama_penerima }}</td>
              <td>{{ $item->alamat }}</td>
              <td>{{ $item->Darah->golongan}}</td>
              <td>{{ $item->telpon }}</td>
              <td>
                <form class="float-left m-1" action="{{ route('AdmPenerima.destroy', [$item->id]) }}" method="POST">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</a>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Golongan Darah</th>
              <th>No Telpon</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.row -->
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection