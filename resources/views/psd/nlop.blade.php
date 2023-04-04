@extends('layout.layout')
@section('content')
<h1>nlop</h1>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-bar-chart-o f-s-40 color-primary"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>568120</h2>
                            <a href="https://www.youtube.com/watch?v=6_UhNE5qVX4">
                                <p class="m-b-0">Perfomance</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-handshake-o f-s-40 color-success"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>1178</h2>
                            <p class="m-b-0">Mitra</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-users f-s-40 color-warning"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            {{-- <h2>{{ $karyawan->count() }}</h2> --}}
                            <p class="m-b-0">Karyawan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-users f-s-40 color-danger"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>847</h2>
                            <p class="m-b-0">Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
                                <th>Action</th>
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
                            {{-- @foreach ($karyawan as $k) --}}
                                
                            <tr>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="fa fa-cog"></i>
                                            action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#ModalDetailKaryawan"
                                                href="#">Detail</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#ModalUpdateKaryawan"
                                                href="#">Update</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#ModalDeleteKaryawan"
                                                href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                                {{-- <td>{{ $k->nama_karyawan }}</td>
                                <td>{{ $k->nik }}</td>
                                <td>{{ $k->tgl_lahir }}</td>
                                <td>{{ $k->kota_lahir }}</td>
                                <td>{{ $k->jenis_kelamin }}</td>
                                <td>{{ $k->tgl_mulai_bekerja }}</td>
                                <td>{{ $k->tgl_pegawai_perusahaan }}</td> --}}
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Selesai --}}

        <!-- /# row -->
        {{-- KONTEN MODAL DETAIL--}}
        <div class="modal fade" id="ModalDetailKaryawan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Detail</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive ">
                            <table style="text-align: left;" class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Kolom 1</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">NIK</th>
                                        <td>11181027</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Karyawan</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Lahir</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kota Lahir</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Agama</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jenis Kelamin</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jalan</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status Menikah</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lokasi Kerja</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Mulai Bekerja</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Pegawai Perusahaan</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Perkiraan Pensiun</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Divisi</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Divisi</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kode Lokasi</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Unit Kerja</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Loker</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tanggal Loker</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabatan</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Umur</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kelompok Usia</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nama Employee Group</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Employee Sub Group</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Level Pendidikan Terakhir</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pendidikan</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Penyelenggara</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jumlah Anak</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ADT Pajak</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ADT Kesehatan</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jumlah Pasangan</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Band Kelas Posisi</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Kota</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">NPWP</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nomor Telkomedika</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nomor BPJS</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Nomor Jamsostek</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">No HP</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Keterangan Lanjut Kuliah</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pendidikan</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Penyelenggara</th>
                                        <td>Data 4</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ukuran Baju</th>
                                        <td>Data 4</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
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
                        <div class="card-body">
                            <form action="#">
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">NIK</label>
                                                <input type="number" min="0" id="NIK" class="form-control"
                                                    placeholder="1234">
                                                {{-- <small class="form-control-feedback"> Feedback salah </small> --}}
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Nama</label>
                                                <input type="text" id="Nama"
                                                    class="form-control form-control-danger" placeholder="Pitir Parkir">
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
                                                <input type="number"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nomor BPJS Kesehatan</label>
                                                <input type="number"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nomor Jamsostek</label>
                                                <input type="text"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nomor Hp</label>
                                                <input type="text"  class="form-control">
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
                    <div class="modal-body">
                        <div class="card-body">
                            <form action="#">
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">NIK</label>
                                                <input type="number" min="0" id="NIK" class="form-control"
                                                    placeholder="1234">
                                                {{-- <small class="form-control-feedback"> Feedback salah </small> --}}
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Nama</label>
                                                <input type="text" id="Nama"
                                                    class="form-control form-control-danger" placeholder="Pitir Parkir">
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
                                                <input type="number"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nomor BPJS Kesehatan</label>
                                                <input type="number"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nomor Jamsostek</label>
                                                <input type="text"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email"  class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nomor Hp</label>
                                                <input type="text"  class="form-control">
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

<div class="modal fade" id="ModalDeleteKaryawan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
          <button type="button" class="btn btn-primary">Delete</button>
        </div>
      </div>
    </div>
  </div>

{{-- KONTEN MODAL DELETE KARYAWAN --}}
        {{-- Selesai --}}
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>Yearlyssss Sales </h4>
                    </div>
                    <div class="sales-chart">
                        <canvas id="sales-chart"></canvas>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>Team Total Completed </h4>
                    </div>
                    <div class="sales-chart">
                        <canvas id="team-chart"></canvas>
                    </div>
                </div>
                <!-- /# card -->
            </div>
            <!-- /# column -->
        </div>
        <!-- /# row -->
        <div class="row">
            <!-- Bar Chart -->
            <div class="col-sm-12 col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Bar chart</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
            <!-- Radar Chart -->
            <div class="col-sm-12 col-md-6">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Rader chart</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <canvas id="radarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Line Chart -->
            <div class="col-sm-12 col-md-8">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Line chart</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-sm-6 col-md-4">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Pie chart</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Doughnut Chart -->
            <div class="col-sm-6 col-md-4">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Doughut chart</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <canvas id="doughutChart"></canvas>
                    </div>
                </div>
            </div>
            <!-- Polar Chart -->
            <div class="col-sm-6 col-md-4">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Polar chart</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <canvas id="polarChart"></canvas>
                    </div>
                </div>
            </div>
            <!-- Single Bar Chart -->
            <div class="col-sm-6 col-md-4">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Single Bar Chart</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <canvas id="singelBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#exampleModal').modal('show');
        });
    </script>
@endsection
