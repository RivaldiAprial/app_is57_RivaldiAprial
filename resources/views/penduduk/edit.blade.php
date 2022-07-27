@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Form Edit Penduduk</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Form Edit Penduduk</li>
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
            <form class="form-horizontal" action="/penduduk/{{$penduduk->id}}" method="POST">
                @csrf
                @method('PUT')

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">NIK</label>
                <input type="text" value="{{$penduduk->nik}}" name="nik" class="form-control" id="exampleInputEmail1" placeholder="NIK">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">NAMA</label>
                <input type="text"  name="nm" value="{{$penduduk->nama}}" class="form-control" id="exampleInputEmail1" placeholder="NAMA">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">TEMPAT LAHIR</label>
                <input type="text" value="{{$penduduk->tempat_lahir}}"  name="tmpt" class="form-control" id="exampleInputEmail1" placeholder="TEMPAT LAHIR">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">TANGGAL LAHIR</label>
                <input type="date" value="{{$penduduk->tanggal_lahir}}"  name="tgl" class="form-control" id="exampleInputEmail1" placeholder="TANGGAL LAHIR">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">JENIS KELAMIN</label>
                <input type="text" value="{{$penduduk->jenis_kelamin}}" name="jns" class="form-control" id="exampleInputEmail1" placeholder="JENIS KELAMIN">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">AGAMA</label>
                <input type="text" value="{{$penduduk->agama}}" name="agm" class="form-control" id="exampleInputEmail1" placeholder="AGAMA">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">ALAMAT</label>
                <input type="text" value="{{$penduduk->alamat}}" name="almt" class="form-control" id="exampleInputEmail1" placeholder="ALAMAT">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">hp</label>
                <input type="text" value="{{$penduduk->hp}}" name="hp" class="form-control" id="exampleInputEmail1" placeholder="hp">
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Gampong</label>
                <div class="col-sm-10">
                  {{-- <input type="text" class="form-control" id="inputPassword3" name="nama"> --}}
                  <select name="nama_gampong" class="form-control" id="">
                    <option value="">-Pilih Gampong-</option>
                    @foreach ($gampong as $item)
                      <option value="{{$item->id}}" {{$penduduk->gampongs_id==$item->id ? 'selected' : ''}}>{{$item->nama_gampong}}</option>
                    @endforeach
                    
                  </select>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Edit Data</button>
                <a href="/penduduk" class="btn btn-warning">Batal</a>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection