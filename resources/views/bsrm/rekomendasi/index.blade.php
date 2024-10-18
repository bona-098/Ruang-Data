@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Promosi</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <form method="GET" action="{{ route('rekomendasi.filter') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Posisi Band yang dicari</label>
                                <select class="form-control select2" name="band" style="width: 100%;">
                                    <option value="">Pilih Band</option>
                                    <option value="I"> I</option>
                                    <option value="II"> II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                    <option value="VI">VI</option>
                                    <option value="VII">VII</option>
                                    <option value="VIII">VIII</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pilih Lama Jabatan Terakhir</label>
                                <select class="form-control select2" name="lama_jabatan" style="width: 100%;">
                                    <option value="">Pilih lama jabatan terakhir</option>
                                    <option value="Kurang 1 Tahun">Kurang 1 Tahun</option>
                                    <option value="Antara 1-2 Tahun">Antara 1-2 Tahun</option>
                                    <option value="Lebih 2 Tahun">Lebih 2 Tahun</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </div>
                </div>
            </form>


        </div>
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Karyawan</h4>
                <br>
                <br>
                <!-- Button trigger modal -->
                <!-- Button trigger modal -->

                <div class=" table-responsive">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle;">Foto</th>
                                <th style="text-align: center; vertical-align: middle;">NIK Telpro / Group</th>
                                {{-- <th style="white-space: nowrap;">NIK Telkom Group</th> --}}
                                <th style="text-align: center; vertical-align: middle;">Nama Karyawan</th>
                                {{-- <th style="white-space: nowrap;">jenis Kelamin</th> --}}
                                <th style="text-align: center; vertical-align: middle;">Unit Kerja</th>
                                <th style="text-align: center; vertical-align: middle;">Loker</th>
                                <th style="text-align: center; vertical-align: middle;">Jabatan</th>
                                <th style="text-align: center; vertical-align: middle;">Band</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyawan as $k)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <div class="round-img">
                                            <a href="">
                                                <img src="{{ asset('storage/foto/' . ($k->foto ? $k->foto : 'default.jpg')) }}"
                                                    alt="">
                                            </a>

                                        </div>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $k->nik }} /
                                        {{ $k->telkomgroup }}</td>
                                    <td style="text-align: center; vertical-align: middle;"><a
                                            href="{{ route('karyawan.show', $k->id) }}"
                                            style="color: black;">{{ $k->nama_karyawan }}</a></td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $k->unit_kerja }}</td>
                                    <td style="text-align: center; vertical-align: middle;">
                                       
                                    </td>

                                    <td style="text-align: center; vertical-align: middle;">{{ $k->jabatan }}</td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $k->band_kelas_posisi }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Selesai --}}

        <!-- KONTEN MODAL EDIT KARYAWAN  -->
        {{-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Karyawan</h5>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('karyawan.store') }}" id="editForm"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">NIK Telpro</label>
                                                <input type="number" name="nik" min="0" class="form-control"
                                                    @error('nik') is-invalid @enderror value="{{ old('nik') }}">
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
                                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control"
                                                    placeholder="dd/mm/yyyy">
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
                                                <input type="text" class="form-control" id="unit_kerja"
                                                    name="unit_kerja">
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
                                                <input type="text" class="form-control" id="loker"
                                                    name="loker">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" class="form-control" id="jabatan"
                                                    name="jabatan">
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
        </div> --}}
        <!-- KONTEN MODAL EDIT KARYAWAN  -->

        <!-- KONTEN MODAL TAMBAH KARYAWAN  -->
        <div class="modal fade" id="ModalTambahKaryawan" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
                        @if ($errors->any())
                            <span class="text-danger" style="font-size: 0.9em;">
                                {{ $errors->first() }}
                            </span>
                        @endif
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
                                                    @error('nik') is-invalid @enderror value="{{ old('nik') }}">
                                                @error('nik')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">NIK Telkom Grup</label>
                                                <input type="number" name="nik_telpro" min="0"
                                                    class="form-control" @error('nik_telpro') is-invalid @enderror
                                                    value="{{ old('nik_telpro') }}">
                                                @error('nik_telpro')
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
                                                    class="form-control form-control-danger" name="nama_karyawan"
                                                    @error('nama_karyawan') is-invalid @enderror
                                                    value="{{ old('nama_karyawan') }}">
                                                @error('nama_karyawan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                                                <select
                                                    class="form-control custom-select @error('jenis_kelamin') is-invalid @enderror"
                                                    id="jenis_kelamin" name="jenis_kelamin">
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    <option value="laki-laki"
                                                        {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>
                                                        Laki-laki</option>
                                                    <option value="perempuan"
                                                        {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>
                                                        Perempuan</option>
                                                </select>
                                                @error('jenis_kelamin')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tgl_lahir" class="control-label">Tanggal Lahir</label>
                                                <input type="date" id="tgl_lahir" name="tgl_lahir"
                                                    class="form-control" placeholder="dd/mm/yyyy"
                                                    @error('tgl_lahir') is-invalid @enderror
                                                    value="{{ old('tgl_lahir') }}">
                                                @error('tgl_lahir')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kota_lahir" class="control-label">Kota Lahir</label>
                                                <input type="text" id="kota_lahir" name="kota_lahir"
                                                    class="form-control" @error('kota_lahir') is-invalid @enderror
                                                    value="{{ old('kota_lahir') }}">
                                                @error('kota_lahir')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <small class="form-control-feedback"> </small>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="agama" class="control-label">Agama</label>
                                                <select
                                                    class="form-control custom-select @error('agama') is-invalid @enderror"
                                                    id="agama" name="agama">
                                                    <option value="">Pilih Agama</option>
                                                    <option value="islam"
                                                        {{ old('agama') == 'islam' ? 'selected' : '' }}>Islam</option>
                                                    <option value="katolik"
                                                        {{ old('agama') == 'katolik' ? 'selected' : '' }}>Kristen Katolik
                                                    </option>
                                                    <option value="kristen protestan"
                                                        {{ old('agama') == 'kristen protestan' ? 'selected' : '' }}>Kristen
                                                        Protestan</option>
                                                    <option value="hindu"
                                                        {{ old('agama') == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                                    <option value="budha"
                                                        {{ old('agama') == 'budha' ? 'selected' : '' }}>Budha</option>
                                                    <option value="kong hucuh"
                                                        {{ old('agama') == 'kong hucuh' ? 'selected' : '' }}>Kong Hucu
                                                    </option>
                                                </select>
                                                @error('agama')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="unit_kerja" class="control-label">Unit Kerja</label>
                                                <select
                                                    class="form-control custom-select @error('unit_kerja') is-invalid @enderror"
                                                    id="unit_kerja" name="unit_kerja">
                                                    <option value="">Pilih Unit Kerja</option>
                                                    <option value="General Manager Regional"
                                                        {{ old('unit_kerja') == 'General Manager Regional' ? 'selected' : '' }}>
                                                        General Manager Regional</option>
                                                    <option value="Manager Marketing, Sales & Solution"
                                                        {{ old('unit_kerja') == 'Manager Marketing, Sales & Solution' ? 'selected' : '' }}>
                                                        Manager Marketing, Sales & Solution</option>
                                                    <option value="Manager Planning & Delivery"
                                                        {{ old('unit_kerja') == 'Manager Planning & Delivery' ? 'selected' : '' }}>
                                                        Manager Planning & Delivery</option>
                                                    <option value="Manager Operation & Maintenance"
                                                        {{ old('unit_kerja') == 'Manager Operation & Maintenance' ? 'selected' : '' }}>
                                                        Manager Operation & Maintenance</option>
                                                    <option value="Manager Business Support & Risk Management"
                                                        {{ old('unit_kerja') == 'Manager Business Support & Risk Management' ? 'selected' : '' }}>
                                                        Manager Business Support & Risk Management</option>
                                                    <option value="Area Kaltimtara"
                                                        {{ old('unit_kerja') == 'Area Kaltimtara' ? 'selected' : '' }}>Area
                                                        Kaltimtara</option>
                                                    <option value="Area Kalselteng"
                                                        {{ old('unit_kerja') == 'Area Kalselteng' ? 'selected' : '' }}>Area
                                                        Kalselteng</option>
                                                    <option value="Area Kalbar"
                                                        {{ old('unit_kerja') == 'Area Kalbar' ? 'selected' : '' }}>Area
                                                        Kalbar</option>
                                                </select>
                                                @error('unit_kerja')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nomor HandPhone</label>
                                                <input type="text" name="no_hp" class="form-control"
                                                    @error('no_hp') is-invalid @enderror value="{{ old('no_hp') }}">
                                                @error('no_hp')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Kontak Darurat</label>
                                                <input type="text" name="kontak_darurat" class="form-control"
                                                    @error('kontak_darurat') is-invalid @enderror
                                                    value="{{ old('kontak_darurat') }}">
                                                @error('kontak_darurat')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control"
                                                    name="alamat"@error('alamat') is-invalid @enderror
                                                    value="{{ old('alamat') }}">
                                                @error('alamat')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="loker">Loker</label>
                                                <input type="text" class="form-control" id="loker"
                                                    name="loker">
                                            </div>
                                        </div> --}}

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" class="form-control" id="jabatan"
                                                    name="jabatan"@error('jabatan') is-invalid @enderror
                                                    value="{{ old('jabatan') }}">
                                                @error('jabatan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Kelas Band Posisi</label>
                                                <select class="form-control custom-select" name="band_kelas_posisi">
                                                    <option value="">Pilih Kelas Band Posisi</option>
                                                    <option value="I"
                                                        {{ old('band_kelas_posisi') == 'I' ? 'selected' : '' }}>I</option>
                                                    <option value="II"
                                                        {{ old('band_kelas_posisi') == 'II' ? 'selected' : '' }}>II
                                                    </option>
                                                    <option value="III"
                                                        {{ old('band_kelas_posisi') == 'III' ? 'selected' : '' }}>III
                                                    </option>
                                                    <option value="IV"
                                                        {{ old('band_kelas_posisi') == 'IV' ? 'selected' : '' }}>IV
                                                    </option>
                                                    <option value="V"
                                                        {{ old('band_kelas_posisi') == 'V' ? 'selected' : '' }}>V</option>
                                                    <option value="VI"
                                                        {{ old('band_kelas_posisi') == 'VI' ? 'selected' : '' }}>VI
                                                    </option>
                                                    <option value="VII"
                                                        {{ old('band_kelas_posisi') == 'VII' ? 'selected' : '' }}>VII
                                                    </option>
                                                </select>
                                                @error('band_kelas_posisi')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="status_nikah" class="control-label">Status Menikah</label>
                                                <select class="form-control custom-select" id="status_nikah"
                                                    name="status_nikah">
                                                    <option value="">Pilih Status Menikah</option>
                                                    <option value="Menikah"
                                                        {{ old('status_nikah') == 'Menikah' ? 'selected' : '' }}>Menikah
                                                    </option>
                                                    <option value="Belum Menikah"
                                                        {{ old('status_nikah') == 'Belum Menikah' ? 'selected' : '' }}>
                                                        Belum Menikah</option>
                                                </select>
                                                @error('status_nikah')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nama_pasangan">Nama Pasangan</label>
                                                <input type="text" class="form-control" id="nama_pasangan"
                                                    name="nama_pasangan">
                                                @error('nama_pasangan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jumlah_anak">Jumlah Anak</label>
                                                <input type="number" min="0" class="form-control"
                                                    id="jumlah_anak" name="jumlah_anak">
                                                @error('jumlah_anak')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="golongan_darah" class="control-label">Golongan Darah</label>
                                                <select class="form-control custom-select" id="golongan_darah"
                                                    name="golongan_darah">
                                                    <option value="">Pilih Golongan Darah</option>
                                                    <option value="A">A</option>
                                                    <option value="AB">AB</option>
                                                    <option value="B">B</option>
                                                    <option value="O">O</option>
                                                </select>
                                                @error('golongan_darah')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="suku">suku</label>
                                                <input type="text" class="form-control" id="suku"
                                                    name="suku">
                                                @error('suku')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tgl_bergabung">tgl_bergabung</label>
                                                <input type="date" class="form-control" id="tgl_bergabung"
                                                    name="tgl_bergabung">
                                                @error('tgl_bergabung')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nomor_sk">Nomor Surat Keputusan</label>
                                                <input type="text" class="form-control" id="suku"
                                                    name="nomor_sk">
                                                @error('nomor_sk')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="surat_sk">Surat Keputusan</label>
                                                <input type="file" class="form-control" id="surat_sk"
                                                    name="surat_sk">
                                                @error('surat_sk')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jenjang_pendidikan" class="control-label">Jenjang
                                                    Pendidikan</label>
                                                <select class="form-control custom-select" id="jenjang_pendidikan"
                                                    name="jenjang_pendidikan">
                                                    <option value="">Pilih Jenjang Pendidikan</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S1">S1</option>
                                                    <option value="Diploma III">Diploma III</option>
                                                    <option value="SMK/SLTA Kejuruan">SMK/SLTA Kejuruan</option>
                                                </select>
                                                @error('jenjang_pendidikan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="program_studi">Program Studi</label>
                                                <input type="text" class="form-control" id="program_studi"
                                                    name="program_studi">
                                                @error('program_studi')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="penyelenggara_pendidikan">Penyelenggara Pendidikan</label>
                                                <input type="text" class="form-control" id="penyelenggara_pendidikan"
                                                    name="penyelenggara_pendidikan">
                                            </div>
                                            @error('penyelenggara_pendidikan')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ijazah">Ijazah</label>
                                                <input type="file" class="form-control" id="ijazah"
                                                    name="ijazah">
                                                @error('ijazah')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bpjs_kesehatan">Nomor Bpjs Kesehatan</label>
                                                <input type="text" class="form-control" id="bpjs_kesehatan"
                                                    name="nomor_bpjs_kesehatan">
                                                @error('nomor_bpjs_kesehatan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="file_bpjs_kesehatan">Bpjs Kesehatan</label>
                                                <input type="file" class="form-control" id="file_bpjs_kesehatan"
                                                    name="file_bpjs_kesehatan">
                                                @error('file_bpjs_kesehatan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nomor_bpjs_ketenagakerjaan">Nomor Bpjs Ketenagakerjaan</label>
                                                <input type="text" class="form-control"
                                                    id="nomor_bpjs_ketenagakerjaan" name="nomor_bpjs_ketenagakerjaan">
                                                @error('nomor_bpjs_ketenagakerjaan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="file_bpjs_ketenagakerjaan">Bpjs Ketenagakerjaan</label>
                                                <input type="file" class="form-control" id="file_bpjs_ketenagakerjaan"
                                                    name="file_bpjs_ketenagakerjaan">
                                                @error('file_bpjs_ketenagakerjaan')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nomor_telkomedika">Nomor Telkomedika</label>
                                                <input type="text" class="form-control" id="nomor_telkomedika"
                                                    name="nomor_telkomedika">
                                                @error('nomor_telkomedika')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="file_telkomedika">Telkomedika</label>
                                                <input type="file" class="form-control" id="file_telkomedika"
                                                    name="file_telkomedika">
                                                @error('file_telkomedika')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nomor_npwp">Nomor Npwp</label>
                                                <input type="text" class="form-control" id="npwp"
                                                    name="nomor_npwp">
                                                @error('nomor_npwp')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="npwp">File Npwp</label>
                                                <input type="file" class="form-control" id="file_npwp"
                                                    name="file_npwp">
                                                @error('file_npwp')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nomor_rekening_bank">Rekening Bank</label>
                                                <input type="text" class="form-control" id="nomor_rekening_bank"
                                                    name="nomor_rekening_bank">
                                                @error('nomor_rekening_bank')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="file_rekening_bank">Rekening Bank</label>
                                                <input type="file" class="form-control" id="file_rekening_bank"
                                                    name="file_rekening_bank">
                                                @error('file_rekening_bank')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="file_rekening_bank">Foto</label>
                                                <input type="file" class="form-control" id="foto"
                                                    name="foto">
                                                @error('foto')
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
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

        <div class="modal fade" id="ModalKaryawanOrganik" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
                    </div>
                    <div class="modal-body">
                        <div class=" table-responsive">
                            <table text-align: left; id="myTable" class="table table-bordered table-striped"
                                style="font-size: 12px;">
                                <thead>
                                    <tr>
                                        <th style="white-space: nowrap;">Foto</th>
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
                                    @foreach ($karyawan_organik as $k)
                                        <tr>
                                            <td>
                                                <div class="round-img">
                                                    <a href=""><img
                                                            src="{{ asset('storage/foto/' . ($k->foto ? $k->foto : 'default.jpg')) }}"
                                                            alt=""></a>
                                                </div>
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;">{{ $k->nik }} /
                                                {{ $k->telkomgroup }}
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;"><a
                                                    href="{{ route('karyawan.edit', $k->id) }}"
                                                    style="color: black;">{{ $k->nama_karyawan }}</a></td>
                                            <td style="text-align: center; vertical-align: middle;">{{ $k->unit_kerja }}
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                @if (
                                                    $k->unit_kerja == 'General Manager Regional' ||
                                                        $k->unit_kerja == 'Manager Marketing, Sales & Solution' ||
                                                        $k->unit_kerja == 'Manager Planning & Delivery' ||
                                                        $k->unit_kerja == 'Manager Operation & Maintenance' ||
                                                        $k->unit_kerja == 'Manager Business Support & Risk Management' ||
                                                        $k->unit_kerja == 'Area Kaltimtara')
                                                    Balikpapan
                                                @elseif($k->unit_kerja == 'Area Kalselteng')
                                                    Banjarmasin
                                                @elseif($k->unit_kerja == 'Area Kalbar')
                                                    Pontianak
                                                @else
                                                    {{-- Tambahkan opsi default jika diperlukan --}}
                                                    Tidak Diketahui
                                                @endif
                                            </td>
                                            <td style="white-space: nowrap;">{{ $k->jabatan }}</td>
                                            <td style="white-space: nowrap;">{{ $k->band_kelas_posisi }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @csrf

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
