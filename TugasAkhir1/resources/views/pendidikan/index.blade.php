@extends('layout.master')
@section('tittle', 'Pendidikan')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pendidikan</h1>
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
              <a href="{{ route('pendidikan.create') }}"><button type="submit" class="btn btn-outline-success">Tambah Data</button></a>
            </div>

            @if (session()->has('pesan'))
                <div class="alert alert-success">
                  {{ session()->get('pesan') }}
                </div>
            @endif
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($pendidikan as $item)
                  <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->pendidikan }}</td>
                      <td>
                        <form action="{{ route('pendidikan.edit', $item->id) }}" class="d-inline" method="POST">
                          @csrf
                          @method("GET")
                          <button type="submit" class="btn btn-success"><i class="fa fa-edit" style="font-size:24px;color: white"></i></button>
                        </form>
                        <form action="{{ route('pendidikan.destroy', $item->id) }}" class="d-inline" method="POST">
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