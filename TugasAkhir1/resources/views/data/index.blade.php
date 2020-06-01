@extends('layout.master')
@section('tittle', 'Data Karyawan')
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
            <li class="breadcrumb-item active">Data Karyawan</li>
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
              <a href="{{ route('dataKaryawan.create') }}"><button type="submit" class="btn btn-outline-success">Tambah Data</button></a>
            </div>

            @if (session()->has('pesan'))
                <div class="alert alert-success">
                  {{ session()->get('pesan') }}
                </div>
            @endif
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-striped display responsive nowrap" style="width:100%" id="example">
                <thead>
                    <tr>
                        <th></th>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>No Telepon</th>
                        <th>Tanggal Lahir</th>
                        <th>Jabatan</th>
                        <th>Status</th>
                        <th>Tanggal Masuk</th>
                        <th>Pendidikan</th>
                        <th>Usia</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($dataKaryawan  as $item)
                  <tr>
                      <th></th>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>{{ $item->alamat }}</td>
                      <td>{{ $item->jenis_kelamin }}</td>
                      <td>{{ $item->no_telepon }}</td>
                      <td>{{ $item->tanggal_lahir }}</td>
                      <td>{{ $item->jabatan->nama_jabatan }}</td>
                      <td>{{ $item->status->status }}</td>
                      <td>{{ $item->tanggal_masuk }}</td>
                      <td>{{ $item->pendidikan->pendidikan }}</td>
                      <td>{{ $item->umur }}</td>
                      <td>
                        <form action="{{ route('dataKaryawan.edit', $item->id) }}" class="d-inline" method="POST">
                          @csrf
                          @method("GET")
                          <button type="submit" class="btn btn-success"><i class="fa fa-edit" style="font-size:24px;color: white"></i></button>
                        </form>
                        <form action="{{ route('dataKaryawan.destroy', $item->id) }}" class="d-inline" method="POST">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn btn-danger"><i class="fas fa-minus-circle"></i></button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table> 
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