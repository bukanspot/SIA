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
                                   <button type="submit" class="btn btn-primary pull-right">Next</button>
                         </form>
                    </div>
               </div>
          </div>
          <div class="col-md-8">
               <div class="card">
               <div class="card-header card-header-primary">
                    <h4 class="card-title ">Daftar Peminjam</h4>
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                         <colgroup>
                              <col span="1" style="width: 10%;">
                              <col span="1" style="width: 80%;">
                              <col span="1" style="width: 10%;">
                         </colgroup>
                         <thead class=" text-primary">
                              <th>
                                   No
                              </th>
                              <th>
                                   Nama Peminjam
                              </th>
                              <th>
                                   Aksi
                              </th>
                         </thead>
                         <tbody>
                              @foreach ($transaksi as $transaksi)
                              <tr>
                                   <td>
                                        {{ $loop->iteration }}
                                   </td>
                                   <td>
                                        {{ $transaksi->nama_peminjam }}
                                   </td>
                                   <td>
                                        <!-- Kembali -->
                                        <button class="btn" data-toggle="modal" href="#kembali{{ $transaksi->id }}">Kembali</button>
                                        <div class="modal fade" id="kembali{{ $transaksi->id }}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                             <form method="POST" action="/kembali/{{ $transaksi->id }}">
                                                  @method('patch')
                                                  @csrf
                                                  <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                  <div class="modal-header">
                                                  <h5 class="modal-title" id="kembali">kembali</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                  </button>
                                                  </div>
                                                  <div class="modal-body">
                                                       <p>Apakah yakin datanya sudah benar?</p>
                                                       <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Iya</button>
                                                       </div>
                                                  </div>
                                                  </div>
                                             </form>
                                        </div>
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