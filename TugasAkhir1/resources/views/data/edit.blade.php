@extends('layout.master')
@section('tittle', 'edit')
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
              <li class="breadcrumb-item active">Edit Data Karyawan</li>
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
                <h3 class="card-title">Edit Data Karyawan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="container bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <form action="{{ route('dataKaryawan.update', ['dataKaryawan'=>$dataKaryawan]) }}" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    {{-- untuk name disesuaikan dengan field database --}}
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $dataKaryawan->nama }}">
                                    @error('nama')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" rows="3" class="form-control">{{ $dataKaryawan->alamat }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="umur">Usia</label>
                                    {{-- untuk name disesuaikan dengan field database --}}
                                    <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{ $dataKaryawan->umur }}">
                                    @error('umur')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">jenis kelamin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="laki-laki" value="Laki-laki" {{ $dataKaryawan->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
                                    <label for="laki-laki" class="form-check-input">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="jenis_kelamin" id="perempuan" value="perempuan" {{ $dataKaryawan->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                    <label for="Perempuan" class="form-check-input">Perempuan</label>
                                </div>
                                @error('jenis_kelamin')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="no_telepon">No Telepon</label>
                                    {{-- untuk name disesuaikan dengan field database --}}
                                    <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" value="{{ $dataKaryawan->no_telepon }}">
                                    @error('no_telepon')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    {{-- untuk name disesuaikan dengan field database --}}
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ $dataKaryawan->tanggal_lahir }}">
                                    @error('tanggal_lahir')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jabatan_id">Jabatan</label>
                                    <select name="jabatan_id" id="jabatan_id" class="form-control">
                                        @foreach ($jabatan as $jabatans)
                                            <option value="{{ $jabatans->id }}" {{ old('jabatan_id') ?? $dataKaryawan->jabatan_id === $jabatans->id ? 'selected' : '' }}>
                                                {{ $jabatans->nama_jabatan }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('jabatan_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="status_id">Status</label>
                                    <select name="status_id" id="status_id" class="form-control">
                                        @foreach ($status as $item)
                                            <option value="{{ $item->id }}" {{ old('status_id') ?? $dataKaryawan->status_id === $item->id ? 'selected' : '' }}>
                                                {{ $item->status }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('status_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan_id">Pendidikan</label>
                                    <select name="pendidikan_id" id="pendidikan_id" class="form-control">
                                        @foreach ($pendidikan as $item)
                                            <option value="{{ $item->id }}" {{ old('pendidikan_id') ?? $dataKaryawan->pendidikan_id === $item->id ? 'selected' : '' }}>
                                                {{ $item->pendidikan }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('pendidikan_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_masuk">Tanggal Masuk</label>
                                    {{-- untuk name disesuaikan dengan field database --}}
                                    <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" id="tanggal_masuk" name="tanggal_masuk" value="{{ $dataKaryawan->tanggal_masuk }}">
                                    @error('tanggal_masuk')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
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