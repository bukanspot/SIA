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
                                   <col span="1" style="width: 80%;">
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
                                        Aksi
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
                                        <td>
                                             <!-- Delete -->
                                             <button class="btn" data-toggle="modal" href="#delete{{ $bukus->id }}">Hapus</button>
                                             <div class="modal fade" id="delete{{ $bukus->id }}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                                  <form method="POST" action="/buku/{{ $bukus->id }}">
                                                       @method('delete')
                                                       @csrf
                                                       <div class="modal-dialog" role="document">
                                                       <div class="modal-content">
                                                       <div class="modal-header">
                                                       <h5 class="modal-title" id="delete">Delete Buku</h5>
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                       </button>
                                                       </div>
                                                       <div class="modal-body">
                                                            <p>Apakah yakin mau menghapus "{{ $bukus->nama_buku }}"?</p>
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
</div>
@endsection