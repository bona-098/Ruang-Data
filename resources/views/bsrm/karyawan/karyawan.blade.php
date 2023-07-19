@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Karyawan</h4>
                <br>
                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahKaryawan">
                    <i class="fa fa-user-plus"></i> Tambah Karyawan
                </button>
                <a button type="button" class="btn btn-primary" href="/import-karyawan">
                    <i class="fa fa-user-plus"></i> Import Karyawan
                </button></a>              {{-- <h6 class="card-subtitle">Data table example</h6> --}}
              <div class=" table-responsive"> 
                    <table text-align: left; id="myTable" class="table table-bordered table-striped" style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th style="white-space: nowrap;">NIK Telpro / Group</th>
                                {{-- <th style="white-space: nowrap;">NIK Telkom Group</th> --}}
                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                {{-- <th style="white-space: nowrap;">jenis Kelamin</th> --}}
                                <th style="white-space: nowrap;">Unit Kerja</th>
                                <th style="white-space: nowrap;">Loker</th>
                                <th>Jabatan</th>
                                <th>Band</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawan as $k)
                                <tr>
                                    <td style="white-space: nowrap;">{{ $k->nik }} / {{ $k->no_hp }}</td>
                                    <td style="white-space: nowrap;">{{ $k->nama_karyawan }}</td>
                                    <td style="white-space: nowrap;">{{ $k->unit_kerja }}</td>
                                    <td style="white-space: nowrap;">{{ $k->loker }}</td>
                                    <td style="white-space: nowrap;">{{ $k->jabatan }}</td>
                                    <td style="white-space: nowrap;">{{ $k->band_kelas_posisi }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Selesai --}}
        <!-- KONTEN MODAL TAMBAH KARYAWAN  -->
        <div class="modal fade" id="ModalTambahKaryawan" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
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
                                                <input type="number" name="nik" min="0" class="form-control"
                                                     @error('nik') is-invalid @enderror
                                                    value="{{ old('nik') }}">
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
                                                <input type="number" name="no_hp" min="0" class="form-control"
                                                    @error('no_hp') is-invalid @enderror
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
                                                <input type="text" class="form-control"
                                                    id="unit_kerja" name="unit_kerja">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label for="jalan">Alamat</label>
                                                <input type="text" class="form-control" name="jalan">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="loker">Loker</label>
                                                <input type="text"  class="form-control"
                                                    id="loker" name="loker">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text"  class="form-control"
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
        <!-- KONTEN MODAL TAMBAH KARYAWAN  -->

        <!-- Modal Delete Mitra -->
        @foreach ($karyawan as $m)
            @if (isset($m))
                <div class="modal fade" id="ModalDeleteKaryawan{{ $m->id }}" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                            </div>
                            <div class="modal-body">
                                Tindakan ini akan menghapus data tersebut dan data yang dihapus tidak dapat dikembalikan.
                                Apakah
                                Anda yakin ingin melanjutkan?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <form method="POST" action="{{ route('karyawan.destroy', $m->id) }}" id="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
