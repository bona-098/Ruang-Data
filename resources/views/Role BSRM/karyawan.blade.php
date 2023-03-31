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
                <div class="table-responsive ">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Action</th>
                                <th>Name</th>
                                <th>Nik</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Start date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawan as $k)
                                <tr>
                                    <td>
                                        <div class="dropdown text-center">
                                            <button class="btn btn-success dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i class="fa fa-cog"></i>
                                                action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#ModalDetailKaryawan" 
                                                    href="{{ route('karyawan.show', $k->id) }}">Detail</a>
                                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#ModalUpdateKaryawan" 
                                                    href="{{ route('karyawan.edit', $k->id) }}">Update</a>
                                                <form action="{{ route('karyawan.destroy', $k->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                </form>
                                                <button class="dropdown-item" type="submit" data-toggle="modal"
                                                    data-target="#ModalDeleteKaryawan" href="#">Delete</button>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $k->nama_karyawan }}</td>
                                    <td>{{ $k->nik }}</td>
                                    <td>{{ $k->jabatan }}</td>
                                    <td>{{ $k->unit_kerja }}</td>
                                    <td>{{ $k->umur }}</td>
                                    <td>{{ $k->umur }}</td>
                                    <td>{{ $k->umur }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Selesai --}}

        {{-- KONTEN MODAL DETAIL --}}
        <div class="modal fade" id="ModalDetailKaryawan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                            </tr>
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
                                        </tbody>
                                    </table>
                                {{-- @endforeach --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                                                    <label class="control-label">NIK</label>
                                                    <input type="number" name="nik" min="0" id="NIK"
                                                        class="form-control" placeholder="12345"
                                                        @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                                                    @error('nik')
                                                        <div class="alert alert-danger mt-2">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label for="nama_karyawan" class="control-label">Nama</label>
                                                    <input type="text" id="nama_karyawan"
                                                        class="form-control form-control-danger" placeholder="Pitir Parkir"
                                                        name="nama_karyawan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                                                    <select class="form-control custom-select" id="jenis_kelamin" name="jenis_kelamin">
                                                        <option value="laki-laki">Laki-laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tgl_lahir" class="control-label">Tanggal Lahir</label>
                                                    <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control"
                                                        placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
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
                                                        <option value="islam">Islam</option>
                                                        <option value="katolik">Kristen Katolik</option>
                                                        <option value="kristen protestan">Kristen Protestan</option>
                                                        <option value="hindu">Hindu</option>
                                                        <option value="budha">Budha</option>
                                                        <option value="kong hucuh">Kong hucuh</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label for="jalan">Alamat</label>
                                                    <input type="text" class="form-control" id="jalan" name="jalan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_status_nikah" class="control-label">Status Menikah</label>
                                                    <select class="form-control custom-select" id="nama_status_nikah" name="nama_status_nikah">
                                                        <option value="belum menikah">Belum Menikah</option>
                                                        <option value="menikah">Menikah</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lokasi_kerja">Lokasi Kerja</label>
                                                    <input type="text" class="form-control" id="lokasi_kerja" name="lokasi_kerja">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tgl_mulai_kerja" class="control-label">Tanggal Mulai Bekerja</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="tgl_mulai_kerja"
                                                        name="tgl_mulai_kerja">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tgl_pegawai_perusahaan" class="control-label">Tanggal Pegawai Perusahaan</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="tgl_pegawai_perusahaan"
                                                        name="tgl_pegawai_perusahaan">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tgl_perkiraan_pensiun" class="control-label">Tanggal Perkiraan Pensiun</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="tgl_perkiraan_pensiun"
                                                        name="tgl_perkiraan_pensiun">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_divisi">Nama Divisi</label>
                                                    <input type="text" class="form-control" id="nama_divisi" name="nama_divisi">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tgl_divisi" class="control-label">Tanggal Divisi</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="tgl_divisi"
                                                        name="tgl_divisi">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kode_loker">Kode Loker</label>
                                                    <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control" id="kode_loker"
                                                        name="kode_loker">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="unit_kerja">Unit Kerja</label>
                                                    <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control" id="unit_kerja"
                                                        name="unit_kerja">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="loker">Loker</label>
                                                    <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control" id="loker"
                                                        name="loker">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tgl_loker" class="control-label">Tanggal Loker</label>
                                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" id="tgl_loker"
                                                        name="tgl_loker">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kode_posisi" class="control-label">Kode Posisi</label>
                                                    <input type="text" class="form-control" placeholder="dd/mm/yyyy" id="kode_posisi"
                                                        name="kode_posisi">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jabatan">Jabatan</label>
                                                    <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control" id="jabatan"
                                                        name="jabatan">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="umur">Umur</label>
                                                    <input type="number" class="form-control" id="umur" name="umur">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kelompok_usia">kelompok Umur</label>
                                                    <input type="number" class="form-control" id="kelompok_usia" name="kelompok_usia">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_employee_group" class="control-label">Nama Employee Group</label>
                                                    <select class="form-control custom-select" id="nama_employee_group" name="nama_employee_group">
                                                        <option value="karyawan tetap">Karyawan Tetap</option>
                                                        <option value="karyawan tidak tetap">Karyawan Tidak Tetap</option>
                                                        <option value="tkwt">TKWT</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="employee_sub_group" class="control-label">Employee Sub Group</label>
                                                    <select class="form-control custom-select" id="employee_sub_group" name="employee_sub_group">
                                                        <option value="aktif normal">Aktif Normal</option>
                                                        <option value="tidak aktif">Tidak Aktif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="level_pendidikan_terakhir" class="control-label">Pendidikan Terakhir</label>
                                                    <select class="form-control custom-select" id="level_pendidikan_terakhir"
                                                        name="level_pendidikan_terakhir">
                                                        <option value="SMA">SMA</option>
                                                        <option value="SMK">SMK</option>
                                                        <option value="D3">D3</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pendidikan">Jurusan/Program Studi</label>
                                                    <input type="text" class="form-control" id="pendidikan" name="pendidikan">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="penyelenggara">Penyelenggara</label>
                                                    <input type="text" class="form-control" id="penyelenggara" name="penyelenggara">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jumlah_anak">Jumlah Anak</label>
                                                    <input type="number" class="form-control" id="jumlah_anak" name="jumlah_anak">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adt_pajak">Anak Dalam Tanggungan Pajak</label>
                                                    <input type="number" class="form-control" id="adt_pajak" name="adt_pajak">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="adt_kesehatan">Anak Dalam Tanggungan Kesehatan</label>
                                                    <input type="number" class="form-control" id="adt_kesehatan" name="adt_kesehatan">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jumlah_pasangan">Jumlah Pasangan</label>
                                                    <input type="number" class="form-control" id="jumlah_pasangan" name="jumlah_pasangan">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="band_kelas_posisi" class="control-label">Band Kelas Posisi</label>
                                                    <select class="form-control custom-select" id="band_kelas_posisi"
                                                        name="band_kelas_posisi">
                                                        <option value="I">I</option>
                                                        <option value="II">II</option>
                                                        <option value="III">III</option>
                                                        <option value="IV">IV</option>
                                                        <option value="V">V</option>
                                                        <option value="VI">VI</option>
                                                        <option value="VII">VII</option>
                                                        <option value="VIII">VIII</option>
                                                        <option value="IX">IX</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kota">Kota</label>
                                                    <input type="text" class="form-control" id="kota" name="kota">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="npwp">NPWP</label>
                                                    <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control" id="npwp"
                                                        name="npwp">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_telkomedika" >Nomor Telkomedika</label>
                                                    <input type="number" class="form-control" id="no_telkomedika" name="no_telkomedika">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_bpjs">Nomor BPJS Kesehatan</label>
                                                    <input type="number" class="form-control" id="bpjs" name="no_bpjs">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_jamsostek">Nomor Jamsostek</label>
                                                    <input type="text" class="form-control" id="no_jamsostek" name="no_jamsostek">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control" id="email" name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_hp">Nomor Hp</label>
                                                    <input type="text" class="form-control" id="no_hp" name="no_hp">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="keterangan_lanjut_kuliah" class="control-label">Keterangan Lanjut Pendidikan</label>
                                                    <select class="form-control custom-select" id="keterangan_lanjut_kuliah"
                                                        name="keterangan_lanjut_kuliah">
                                                        <option value="D1">D1</option>
                                                        <option value="D2">D2</option>
                                                        <option value="D3">D3</option>
                                                        <option value="D4/S1">D4/S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="pendidikan_lanjut">Jurusan/Program Studi</label>
                                                    <input type="text" class="form-control" id="pendidikan_lanjut" name="pendidikan_lanjut">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="penyelenggara_lanjut">Penyelenggara</label>
                                                    <input type="text" class="form-control" id="penyelenggara_lanjut" name="penyelenggara_lanjut">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ukuran_baju">Penyelenggara</label>
                                                    <input type="text" class="form-control" id="uran_baju" name="ukuran_baju">
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
    </div>
    <!-- KONTEN MODAL TAMBAH KARYAWAN  -->

    <!-- KONTEN MODAL UPDATE KARYAWAN  -->
    <div class="modal fade" id="ModalUpdateKaryawan" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Karyawan</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('karyawan.store') }}"></form>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="#">
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nik" class="control-label">NIK</label>
                                            <input type="number" min="0" id="nik" class="form-control"
                                                name="nik">
                                            {{-- <small class="form-control-feedback"> Feedback salah </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label for="name" class="control-label">Nama</label>
                                            <input type="text" id="name" class="form-control form-control-danger"
                                                placeholder="Pitir Parkir">
                                            {{-- <small class="form-control-feedback"> This field has error. </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Jenis Kelamin</label>
                                            <select class="form-control custom-select">
                                                <option value="">Laki-laki</option>
                                                <option value="">Perempuan</option>
                                            </select>
                                            {{-- <small class="form-control-feedback"> Select your gender </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kota Lahir</label>
                                            <input type="text" id="kota_lahir" class="form-control">
                                            <small class="form-control-feedback"> </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Agama</label>
                                            <select class="form-control custom-select">
                                                <option value="">Islam</option>
                                                <option value="">Kristen Katolik</option>
                                                <option value="">Kristen Protestan</option>
                                                <option value="">Hindu</option>
                                                <option value="">Budha</option>
                                                <option value="">Kong hucuh</option>
                                            </select>
                                            {{-- <small class="form-control-feedback"> Select your religion </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Status Menikah</label>
                                            <select class="form-control custom-select">
                                                <option value="">Belum Menikah</option>
                                                <option value="">Menikah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Lokasi Kerja</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Mulai Bekerja</label>
                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Pegawai Perusahaan</label>
                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Perkiraan Pensiun</label>
                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Divisi</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Divisi</label>
                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kode Loker</label>
                                            <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Unit Kerja</label>
                                            <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Loker</label>
                                            <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Loker</label>
                                            <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jabatan</label>
                                            <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Umur</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>kelompok Umur</label>
                                            <input type="number" class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Employee Group</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Employee Group</label>
                                            <select class="form-control custom-select">
                                                <option value="">Karyawan Tetap</option>
                                                <option value="">Karyawan Tidak Tetap</option>
                                            </select>
                                            {{-- <small class="form-control-feedback"> Select your gender </small> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Employee Sub Group</label>
                                            <select class="form-control custom-select">
                                                <option value="">Aktif Normal</option>
                                                <option value="">Tidak Aktif</option>
                                            </select>
                                            {{-- <small class="form-control-feedback"> Select your group </small> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Pendidikan Terakhir</label>
                                            <select class="form-control custom-select" id="pendidikan" name="pendidikan">
                                                <option value="SMA">SMA</option>
                                                <option value="SMK">SMK</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                            {{-- <small class="form-control-feedback"> Pilih Pendidikan Terakhir </small> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jurusan/Program Studi</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Penyelenggara</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Anak</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Anak Dalam Tanggungan Pajak</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Anak Dalam Tanggungan Kesehatan</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jumlah Pasangan</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Band Kelas Posisi</label>
                                            <select class="form-control custom-select" id="pendidikan" name="pendidikan">
                                                <option value="SMA">I</option>
                                                <option value="SMK">II</option>
                                                <option value="D3">III</option>
                                                <option value="S1">IV</option>
                                                <option value="S2">V</option>
                                                <option value="S3">VI</option>
                                                <option value="S3">VII</option>
                                                <option value="S3">VIII</option>
                                                <option value="S3">IX</option>
                                            </select>
                                            {{-- <small class="form-control-feedback"> Pilih Pendidikan Terakhir </small> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Kota</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>NPWP</label>
                                            <input type="text" pattern="[a-zA-Z0-9\-@]+" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nomor Telkomedika</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nomor BPJS Kesehatan</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nomor Jamsostek</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nomor Hp</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Keterangan Lanjut Pendidikan</label>
                                            <select class="form-control custom-select" id="pendidikan" name="pendidikan">
                                                <option value="SMA">D1</option>
                                                <option value="SMK">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="S1">D4/S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                            {{-- <small class="form-control-feedback"> Pilih Pendidikan Terakhir </small> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jurusan/Program Studi</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Penyelenggara</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                            {{-- <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                        Save</button>
                                    <button type="button" class="btn btn-inverse">Cancel</button>
                                </div> --}}
                        </form>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- KONTEN MODAL UPDATE KARYAWAN  -->

    {{-- KONTEN MODAL DELETE KARYAWAN --}}

    {{-- <div class="modal fade" id="ModalDeleteKaryawan" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda ingin menghapus ....?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- KONTEN MODAL DELETE KARYAWAN --}}
    </div>
@endsection
