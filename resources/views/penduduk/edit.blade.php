@extends('layouts.master')

@section('content')
    <div class="card">
      <div class="card-header">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">FORM EDIT PENDUDUK</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="/penduduk/{{$penduduk->id}}">
            @csrf
            @method('PUT')

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">NIK</label>
                <input type="text" value="{{$penduduk->nik}}" name="nik" class="form-control" id="exampleInputEmail1" placeholder="NIK">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">NAMA</label>
                <input type="text"  name="nm" value="{{$penduduk->nm}}" class="form-control" id="exampleInputEmail1" placeholder="NAMA">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">TEMPAT LAHIR</label>
                <input type="text" value="{{$penduduk->tmpt}}"  name="tmpt" class="form-control" id="exampleInputEmail1" placeholder="TEMPAT LAHIR">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">TANGGAL LAHIR</label>
                <input type="date" value="{{$penduduk->tgl}}"  name="tgl" class="form-control" id="exampleInputEmail1" placeholder="TANGGAL LAHIR">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">JENIS KELAMIN</label>
                <input type="text" value="{{$penduduk->jns}}" name="jns" class="form-control" id="exampleInputEmail1" placeholder="JENIS KELAMIN">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">AGAMA</label>
                <input type="text" value="{{$penduduk->agm}}" name="agm" class="form-control" id="exampleInputEmail1" placeholder="AGAMA">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">ALAMAT</label>
                <input type="text" value="{{$penduduk->almt}}" name="almt" class="form-control" id="exampleInputEmail1" placeholder="ALAMAT">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">hp</label>
                <input type="text" value="{{$penduduk->hp}}" name="hp" class="form-control" id="exampleInputEmail1" placeholder="hp">
              </div>
              {{-- <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">NAMA GAMPONG</label>
                <select name="nama_gampong" class="form-control">
                    <option value="">-Pilih Gampong-</option>
                    @foreach ($gampong as $item)
                        <option value="{{$item->id}}">{{$item->nama_gampong}}</option>  
                    @endforeach
                </select>
            </div> --}}
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