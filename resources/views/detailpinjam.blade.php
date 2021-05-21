@extends('layout.app')

@section('content')
<div class="content">
     <div class="container-fluid">
     <div class="row">
     </div>
          <div class="col-md-4">
               <div class="card">
                    <div class="card-header card-header-primary">
                         <h4 class="card-title ">Tambah Peminjam</h4>
                    </div>
                    <div class="card-body">
                         <div class="row">
                              <div class="col-md-12">
                                   <div class="form-group">
                                   <label for="nama_peminjam" class="bmd-label-floating" readonly>{{ $id_transaksi->id }}</label>
                                   <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam">
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-12">
                                   <div class="form-group">
                                   <label for="alamat" class="bmd-label-floating" readonly>{{ $id_transaksi->id }}</label>
                                   <input type="text" class="form-control" id="alamat" name="alamat">
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-12">
                                   <div class="form-group">
                                   <label for="telepon" class="bmd-label-floating" readonly>{{ $id_transaksi->id }}</label>
                                   <input type="text" class="form-control" id="telepon" name="telepon">
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-12">
                                   <div class="form-group">
                                   <label for="penerima" class="bmd-label-floating" readonly>{{ $id_transaksi->id }}</label>
                                   <input type="text" class="form-control" id="pemerima" name="penerima">
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection