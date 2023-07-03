@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Karyawan : {{ $karyawan->nama_karyawan }}</h4>
                <button type="button" class=" btn btn-primary " id="dropdownMenuButton" data-toggle="dropdown"><i
                        class="fa fa-cog"></i>
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalUpdateKaryawan"
                        href="#">Update</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalDeleteKaryawan"
                        href="#">Delete</a>
                </div>
                <div style="margin-top: 20px;">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">NIK Telpro</th>
                                <td>{{ $karyawan->nik }}</td>
                            </tr>
                            <tr>
                                <th scope="row">NIK Telkom Grup</th>
                                <td>{{ $karyawan->nik  }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Karyawan</th>
                                <td>{{ $karyawan->nama_karyawan }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td>{{ $karyawan->tgl_lahir }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Kota Lahir</th>
                                <td>{{ $karyawan->kota_lahir }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Agama</th>
                                <td>{{ $karyawan->agama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>{{ $karyawan->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>{{ $karyawan->jalan }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Unit Kerja</th>
                                <td>{{ $karyawan->unit_kerja }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Loker</th>
                                <td>{{ $karyawan->loker }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jabatan</th>
                                <td>{{ $karyawan->jabatan }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Band Kelas Posisi</th>
                                <td>{{ $karyawan->band_kelas_posisi }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- KONTEN MODAL UPDATE KARYAWAN  -->
        <div class="modal fade" id="ModalUpdateKaryawan" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Karyawan</h5>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('karyawan.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">NIK Telpro</label>
                                            <input type="number" name="nik_telpro" min="0" class="form-control"
                                                placeholder="12345" @error('nik_telpro') is-invalid @enderror
                                                value="{{ old('nik_telpro') }}">
                                            @error('nik_telpro')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">NIK Telkom Grup</label>
                                            <input type="number" name="nik_telkom_grup" min="0"
                                                class="form-control" placeholder="12345"
                                                @error('nik_telkom_grup') is-invalid @enderror
                                                value="{{ old('nik_telkom_grup') }}">
                                            @error('nik_telkom_grup')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label for="nama_karyawan" class="control-label">Nama Karyawan</label>
                                            <input type="text" id="nama_karyawan"
                                                class="form-control form-control-danger" name="nama_karyawan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                                            <select class="form-control custom-select" id="jenis_kelamin"
                                                name="jenis_kelamin">
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="laki-laki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tgl_lahir" class="control-label">Tanggal Lahir</label>
                                            <input type="date" id="tgl_lahir" name="tgl_lahir"
                                                class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kota_lahir" class="control-label">Kota Lahir</label>
                                            <input type="text" id="kota_lahir" name="kota_lahir"
                                                class="form-control">
                                            <small class="form-control-feedback"> </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="agama" class="control-label">Agama</label>
                                            <select class="form-control custom-select" id="agama" name="agama">
                                                <option value="">Pilih Agama</option>
                                                <option value="islam">Islam</option>
                                                <option value="katolik">Kristen Katolik</option>
                                                <option value="kristen protestan">Kristen Protestan</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="budha">Budha</option>
                                                <option value="kong hucuh">Kong hucuh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="unit_kerja">Unit Kerja</label>
                                            <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control"
                                                id="unit_kerja" name="unit_kerja">
                                        </div>
                                    </div>
                                </div>
   
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label for="jalan">Alamat</label>
                                            <input type="text" class="form-control" name="alamat">
                                        </div>
                                    </div>
   
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="loker">Loker</label>
                                            <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control"
                                                id="loker" name="loker">
                                        </div>
                                    </div>
   
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jabatan">Jabatan</label>
                                            <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control"
                                                id="jabatan" name="jabatan">
                                        </div>
                                    </div>
   
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kelas Band Posisi</label>
                                            <select class="form-control custom-select" name="band_kelas_posisi">
                                                <option value="">Pilih Kelas Band Posisi</option>
                                                <option value="I">I</option>
                                                <option value="II">II</option>
                                                <option value="III">III</option>
                                                <option value="IV">IV</option>
                                                <option value="V">V</option>
                                                <option value="VI">VI</option>
                                                <option value="VII">VII</option>
                                            </select>
                                        </div>
                                    </div>
   
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- KONTEN MODAL UPDATE KARYAWAN  -->
   
     {{-- KONTEN MODAL DELETE KARYAWAN --}}
   
     <div class="modal fade" id="ModalDeleteKaryawan" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
             </div>
             <div class="modal-body">
                 Tindakan ini akan menghapus data tersebut dan data yang dihapus tidak dapat di kembalikan, apakah
                 anda
                 yakin ingin melanjutkan ?
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                 <form method="POST" id="delete-form">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-danger">Hapus</button>
                 </form>
             </div>
         </div>
     </div>
   </div>
   {{-- KONTEN MODAL DELETE KARYAWAN --}}
    </div>

@endsection
