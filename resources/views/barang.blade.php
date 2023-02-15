@extends('welcome')

@section('content')

<div class="container-lg bg-white">
<div class="row">
<div class="col-12">
    <div class="card bg-body-tertiary">
        <div class="card-body">
          <h5 class="card-title">Table Barang</h5>
          <button type="button" class="btn btn-primary">Tambah Barang</button>
          <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-uppercase text-info text-lg font-weight-bolder">
                        Nama Barang
                    </th>
                    <th class="text-uppercase text-info text-lg font-weight-bolder">
                        Tanggal Barang
                    </th>
                    <th class="text-uppercase text-info text-lg font-weight-bolder">
                        Harga Awal
                    </th>
                    <th class="text-uppercase text-info text-lg font-weight-bolder">
                        Deskripsi
                    </th>
                    <th class="text-uppercase text-info text-lg font-weight-bolder">
                        Aksi
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($bar as $barang)    
                <tr>
                    <td>
                        {{$barang->nama_barang}}
                    </td>
                    <td>
                        {{$barang->tgl}}
                    </td>
                    <td>
                        {{$barang->harga_awal}}
                    </td>
                    <td>
                        {{$barang->deskripsi_barang}}
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