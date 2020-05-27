@extends('layout.master')
@section('tittle', 'Detail')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Karyawan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Detail</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <h1 class="h2 mr-auto">Biodata {{ $dataKaryawan->nama }}</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <ul>
                  <li>Alamat : {{ $dataKaryawan->alamat }}</li>
                  <li>Umur : {{ $dataKaryawan->umur }}</li>
                  <li>Jenis Kelamin : {{ $dataKaryawan->jenis_kelamin }}</li>
                  <li>No Telepon : {{ $dataKaryawan->no_telepon }}</li>
                  <li>Tanggal Lahir : {{ $dataKaryawan->tanggal_lahir }}</li>
                  <li>Nama Jabatan : {{ $dataKaryawan->jabatan->nama_jabatan }}</li>
                  <li>Status : {{ $dataKaryawan->status->status }}</li>
                  <li>Pendidikan : {{ $dataKaryawan->pendidikan->pendidikan }}</li>
                  <li>Tanggal Masuk : {{ $dataKaryawan->tanggal_masuk }}</li>
              </ul>
            </div>
            {{-- //table kedua --}}
          
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
 
  <!-- /.content -->
</div>

  @endsection