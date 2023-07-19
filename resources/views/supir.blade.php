@extends('layouts/layouts')
@section('content')

<div class="row">

      <div class="col-3">
        <div class="card text-center">
          <div class="card-header">
            Jumlah Supir
          </div>
          <div class="card-body">
            <h1 class="card-title">{{ $data }}</h1>
            <p class="card-text">ada sebanyak {{ $data }} Supir</p>
          </div>
        </div>

    </div>
    <div class="col-9">
        <a href="/inputsupir" type="button" class="btn btn-success">Register supir</button></a>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama supir</th>
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
                <td>{{ $data->nama_supir }}</td>
                <td>{{ $data->alamat }}</td>
                <td><a href="/hapussupir/{{ $data->id }}"><button type="button" class="btn btn-success">Hapus</button></a></td>
                <td><a href="/editsupir/{{ $data->id }}"><button type="button" class="btn btn-info">Edit</button></a></td>
              </tr>
            </tbody>
            @endforeach
          </table>
    </div>
</div>
@endsection