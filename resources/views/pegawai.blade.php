@extends('layout.app')

@section('content')
<div class="content">
     <div class="container-fluid">
     <div class="row">
     <div class="col-md-8">
          <div class="card">
          <div class="card-header card-header-primary">
               <h4 class="card-title ">Daftar Pegawai</h4>
          </div>
          <div class="card-body">
               <div class="table-responsive">
               <table class="table">
                    <colgroup>
                         <col span="1" style="width: 10%;">
                         <col span="1" style="width: 25%;">
                         <col span="1" style="width: 15%;">
                         <col span="1" style="width: 25%;">
                         <col span="1" style="width: 20%;">
                    </colgroup>
                    <thead class=" text-primary">
                         <th>
                              No
                         </th>
                         <th>
                              Nama Pegawai
                         </th>
                         <th>
                              Jabatan
                         </th>
                         <th>
                              Alamat
                         </th>
                         <th>
                              Aksi
                         </th>
                    </thead>
                    <tbody>
                         @foreach ($pegawai as $pegawai)
                         <tr>
                              <td>
                                   {{ $loop->iteration }}
                              </td>
                              <td>
                                   {{ $pegawai->nama_pegawai }}
                              </td>
                              <td>
                                   {{ $pegawai->jabatan_pegawai->nama_jabatan }}
                              </td>
                              <td>
                                   {{ $pegawai->alamat }}
                              </td>
                              <td>
                                   <!-- Edit -->
                                   <button class="btn" data-toggle="modal" href="#edit{{ $pegawai->id }}">Edit</button>
                                   <div class="modal fade" id="edit{{ $pegawai->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                                        <form method="POST" action="/pegawai/{{ $pegawai->id }}">
                                             @method('patch')
                                             @csrf
                                             <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                       <div class="modal-header">
                                                       <h5 class="modal-title" id="edit">Edit Pegawai</h5>
                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                       </button>
                                                       </div>
                                                       <div class="modal-body">
                                                            <div class="col-md-12">
                                                                 <div class="row">
                                                                      <div class="col-md-12">
                                                                           <div class="form-group">
                                                                           <label for="nana_pegawai" class="bmd-label-floating">Nama Pegawai</label>
                                                                           <input type="text" class="form-control" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}">
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="row">
                                                                      <div class="col-md-12">
                                                                           <div class="form-group">
                                                                           <select name="jenis_id" class="dropdown-item2 form-control ">
                                                                                <option value={{ $pegawai->jabatan_pegawai->id }}>{{ $pegawai->jabatan_pegawai->nama_jabatan }}</option>
                                                                                @foreach ($jabatan as $editjabatan)
                                                                                     <option value="{{ $editjabatan->id }}">{{ $editjabatan->nama_jabatan }}</option>
                                                                                @endforeach
                                                                           </select>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="row">
                                                                      <div class="col-md-12">
                                                                           <div class="form-group">
                                                                           <label for="alamat" class="bmd-label-floating">Alamat</label>
                                                                           <input type="text" class="form-control" name="alamat" value="{{ $pegawai->alamat }}">
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                 <button type="submit" class="btn btn-primary">Edit</button>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </form>
                                   </div>
                                   <!-- Delete -->
                                   <button class="btn" data-toggle="modal" href="#delete{{ $pegawai->id }}">Hapus</button>
                                   <div class="modal fade" id="delete{{ $pegawai->id }}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                        <form method="POST" action="/pegawai/{{ $pegawai->id }}">
                                             @method('delete')
                                             @csrf
                                             <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                             <div class="modal-header">
                                             <h5 class="modal-title" id="delete">Delete Pegawai</h5>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                             </button>
                                             </div>
                                             <div class="modal-body">
                                                  <p>Apakah yakin mau menghapus "{{ $pegawai->nama_pegawai }}"?</p>
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
          <div class="col-md-4">
               <div class="card">
                    <div class="card-header card-header-primary">
                         <h4 class="card-title ">Tambah Pegawai</h4>
                    </div>
                    <div class="card-body">
                         <form method="POST" action="/pegawai">
                              @method('post')
                              @csrf
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="nama_pegawai" class="bmd-label-floating">Nama Pegawai</label>
                                        <input type="text" class="form-control" name="nama_pegawai">
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                        <select name="jabatan_pegawai_id" class="dropdown-item2 form-control ">
                                             <option>Jabatan</option>
                                             @foreach ($jabatan as $jabatan)
                                                  <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                             @endforeach
                                        </select>
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
                              </div>
                                   <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                              <div class="clearfix"></div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection