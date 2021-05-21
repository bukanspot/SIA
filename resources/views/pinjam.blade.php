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
                         <form method="POST" action="/pinjam">
                              @method('post')
                              @csrf
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="nama_peminjam" class="bmd-label-floating">Nama Peminjam</label>
                                        <input type="text" class="form-control" name="nama_peminjam">
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="alamat" class="bmd-label-floating">Alamat</label>
                                        <input type="text" class="form-control" name="alamat">
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="telepon" class="bmd-label-floating">No Telepon</label>
                                        <input type="number" class="form-control" name="telepon">
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                        <select name="pegawai_id" class="dropdown-item2 form-control ">
                                             <option>Penerima</option>
                                             @foreach ($pegawai as $pegawai)
                                                  <option value="{{ $pegawai->id }}">{{ $pegawai->nama_pegawai }}</option>
                                             @endforeach
                                        </select>
                                        </div>
                                   </div>
                              </div>
                                   <button type="submit" class="btn btn-primary pull-right">Next</button>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection