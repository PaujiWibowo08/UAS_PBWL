@extends('layouts/layouts')
@section('content')
<form method="POST" action="/createsupir">
  {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nama_supir">Nama Supir Bus</label>
            <input type="text" name="nama_supir" id="nama_supir" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat">
        </div>
    <button type="submit" class="btn btn-info">List</button>
    <a href="/bus"><button type="button" class="btn btn-success">Kembali</button></a>
    </div>
  </form>
@endsection