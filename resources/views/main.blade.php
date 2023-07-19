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
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Jenis Bus</th>
                <th>Nama supir</th>
                <th>Tempat Berangkat</th>
                <th>Tujuan</th>
                <th>Status</th>
                <th>Edit</th>
              </tr>
            </thead>
            <?php $i=1 ?>
        @foreach ($alldata as $data)      
            <tbody>
              <tr>
                <td><?= $i++ ?></td>
                <td>{{ $data->bus->merek }}</td>
                <td>{{ $data->supir->nama_supir }}</td>
                <td>{{ $data->tempat_berangkat }}</td>
                <td>{{ $data->tujuan }}</td>
                <td><a href="/berangkat/{{ $data->id }}"><button type="button" class="btn btn-success">Berangkat</button></a></td>
                <td><a href="/edit/{{ $data->id }}"><button type="button" class="btn btn-info">Edit</button></a></td>
              </tr>
            </tbody>
            @endforeach
          </table>
    </div>
</div>
@endsection