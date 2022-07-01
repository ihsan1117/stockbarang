@extends('layouts.main')
@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Barang Masuk</h1>
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
                                <th>Id Masuk</th>
                                <th>Nama Barang</th>
                                <th>Quantity</th>
                                <th>Penerima</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datas as $key => $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->namabarang }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->penerima }}</td>
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
        <h4 class="modal-title">Tambah Item Masuk</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post" action="{{ route('storepemasukan') }}">
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