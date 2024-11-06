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
            <form method="GET" action="{{ route('pelatihan.index') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Pelatihan</label>
                                <select class="form-control select2" name="nama_pelatihan" style="width: 100%;">
                                    <option value="">Semua Pelatihan</option>
                                    <!-- Loop untuk menampilkan nama pelatihan yang sudah unik -->
                                    @foreach ($uniquePelatihanNames as $nama_pelatihan)
                                        <option value="{{ $nama_pelatihan }}"
                                            @if (request()->get('nama_pelatihan') == $nama_pelatihan) selected @endif>
                                            {{ $nama_pelatihan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status Pelatihan</label>
                                <select class="form-control select2" name="status_pelatihan" style="width: 100%;">
                                    <option value="">Pilih Status Pelatihan</option>
                                    <option value="Berlaku" @if (request()->get('status_pelatihan') == 'Berlaku') selected @endif>
                                        Berlaku
                                    </option>
                                    <option value="Tidak Berlaku" @if (request()->get('status_pelatihan') == 'Tidak Berlaku') selected @endif>
                                        Tidak Berlaku
                                    </option>
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
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle;">Foto</th>
                                <th style="text-align: center; vertical-align: middle;">NIK Telpro / Group</th>
                                <th style="text-align: center; vertical-align: middle;">Nama Karyawan</th>
                                <th style="text-align: center; vertical-align: middle;">Pelatihan</th>
                                <th style="text-align: center; vertical-align: middle;">Band</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelatihan as $item)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <div class="round-img">
                                            <a href="#">
                                                <img src="{{ asset('storage/foto/' . $item->karyawan->foto) }}"
                                                    alt="Foto Karyawan">
                                            </a>
                                        </div>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        @if ($item->karyawan->datakerjakaryawans->isNotEmpty())
                                            {{ $item->karyawan->datakerjakaryawans[0]->nik }}
                                        @else
                                            NIK Tidak Tersedia
                                        @endif
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <a href="{{ route('karyawan.show', $item->karyawan->id) }}" style="color: black;">
                                            {{ $item->karyawan->nama_karyawan }}
                                        </a>
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <!-- Menampilkan nama pelatihan tanpa pemeriksaan isNotEmpty() -->
                                        {{ $item->nama_pelatihan ?? 'Pelatihan Tidak Tersedia' }}
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        @if ($item->karyawan->datakerjakaryawans->isNotEmpty())
                                            {{ $item->karyawan->datakerjakaryawans[0]->band_kelas_posisi }}
                                        @else
                                            Band Tidak Tersedia
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Selesai --}}
    </div>
@endsection
