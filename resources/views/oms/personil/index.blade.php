{{-- DONE --}}
@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="" method="GET" id="form_1">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="filter1">Nama Area :</label>
                            <select name="nama_area" class="form-control">
                                <option value="">Semua Area </option>
                                <option value="Area Balikpapan"
                                    value="{{ isset($_GET['unit_kerja']) && $_GET['unit_kerja'] == 'Area Balikpapan' }}">
                                    Area Balikpapan</option>
                                <option value="Area Kaltim"
                                    value="{{ isset($_GET['unit_kerja']) && $_GET['unit_kerja'] == 'Area Kaltim' }}">Area
                                    Kalimantan Timur</option>
                                <option value="Area Kalsel"
                                    value="{{ isset($_GET['unit_kerja']) && $_GET['unit_kerja'] == 'Area Kalsel' }}">Area
                                    Kalimantan Selatan</option>
                                <option value="Area Kalbar"
                                    value="{{ isset($_GET['unit_kerja']) && $_GET['unit_kerja'] == 'Area Kalbar' }}">Area
                                    Kalimantan Barat</option>
                            </select>
                            {{-- <script>
                                document.getElementById('unit_kerja').value = "<?php if (isset($_GET['unit_kerja']) && $_GET['unit_kerja']) {
                                    echo $_GET['unit_kerja'];
                                } ?>";
                            </script> --}}
                        </div>
                        <div class="col-md-4">
                            <label for="filter2">Nama Witel:</label>
                            <select id="filter2" name="nama_witel" class="form-control">
                                <option value=" ">Semua Witel</option>
                                <option value=" ">Witel Balikpapan</option>
                                <option value=" ">Witel Kalimantan Timur</option>
                                <option value=" ">Witel Kalimantan Utara</option>
                                <option value=" ">Witel Kalimantan Selatan</option>
                                <option value=" ">Witel Kalimantan Tengah</option>
                                <option value=" ">Witel Kalimantan Barat</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="filter5">Nama personil:</label>
                            <select id="filter5" name="nama_personil" class="form-control">
                                <option value="">Semua personil</option>

                            </select>
                        </div>
                        <div class="col-md-2" style="padding-top: 5px;">
                            <label for="filter5"> </label>
                            <button type="submit" class=" form-control btn-success"> <i class="fa fa-filter"></i>
                                Filter</button>
                        </div>
                        <div class="col-md-2" style="padding-top: 5px;">
                            <label for="filter5"> </label>
                            <button type="button" class=" form-control btn-success">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- Akhir Filter Tabel --}}
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data personil</h4>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahPetugas">
                    <i class="fa fa-user-plus"></i> Tambah personil
                </button>
                <table text-align: left; id="myTable"
                    class=" table table-responsive display table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th style="white-space: nowrap;">Nama</th>
                            <th style="white-space: nowrap;">NIK</th>
                            <th style="white-space: nowrap;">Lokasi Kerja</th>
                            <th style="white-space: nowrap;">Kontrak</th>
                            <th style="white-space: nowrap;">Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personil as $p)
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-cog"></i> Aksi
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" data-toggle="modal"
                                                data-target="#ModalUpdatepetugas{{ $p->id }}">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a class="dropdown-item" data-toggle="modal"
                                                data-target="#ModalDeletepetugas{{ $p->id }}">
                                                <i class="fa fa-trash"></i> Hapus
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td style="white-space: nowrap;">{{ $p->nama }}</td>
                                <td style="white-space: nowrap;">{{ $p->nik }}</td>
                                <td style="white-space: nowrap;">{{ $p->lokasi_kerja }}</td>
                                <td style="white-space: nowrap;">{{ $p->kontrak }}</td>
                                <td style="white-space: nowrap;">{{ $p->telepon }}</td>
                            </tr>
                            <div class="modal fade" id="ModalUpdatepetugas{{ $p->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Personil</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Form Update Personil -->
                                            <form action="{{ route('personil.update', $p->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <!-- Tambahkan input lainnya sesuai kebutuhan -->
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" id="nama"
                                                        name="nama" placeholder="Masukkan nama"
                                                        value="{{ $p->nama }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="telepon">Telepon</label>
                                                    <input type="text" class="form-control" id="telepon"
                                                        name="telepon" placeholder="Masukkan telepon"
                                                        value="{{ $p->telepon }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nik">NIK</label>
                                                    <input type="text" class="form-control" id="nik"
                                                        name="nik" placeholder="Masukkan NIK"
                                                        value="{{ $p->nik }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="lokasi_kerja">Lokasi Kerja</label>
                                                    <input type="text" class="form-control" id="lokasi_kerja"
                                                        name="lokasi_kerja" 
                                                        value=" $p->email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="gedung_id">Gedung</label>
                                                    <select class="form-control" id="gedung_id" name="gedung_id">
                                                        @foreach($gedungOptions as $gedung)
                                                            <option value="{{ $gedung->id }}" {{ $p->gedung_id == $gedung->id ? 'selected' : '' }}>
                                                                {{ $gedung->nama_gedung }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>                                                
                                                <!-- Tambahkan input lainnya sesuai kebutuhan -->
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                            <!-- Form Update Personil -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal Delete Mitra -->
    @foreach ($personil as $m)
        @if (isset($m))
            <div class="modal fade" id="ModalDeletepetugas{{ $m->id }}" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                        </div>
                        <div class="modal-body">
                            Tindakan ini akan menghapus data tersebut dan data yang dihapus tidak dapat dikembalikan. Apakah
                            Anda yakin ingin melanjutkan?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <form method="POST" action="{{ route('personil.destroy', $m->id) }}" id="delete-form">
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

    <!-- KONTEN MODAL Tambah Petugas  -->
    <div class="modal fade" id="ModalTambahPetugas" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('personil.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Petugas</label>
                                            <input required type="text" name="nama" class="form-control">
                                            <small class="form-control-feedback">@error('nama') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nomor Telepon</label>
                                            <input required type="text" name="telepon" class="form-control">
                                            <small class="form-control-feedback">@error('telepon') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nik</label>
                                            <input required type="text" name="nik" class="form-control">
                                            <small class="form-control-feedback">@error('nik') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Loker Kerja</label>
                                            <input required type="text" name="lokasi_kerja" class="form-control">
                                            <small class="form-control-feedback">@error('lokasi_kerja') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kontrak</label>
                                            <input required type="text" name="kontrak" class="form-control">
                                            <small class="form-control-feedback">@error('kontrak') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gedung_id">Gedung</label>
                                            <select required class="form-control" id="gedung_id" name="gedung_id">
                                                @foreach($gedungOptions as $gedung)
                                                    <option value="{{ $gedung->id }}" {{ $gedung->gedung_id == $gedung->id ? 'selected' : '' }}>
                                                        {{ $gedung->nama_gedung }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <small class="form-control-feedback">@error('gedung_id') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
