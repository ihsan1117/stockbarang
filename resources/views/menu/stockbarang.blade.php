@extends('layouts.main')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Stock Barang</h1>
        </ol>
        {{-- ALERT --}}
        @foreach($datas as $key => $item)
        @foreach($data_out as $key => $itemout)          
            @if($item->id == $itemout->idbarang)
                @if($item->qty - $itemout->stock <=5)
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ "ID Masuk (".$itemout->idbarang.") Memiliki Stock kurang dari 5 :(" }}</strong>
                    </div>
                @else
                    
                @endif
            @endif
        @endforeach
        @endforeach
        {{-- END ALERT --}}
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                </div>
            </div>
        </div>
        <div class="card mb-4">
            {{-- <div class="card-header">
                  <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Tambah Item
                    </button>
            </div> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id Masuk</th>
                                <th>Nama Barang</th>
                                <th>Quantity</th>
                                <th>Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $key => $item)
                            @foreach($data_out as $key => $itemout)                                
                            <tr>
                                @if($item->id == $itemout->idbarang)
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->namabarang }}</td>
                                    <td>{{ $item->qty - $itemout->stock}}</td>
                                    <td>{{ $item->penerima }}</td>
                                @elseif($item->id != $itemout->id) 
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->namabarang }}</td>
                                    <td>{{ $item->qty}}</td>
                                    <td>{{ $item->penerima }}</td>
                                @endif
                            </tr>
                            @endforeach
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
        <h4 class="modal-title">Tambah Item Masuk</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post">
            @csrf
        <div class="modal-body">

        {{-- <select name="barangnya" class="form-control"> --}}
            {{-- <?php
                $ambilsemuadatanya = mysqli_query($conn,"select * from stock");
                while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                    $namabarangnya = $fetcharray['namabarang'];
                    $idbarang = $fetcharray['idbarang'];
            ?>

            <option value="<?=$idbarangnya;?>"><?=$namabarangnya;?></option>

            <?php
                }
            ?> --}}
        {{-- </select> --}}
        <input type="text" name="namabarang" class="form-control" placeholder="Nama Barang" required>
        <br>
        <input type="number" name="qty" class="form-control" placeholder="Quantity" required>
        <br>
        <input type="text" name="penerima" class="form-control" placeholder="Penerima" required>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        
        
    </div>
    </div>
</div>
@endsection