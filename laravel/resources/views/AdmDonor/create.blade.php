@extends('layoutAdm.master')
@section('title', 'Tambah Donor')
@section('content')
<!-- Main content -->
<section class="content">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Tambah Donor</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('AdmDonor.index') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('AdmDonor.index') }}">Donor Darah</a></li>
                                    <li class="breadcrumb-item active">Tambah</li>
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
                            <!-- /.card-header -->
                            <form action="{{ route('AdmDonor.store') }}" method="POST">
                            @CSRF
                                <div class="card-body">
                                    <div class="column">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <div class="input-group mb-3">
                                                    <select class="form-control" name="id_pendonor" id="id_pendonor">
                                                        <option disabled value>Pilih Pendonor</option>
                                                        @foreach ($pendonor as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama_pendonor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="text" name="tanggal" id="tanggal" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="jumlah">Jumlah</label>
                                                <input type="text" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="nama">Lokasi</label>
                                                <div class="input-group mb-3">
                                                    <select class="form-control" name="id_waktu" id="id_waktu">
                                                        <option disabled value>Pilih Lokasi</option>
                                                        @foreach ($Waktu as $item1)
                                                        <option value="{{ $item1->id }}">{{ $item1->lokasi }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <div class="card-footer">
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('AdmDonor.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                                        <button type="submit" class="m-1 btn btn-success">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </section>
                <!-- /.content -->
@endsection