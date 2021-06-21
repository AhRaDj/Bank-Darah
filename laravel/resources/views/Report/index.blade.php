@extends('layoutUsr.master')
@section('title', 'Report')
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Stock</li>
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
        <div class="row">
          @foreach ($Darah as $item)
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $item->golongan }}</h3>
                <p>{{ $item->stock }} Kantong</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          @endforeach
        </div>


          <div class="row">
            <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Report Donor Darah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Item</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $connection = mysqli_connect("localhost","root","","basdat_db");
                    $data_pendonor = mysqli_query($connection,"SELECT id_pendonor FROM donors");
	                  $jumlah = mysqli_num_rows($data_pendonor);
                    ?>
                    <tr>
                      <td>1.</td>
                      <td>Pendonor</td>
                      <td><?php echo $jumlah; ?> Orang</td>
                    </tr>
                    <tr>
                    <?php
                    $connection = mysqli_connect("localhost","root","","basdat_db");
                    $data_pendonor = mysqli_query($connection,"SELECT * FROM donors");

                    $i = 0;
                    while($data = mysqli_fetch_array($data_pendonor))
                    {
                    $i++;
                    $total2[$i] = $data['jumlah'];
                    }
                    ?>
                      <td>2.</td>
                      <td>Donor</td>
                      <td><?php echo array_sum($total2) ?> Kantong</td>
                    </tr>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Report Transfusi Darah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Item</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php
                    $connection = mysqli_connect("localhost","root","","basdat_db");
                    $data_penerima = mysqli_query($connection,"SELECT id_penerima FROM transfusis");
	                  $jumlah = mysqli_num_rows($data_penerima);
                    ?>
                      <td>1.</td>
                      <td>Penerima</td>
                      <td><?php echo $jumlah; ?> Orang</td>
                    </tr>
                    <tr>
                    <?php
                    $connection = mysqli_connect("localhost","root","","basdat_db");
                    $data_penerima = mysqli_query($connection,"SELECT * FROM transfusis");

                    $i = 0;
                    while($data = mysqli_fetch_array($data_penerima))
                    {
                    $i++;
                    $total1[$i] = $data['jumlah'];
                    }
                    ?>
                    
                      <td>2.</td>
                      <td>Transfusi</td>
                      <td><?php echo array_sum($total1) ?> Kantong</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection