@extends('layouts.main')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Barang Keluar</h1>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                  <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Tambah Item
                    </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Barang</th>
                                <th>Nama Barang</th>
                                <th>Penerima</th>
                                <th>Stock</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp
                            @foreach($datas as $key => $item)
                            <tr>
                                @php
                                    $no++;                                    
                                @endphp
                                <td>{{ $no }}</td>
                                <td>{{ $item->idbarang }}</td>
                                <td>{{ $item->namabarang }}</td>
                                <td>{{ $item->penerima }}</td>
                                <td>{{ $item->stock }}</td>
                                <td>{{ $item->deskripsi }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@stop
@section('bottom_modal')
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
    <div class="modal-content">
    
        <!-- Modal Header -->
        <div class="modal-header">
        <h4 class="modal-title">Tambah Item Keluar</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="get" action="{{ route('storepengeluaran') }}">
        <div class="modal-body">
        <select name="idbarang" id="idbarang" class="form-control" placeholder="Nama Barang">
            <option value="">Pilih Nama Barang</option>              
            @foreach($drpdwn_barang as $key => $itembrg)
                <option value="{{ $id = $itembrg->id }}"">{{ $itembrg->namabarang }}</option>        
            @endforeach
        </select>
            <input type="hidden"  name="namabarang" id="namabarang" class="form-control">
        <br>
        <input type="text" name="deskripsi" placeholder="Deskripsi Barang" class="form-control" required>
        <br>
        <input type="text" name="penerima" placeholder="Penerima" class="form-control" required>
        <br>
        <input type="number" name="stock" class="form-control" placeholder="Stock" required>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>      
    </div>
    </div>
</div>
@stop
@section('botscript')
<script type="text/javascript">
    // console.log(ddwn_namabrg)
    $( "#idbarang" ).change(function() {
        var ddwn_idbarang = document.getElementById("idbarang");
        var namabarang = ddwn_idbarang.options[ddwn_idbarang.selectedIndex].text;
        // document.getElementById("idbarang").value = ddwn_namabrg.options[ddwn_namabrg.selectedIndex].text;
        document.getElementById("namabarang").value = namabarang;
        // alert( "Handler for .change() called." + namabarang );   
    });
</script>
@endsection