@extends('layoutUsr.master')
@section('title', 'Donor Darah')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Donor Darah</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('welcome.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Donor Darah</li>
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
                    <h3 class="card-title">Data Donor</h3>
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
                            <th>Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($Donor as $item)
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->Pendonor->nama_pendonor}}</td>
                            <td>{{ $item->Pendonor->alamat}}</td>
                            <td>{{ $item->Pendonor->Darah->golongan }}</td>
                            <td>{{ $item->Pendonor->telpon }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->jumlah }} Kantong</td>
                            <td>{{ $item->Waktu->lokasi }}</td>
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
                            <th>Lokasi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection