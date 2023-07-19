@extends('layouts/layouts')
@section('content')
<form method="POST" action="/create">
  {{ csrf_field() }}
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Merek">Merek Bus</label>
        <select id="merek" name="merek" class="form-control">
            @foreach ($alldata as $data)
            <option value="{{ $data->id }}">{{ $data->bus->merek }}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="supir">Supir</label>
        <select id="supir" name="supir" class="form-control">
          @foreach ($alldata as $data)
            <option value="{{ $data->id }}">{{ $data->supir->nama_supir }}</option>
            @endforeach
          </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Dari</label>
      <input type="text" name="tempat_berangkat" class="form-control" id="inputAddress">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Ke</label>
      <input type="text" name="tujuan" class="form-control" id="inputAddress2">
    </div>
    <button type="submit" class="btn btn-info">List</button>
    <a href="/"><button type="button" class="btn btn-success">Kembali</button></a>
  </form>
@endsection