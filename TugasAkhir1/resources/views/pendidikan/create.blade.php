@extends('layout.master')
@section('tittle', 'Pendidikan')
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
              <li class="breadcrumb-item active">Pendidikan</li>
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
                <h3 class="card-title">Input Pendidikan</h3>
                @if (session()->has('pesan'))
                  <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                  </div>
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="container bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <form action="{{ route('pendidikan.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="pendidikan">Pendidikan</label>
                                    {{-- untuk name disesuaikan dengan field database --}}
                                    <input type="text" class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan" name="pendidikan" value="{{ old('pendidikan') }}">
                                    @error('pendidikan')
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