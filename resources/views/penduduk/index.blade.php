@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Data Penduduk</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Penduduk</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
        <a href="/penduduk/form" class="btn btn-primary">Tambah Data</a>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                      <tr>
                      <th>NO</th>
                      <th>NIK</th>
                      <th>NAMA</th>
                      <th>TEMPAT/TGL LAHIR</th>
                      <th>JENIS KELAMIN</th>
                      <th>AGAMA</th>
                      <th>ALAMAT</th>
                      <th>HP</th>
                      <th>GAMPONG</th>
                      <th>ACTION</th>
                      </tr>
                  </thead>
                  <tbody>
                      @forelse ($penduduk as $item)
                      <tr>
                        <th scope="row">{{$nomor++}}</th>
                          <td>{{$item->nik}}</td>
                          <td>{{$item->nama}}</td>
                          <td>{{$item->tempat_lahir}}/{{date_format(date_create($item->tanggal_lahir),'d-M-Y')}}</td>
                          <td>{{$item->jenis_kelamin}}</td>
                          <td>{{$item->agama}}</td>
                          <td>{{$item->hp}}</td>
                          <td>{{$item->alamat}}</td>
                          <td>{{$item->gampongs->nama_gampong}}</td>
                          
                          <td>
                            <a href="/penduduk/edit/{{$item->id}}" class="btn btn-sm text-white btn-info"><i class="fa fa-pencil-alt"></i></a>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#a{{$item->id}}">
                                  <i class="fa fa-trash-alt"></i>
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="a{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                      </div>
                                      <div class="modal-body">
                                        Yakin ingin menghapus nama <b>{{$item->nama}}</b> ?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <form method="POST" action="/penduduk/{{$item->id}}">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-primary">Hapus</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </td>
                      </tr> 
                      @empty
                      <tr>
                          <td colspan="4">Belum Ada Data</td>
                      </tr>
                      @endforelse
  
                  </tbody>
                  </table>
              </div>
          <!-- /.card-body -->
  
          <!-- /.card-footer-->
      </div>
      <!-- /.card -->
  
      </section>
      <!-- /.content -->
  </div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
