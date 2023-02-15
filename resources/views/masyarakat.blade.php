@extends('welcome')

@section('content')

<div class="container-lg bg-white">
<div class="row">
<div class="col-12">
    <div class="card bg-body-tertiary">
        <div class="card-body">
          <h5 class="card-title">Table Masyarakat</h5>
          <button type="button" class="btn btn-primary">Tambah Masyarakat</button>
          <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-uppercase text-info text-lg font-weight-bolder">
                        Nama Lengkap
                    </th>
                    <th class="text-uppercase text-info text-lg font-weight-bolder">
                        Username
                    </th>
                    <th class="text-uppercase text-info text-lg font-weight-bolder">
                        No Telpon
                    </th>
                    <th class="text-uppercase text-info text-lg font-weight-bolder">
                        Aksi
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($masya as $mas)    
                <tr>
                    <td>
                        {{$mas->nama_lengkap}}
                    </td>
                    <td>
                        {{$mas->username}}
                    </td>
                    <td>
                        {{$mas->telp}}
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-success">Edit</button>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        </div>
      </div>
   
</div>
</div>
</div>
@endsection