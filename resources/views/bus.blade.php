@extends('layouts/layouts')
@section('content')

<div class="row">

      <div class="col-3">
        <div class="card text-center">
          <div class="card-header">
            Jumlah Jadwal
          </div>
          <div class="card-body">
            <h1 class="card-title">{{ $data }}</h1>
            <p class="card-text">ada sebanyak {{ $data }} jadwal</p>
          </div>
        </div>

    </div>
    <div class="col-9">
        <a href="/inputbus" type="button" class="btn btn-success">Register Bus</button></a>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Merek Bus</th>
                <th>NO STNK</th>
                <th>Status</th>
                <th>Edit</th>
              </tr>
            </thead>
            <?php $i=1 ?>
        @foreach ($alldata as $data)      
            <tbody>
              <tr>
                <td><?= $i++ ?></td>
                <td>{{ $data->merek }}</td>
                <td>{{ $data->nostnk }}</td>
                <td><a href="/hapusbus/{{ $data->id }}"><button type="button" class="btn btn-success">Hapus</button></a></td>
                <td><a href="/editbus/{{ $data->id }}"><button type="button" class="btn btn-info">Edit</button></a></td>
              </tr>
            </tbody>
            @endforeach
          </table>
    </div>
</div>
@endsection