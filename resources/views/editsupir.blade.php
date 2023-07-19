@extends('layouts/layouts')
@section('content')
<form method="POST" action="/updatesupir">
  {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" name="id" value="{{ $edit->id }}" hidden>
            <label for="nama_supir">Nama Supir</label>
            <input type="text" name="nama_supir" id="nama_supir" class="form-control" value="{{ $edit->nama_supir }}">
        </div>
        <div class="form-group col-md-6">
            <label for="alamat">alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $edit->alamat }}">
        </div>
    <button type="submit" class="btn btn-info">Edit</button>
    <a href="/supir"><button type="button" class="btn btn-success">Kembali</button></a>
    </div>
  </form>
@endsection