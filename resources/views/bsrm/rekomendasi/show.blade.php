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
                    <table text-align="left" id="myTable" class="table table-bordered table-striped"
                        style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th style="white-space: nowrap;">Foto</th>
                                <th style="white-space: nowrap;">NIK Telpro / Group</th>
                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                <th style="white-space: nowrap;">Unit Kerja</th>
                                <th style="white-space: nowrap;">Loker</th>
                                <th>Jabatan</th>
                                <th>Band</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($jobHistories->isEmpty())
                                <tr>
                                    <td colspan="7" style="text-align: center;">Tidak ada data yang ditemukan.
                                    </td>
                                </tr>
                            @else
                                @foreach ($jobHistories as $job)
                                    <tr>
                                        <td>
                                            <div class="round-img">
                                                <a href=""><img
                                                        src="{{ asset('storage/foto/' . ($job->karyawan->foto ?? 'default.jpg')) }}"
                                                        alt=""></a>
                                            </div>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $job->karyawan->nik }} / {{ $job->karyawan->telkomgroup }}</td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            <a href="{{ route('karyawan.edit', $job->karyawan->id) }}"
                                                style="color: black;">{{ $job->karyawan->nama_karyawan }}</a>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $job->karyawan->unit_kerja }}</td>
                                        <td style="text-align: center; vertical-align: middle;">
                                            {{ $job->lokasi }}</td>
                                        <td style="white-space: nowrap;">{{ $job->nama_jabatan }}</td>
                                        <td style="white-space: nowrap;">{{ $job->band }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
