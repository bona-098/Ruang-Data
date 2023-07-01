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

                {{-- <h6 class="card-subtitle">Data table example</h6> --}}
                <div class=" table-responsive">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Action</th>
                                <th style="white-space: nowrap;">NIK Telpro</th>
                                <th style="white-space: nowrap;">NIK Telkom Grup</th>
                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                <th style="white-space: nowrap;">jenis Kelamin</th>
                                <th style="white-space: nowrap;">Unit Kerja</th>
                                <th style="white-space: nowrap;">Loker</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawan as $k)
                                <tr>
                                    <div class="dropdown">
                                        <td>
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-cog"> Aksi</i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{ route('karyawan.show', $k->id) }}"
                                                    target="_blank"><i class="fa fa-eye"></i> Detail</a>
                                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#ModalDeleteKaryawan"><i class="fa fa-trash"></i>
                                                    Delete</a>
                                            </div>
                                        </td>
                                    </div>
                                    <td>{{ $k->nik }}</td>
                                    <td>{{ $k->nik }}</td>
                                    <td style="white-space: nowrap;">{{ $k->nama_karyawan }}</td>
                                    <td>{{ $k->jenis_kelamin }}</td>
                                    <td style="white-space: nowrap;">{{ $k->unit_kerja }}</td>
                                    <td style="white-space: nowrap;">{{ $k->loker }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Selesai --}}

        {{-- KONTEN MODAL DETAIL --}}
        {{-- <div class="modal fade" id="ModalDetailKaryawan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Detail</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>

                    <form action="{{ route('karyawan.show', $k->id) }}" method="GET">
                        <div class="modal-body">
                            <div class="table-responsive ">
                                <table style="text-align: left;" class="table table-bordered ">
                                    <tbody>
                                        <tr>
                                            <th scope="row">NIK</th>
                                            <td>{{ $k->nama_karyawan }}</td>
                                        </tr> --}}
        {{-- <tr>
                                                <th scope="row">Nama Karyawan</th>
                                                <td>{{ $a->nama_karyawan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tanggal Lahir</th>
                                                <td>{{ $a->tgl_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kota Lahir</th>
                                                <td>{{ $a->kota_lahir }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Agama</th>
                                                <td>{{ $a->agama }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jenis Kelamin</th>
                                                <td>{{ $a->jenis_kelamin }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jalan</th>
                                                <td>{{ $a->jalan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Status Menikah</th>
                                                <td>{{ $a->nama_status_nikah }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Lokasi Kerja</th>
                                                <td>{{ $a->lokasi_kerja }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tanggal Mulai Bekerja</th>
                                                <td>{{ $a->tgl_mulai_bekerja }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tanggal Pegawai Perusahaan</th>
                                                <td>{{ $a->tgl_pegawai_perusahaan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tanggal Perkiraan Pensiun</th>
                                                <td>{{ $a->tgl_perkiraan_pensiun }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nama Divisi</th>
                                                <td>{{ $a->nama_divisi }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tanggal Divisi</th>
                                                <td>{{ $a->tgl_divisi }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kode Lokasi</th>
                                                <td>{{ $a->kode_loker }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Unit Kerja</th>
                                                <td>{{ $a->unit_kerja }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Loker</th>
                                                <td>{{ $a->loker }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tanggal Loker</th>
                                                <td>{{ $a->tgl_loker }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jabatan</th>
                                                <td>{{ $a->jabatan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Umur</th>
                                                <td>{{ $a->umur }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kelompok Usia</th>
                                                <td>{{ $a->kelompok_usia }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nama Employee Group</th>
                                                <td>{{ $a->nama_employee_group }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Employee Sub Group</th>
                                                <td>{{ $a->employee_sub_group }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Level Pendidikan Terakhir</th>
                                                <td>{{ $a->level_pendidikan_terakhir }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pendidikan</th>
                                                <td>{{ $a->pendidikan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Penyelenggara</th>
                                                <td>{{ $a->penyelenggara }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jumlah Anak</th>
                                                <td>{{ $a->jumlah_anak }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ADT Pajak</th>
                                                <td>{{ $a->adt_pajak }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">ADT Kesehatan</th>
                                                <td>{{ $a->adt_kesehatan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Jumlah Pasangan</th>
                                                <td>{{ $a->jumlah_pasangan }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Band Kelas Posisi</th>
                                                <td>{{ $a->band_kelas_posisi }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Kota</th>
                                                <td>{{ $a->kota }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">NPWP</th>
                                                <td>{{ $a->npwp }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomor Telkomedika</th>
                                                <td>{{ $a->no_telkomedika }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomor BPJS</th>
                                                <td>{{ $a->no_bpjs }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nomor Jamsostek</th>
                                                <td>{{ $a->no_jamsostek }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email</th>
                                                <td>{{ $a->email }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">No HP</th>
                                                <td>{{ $a->no_hp }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Keterangan Lanjut Kuliah</th>
                                                <td>{{ $a->keterangan_lanjut_kuliah }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pendidikan</th>
                                                <td>{{ $a->pendidikan_lanjut }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Penyelenggara</th>
                                                <td>{{ $a->penyelenggara_lanjut }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Ukuran Baju</th>
                                                <td>{{ $a->ukuran_baju }}</td>
                                            </tr> --}}
        {{-- @endforeach --}}
        {{-- </tbody>
                                        </table>
                                    </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        {{-- KONTEN MODAL DETAIL --}}

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
        <!-- KONTEN MODAL TAMBAH KARYAWAN  -->

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
