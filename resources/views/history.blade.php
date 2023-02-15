@extends('welcome')

@section('content')

<div class="container-lg bg-white">
<div class="row">
<div class="col-12">
    <div class="card bg-body-tertiary">
        <div class="card-body">
          <h5 class="card-title">Table History</h5>
          
          <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-uppercase text-info text-lg font-weight-bolder">
                        Nama Lengkap
                    </th>
                    <th class="text-uppercase text-info text-lg font-weight-bolder">
                        Nama Barang
                    </th>
                    
                    <th class="text-uppercase text-info text-lg font-weight-bolder">
                        Harga Akhir
                    </th>
                   
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($his as $history)    
                <tr>
                    <td>
                        {{$history->nama_lengkap}}
                    </td>
                    <td>
                        {{$history->nama_barang}}
                    </td>
                    <td>
                        {{$history->penawaran_harga}}
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