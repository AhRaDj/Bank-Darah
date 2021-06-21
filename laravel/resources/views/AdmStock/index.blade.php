@extends('layoutAdm.master')
@section('title', 'Stock')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Stock Darah</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('AdmStock.index') }}">Home</a></li>
          <li class="breadcrumb-item active">Stock Darah</li>
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
          <h3 class="card-title">Data Stock Darah</h3>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table-suppliers" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Golongan Darah</th>
              <th>Stock</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($Darah as $item)
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->golongan }}</td>
              <td>{{ $item->stock }} Kantong</td>
              <td>
                <a href="{{ route('AdmStock.edit', [$item->id]) }}" class="btn btn-warning float-left m-1">Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Golongan Darah</th>
              <th>Stock</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@push('script')
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#table-suppliers").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush