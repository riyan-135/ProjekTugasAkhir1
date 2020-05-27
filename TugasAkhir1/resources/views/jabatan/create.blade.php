@extends('layout.master')
@section('tittle', 'Jabatan')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jabatan</li>
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
                <h3 class="card-title">Input Jabatan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="container bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <form action="{{ route('jabatan.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_jabatan">Nama Jabatan</label>
                                    {{-- untuk name disesuaikan dengan field database --}}
                                    <input type="text" class="form-control @error('nama_jabatan') is-invalid @enderror" id="nama_jabatan" name="nama_jabatan" value="{{ old('nama_jabatan') }}">
                                    @error('nama_jabatan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>                  
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