@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Pelatihan</h3>
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
                                <label>Kategori Pelatihan</label>
                                <select class="form-control select2" name="kategori_pelatihan" style="width: 100%;">
                                    <option value="">Pilih Kategori Pelatihan</option>
                                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                                    <option value="Manajemen">Manajemen</option>
                                    <option value="Sumber Daya Manusia">Sumber Daya Manusia</option>
                                    <option value="Kesehatan">Kesehatan</option>
                                    <option value="Keuangan">Keuangan</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                    <option value="Lingkungan Hidup">Lingkungan Hidup</option>
                                    <option value="Pengembangan Diri">Pengembangan Diri</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status Pelatihan</label>
                                <select class="form-control select2" name="status_pelatihan" style="width: 100%;">
                                    <option value="">Pilih Status Pelatihan</option>
                                    <option value="Berlaku">Berlaku</option>
                                    <option value="Tidak Berlaku">Tidak Berlaku</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
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

                            <tr>
                                <td style="text-align: center; vertical-align: middle;">
                                    <div class="round-img">
                                        <a href="">
                                            <img src="{{ asset('storage/foto/default.jpg') }}" alt="">
                                        </a>


                                    </div>
                                </td>
                                <td style="text-align: center; vertical-align: middle;"> /
                                </td>
                                <td style="text-align: center; vertical-align: middle;"><a
                                        href="{{ route('karyawan.show', 2) }}" style="color: black;"></a></td>
                                <td style="text-align: center; vertical-align: middle;"></td>
                                <td style="text-align: center; vertical-align: middle;">

                                </td>

                                <td style="text-align: center; vertical-align: middle;"></td>
                                <td style="text-align: center; vertical-align: middle;">
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Selesai --}}
    </div>
@endsection
