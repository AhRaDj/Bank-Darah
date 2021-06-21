@extends('layoutAdm.master')
@section('title', 'Transfusi')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Transfusi</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="../../index.html">Home</a></li>
          <li class="breadcrumb-item active">Transfusi</li>
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
          <h3 class="card-title">Data Transfusi</h3>
          <a href="{{ route('AdmTransfusi.create') }}" class="btn btn-sm btn-success"><i class="fas fa-plus"></i>
            Create</a>
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
              <th>Tanggal</th>
              <th>Jumlah</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($Transfusi as $trfs)
              <td>{{ $loop->iteration }}</td>
              <td>{{ $trfs->Penerima->nama_penerima }}</td>
              <td>{{ $trfs->Penerima->alamat }}</td>
              <td>{{ $trfs->Penerima->Darah->golongan }}</td>
              <td>{{ $trfs->Penerima->telpon }}</td>
              <td>{{ $trfs->tanggal }}</td>
              <td>{{ $trfs->jumlah }} Kantong</td>
              <td>
                <a href="{{ route('AdmTransfusi.edit', [$trfs->id]) }}" class="btn btn-warning float-left m-1">Edit</a>
                <form class="float-left m-1" action="{{ route('AdmTransfusi.destroy', [$trfs->id]) }}" method="POST">
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
              <th>Tanggal</th>
              <th>Jumlah</th>
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