@extends('layoutAdm.master')
@section('title', 'Edit Stock Darah')
@section('content')
<!-- Main content -->
<section class="content">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Edit Stock Darah</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('AdmStock.index') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('AdmStock.index') }}">Donor Darah</a></li>
                                    <li class="breadcrumb-item active">Edit</li>
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
                            <form action="{{ route('AdmStock.update', [$Darah->id]) }}" method="POST">
                            @CSRF
                            @method('put')
                                <div class="card-body">
                                    <div class="column">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Golongan</label>
                                                <input type="text" disabled name="golongan" id="golongan" class="form-control" value="{{$Darah->golongan}}"/>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="stock">Stock</label>
                                                <input type="text" name="stock" id="stock" class="form-control" placeholder="stock" value="{{$Darah->stock}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <div class="card-footer">
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('AdmStock.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                                        <button type="submit" class="m-1 btn btn-success">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </section>
                <!-- /.content -->
@endsection