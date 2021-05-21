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
                                             <td>
                                                  {{ $id_transaksi->id }}
                                             </td>
                                        </tr>
                                        <tr>
                                             <td></td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div>
                         <form method="POST" action="/pinjam">
                              @method('post')
                              @csrf
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                        <select name="pegawai_id" class="dropdown-item2 form-control ">
                                             <option>Nama Buku</option>
                                             {{-- @foreach ($pegawai as $pegawai)
                                                  <option value="{{ $pegawai->id }}">{{ $pegawai->nama_pegawai }}</option>
                                             @endforeach --}}
                                        </select>
                                        </div>
                                   </div>
                              </div>
                                   <button class="btn btn-primary pull-left" href="#">Selesai</button>
                                   <button type="submit" class="btn btn-primary pull-right">Tambah</button>
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
                                   <col span="1" style="width: 55%;">
                                   <col span="1" style="width: 25%;">
                                   <col span="1" style="width: 10%;">
                              </colgroup>
                              <thead class=" text-primary">
                                   <th>
                                        No
                                   </th>
                                   <th>
                                        Nama Buku
                                   </th>
                                   <th>
                                        Jenis
                                   </th>
                                   <th>
                                        Aksi
                                   </th>
                              </thead>
                         </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection