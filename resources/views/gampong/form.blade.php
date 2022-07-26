@extends('layouts.master')

@section('content')
    <div class="card">
      <div class="card-header">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">FORM TAMBAH GAMPONG</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="/gampong/store">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">NAMA GAMPONG</label>
                <input type="text"  name="nm" class="form-control" id="exampleInputEmail1" placeholder="NIK">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">LUAS GAMPONG</label>
                <input type="text"  name="luas" class="form-control" id="exampleInputEmail1" placeholder="NAMA">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Tambah Data</button>
              <a href="/gampong" class="btn btn-warning">Batal</a>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection