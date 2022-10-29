@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Inventaris</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Data Inventaris</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            
            <div class="card">
                <div class="card-header bg-dark">
                  <a href="/data-inventaris/create" class="btn btn-primary btn-sm"><i class='fas fa-plus'></i>  Insert new data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nomor Seri</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nomor_seri }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>
                                    <a href="#" class="badge bg-warning"><i class='fas fa-pen-alt'></i></a>
                                    <a href="#" class="badge bg-danger"><i class='fas fa-trash'></i></a>
                                </td>
                            </tr>  
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nomor Seri</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
            </div>            

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content --> 
@endsection