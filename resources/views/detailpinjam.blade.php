@extends('layout.app')

@section('content')
<div class="content">
     <div class="container-fluid">
     <div class="row">
          <div class="col-md-4">
               <div class="card">
                    <div class="card-header card-header-primary">
                         <h4 class="card-title ">Tambah Peminjam</h4>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                              <table class="table">
                                   <tbody>
                                        <tr>
                                             <td>
                                                  {{ $id_transaksi->nama_peminjam }}
                                             </td>
                                        </tr>
                                        <tr>
                                             <td>
                                                  {{ $id_transaksi->alamat }}
                                             </td>
                                        </tr>
                                        <tr>
                                             <td>
                                                  {{ $id_transaksi->telepon }}
                                             </td>
                                        </tr>
                                        <tr>
                                             <td></td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                         <form method="POST" action="/pinjam/{{ $id_transaksi->id }}">
                              @method('post')
                              @csrf
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                        <select name="buku_id" class="dropdown-item2 form-control ">
                                             <option>Nama Buku</option>
                                             @foreach ($buku as $buku)
                                                  <option value="{{ $buku->id }}">{{ $buku->nama_buku }}</option>
                                             @endforeach
                                        </select>
                                        </div>
                                   </div>
                              </div>
                              <input type="hidden" class="form-control" name="transaksi_id" value="{{ $id_transaksi->id }}">
                              <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                         </form>
                         <form action="/pinjam/{{ $id_transaksi->id }}" method="post">
                              @method('patch')
                              @csrf
                              <button type="submit" class="btn btn-primary pull-left">Selesai</button>
                         </form>
                    </div>
               </div>
          </div>
          <div class="col-md-8">
               <div class="card">
                    <div class="card-header card-header-primary">
                         <h4 class="card-title ">Daftar Pinjaman</h4>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                         <table class="table">
                              <colgroup>
                                   <col span="1" style="width: 10%;">
                                   <col span="1" style="width: 90%;">
                              </colgroup>
                              <thead class=" text-primary">
                                   <th>
                                        No
                                   </th>
                                   <th>
                                        Nama Buku
                                   </th>
                              </thead>
                              <tbody>
                                   @foreach ($id_buku as $bukus)
                                   <tr>
                                        <td>
                                             {{ $loop->iteration }}
                                        </td>
                                        <td>
                                             {{ $bukus->nama_buku }}
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
</div>
@endsection