@extends('layouts/layouts')
@section('content')
<form method="POST" action="/updatebus">
  {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-6">
            <input type="text" name="id" value="{{ $edit->id }}" hidden>
            <label for="Merek">Merek Bus</label>
            <input type="text" name="merek" id="Merek" class="form-control" value="{{ $edit->merek }}">
        </div>
        <div class="form-group col-md-6">
            <label for="nostnk">No STNK</label>
            <input type="text" name="nostnk" class="form-control" id="nostnk" value="{{ $edit->nostnk }}">
        </div>
    <button type="submit" class="btn btn-info">Edit</button>
    <a href="/bus"><button type="button" class="btn btn-success">Kembali</button></a>
    </div>
  </form>
@endsection