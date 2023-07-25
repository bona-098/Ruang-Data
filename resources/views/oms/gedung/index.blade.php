{{-- DONE --}}
@extends('layout.layout')
@section('content')
    <div class="container-fluid">

        {{-- MEMFILTER DATA --}}
        <div class="card">
            <div class="card-body">
                <form action="{{ route('gedung.index') }}" method="GET" id="form_1">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="filter2">Nama Witel :</label>
                            <select name="nama_witel" class="form-control" onchange="updateAreaOptions()">
                                <option value="">Semua Witel</option>
                                <option value="WITEL BALIKPAPAN"
                                    {{ isset($_GET['nama_witel']) && $_GET['nama_witel'] == 'WITEL BALIKPAPAN' ? 'selected' : '' }}>
                                    WITEL BALIKPAPAN</option>
                                <option value="WITEL KALTIM"
                                    {{ isset($_GET['nama_witel']) && $_GET['nama_witel'] == 'WITEL KALTIM' ? 'selected' : '' }}>
                                    WITEL KALTIM</option>
                                <option value="WITEL KALSEL"
                                    {{ isset($_GET['nama_witel']) && $_GET['nama_witel'] == 'WITEL KALSEL' ? 'selected' : '' }}>
                                    WITEL KALSEL</option>
                                <option value="WITEL KALBAR"
                                    {{ isset($_GET['nama_witel']) && $_GET['nama_witel'] == 'WITEL KALBAR' ? 'selected' : '' }}>
                                    WITEL KALBAR</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="filter2">Nama Area :</label>
                            <select name="nama_area" class="form-control">
                                <option value="">Semua Area</option>
                                @if (isset($_GET['nama_witel']) && $_GET['nama_witel'] == 'WITEL BALIKPAPAN')
                                    <option value="AREA BALIKPAPAN"
                                        {{ isset($_GET['nama_area']) && $_GET['nama_area'] == 'AREA BALIKPAPAN' ? 'selected' : '' }}>
                                        AREA BALIKPAPAN</option>
                                @elseif(isset($_GET['nama_witel']) && $_GET['nama_witel'] == 'WITEL KALTIM')
                                    <option value="AREA KALTIM"
                                        {{ isset($_GET['nama_area']) && $_GET['nama_area'] == 'AREA KALTIM' ? 'selected' : '' }}>
                                        AREA KALTIM</option>
                                    <option value="AREA KALTARA"
                                        {{ isset($_GET['nama_area']) && $_GET['nama_area'] == 'AREA KALTARA' ? 'selected' : '' }}>
                                        AREA KALTARA</option>
                                @elseif(isset($_GET['nama_witel']) && $_GET['nama_witel'] == 'WITEL KALSEL')
                                    <option value="AREA KALSEL"
                                        {{ isset($_GET['nama_area']) && $_GET['nama_area'] == 'AREA KALSEL' ? 'selected' : '' }}>
                                        AREA KALSEL</option>
                                    <option value="AREA KALTENG"
                                        {{ isset($_GET['nama_area']) && $_GET['nama_area'] == 'AREA KALTENG' ? 'selected' : '' }}>
                                        AREA KALTENG</option>
                                @elseif(isset($_GET['nama_witel']) && $_GET['nama_witel'] == 'WITEL KALBAR')
                                    <option value="AREA KALBAR"
                                        {{ isset($_GET['nama_area']) && $_GET['nama_area'] == 'AREA KALBAR' ? 'selected' : '' }}>
                                        AREA KALBAR</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-2" style="padding-top: 5px;">
                            <label for="filter5"> </label>
                            <button type="submit" class="form-control btn-success"> <i class="fa fa-search"></i>
                                Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script>
            function updateAreaOptions() {
                const witelSelect = document.querySelector('select[name="nama_witel"]');
                const areaSelect = document.querySelector('select[name="nama_area"]');

                // Mendapatkan nilai terpilih dari select witel
                const selectedWitel = witelSelect.value;

                // Mengosongkan pilihan area saat witel berubah
                areaSelect.innerHTML = '<option value="">Semua Area</option>';

                // Menambahkan pilihan area sesuai dengan witel yang dipilih
                if (selectedWitel === 'WITEL BALIKPAPAN') {
                    areaSelect.innerHTML += `
                        <option value="AREA BALIKPAPAN" {{ isset($_GET['nama_area']) && $_GET['nama_area'] == 'AREA BALIKPAPAN' ? 'selected' : '' }}>
                            AREA BALIKPAPAN</option>
                    `;
                } else if (selectedWitel === 'WITEL KALTIM') {
                    areaSelect.innerHTML += `
                        <option value="AREA KALTIM" {{ isset($_GET['nama_area']) && $_GET['nama_area'] == 'AREA KALTIM' ? 'selected' : '' }}>
                            AREA KALTIM</option>
                        <option value="AREA KALTARA" {{ isset($_GET['nama_area']) && $_GET['nama_area'] == 'AREA KALTARA' ? 'selected' : '' }}>
                            AREA KALTARA</option>
                    `;
                } else if (selectedWitel === 'WITEL KALSEL') {
                    areaSelect.innerHTML += `
                        <option value="AREA KALSEL" {{ isset($_GET['nama_area']) && $_GET['nama_area'] == 'AREA KALSEL' ? 'selected' : '' }}>
                            AREA KALSEL</option>
                        <option value="AREA KALTENG" {{ isset($_GET['nama_area']) && $_GET['nama_area'] == 'AREA KALTENG' ? 'selected' : '' }}>
                            AREA KALTENG</option>
                    `;
                } else if (selectedWitel === 'WITEL KALBAR') {
                    areaSelect.innerHTML += `
                        <option value="AREA KALBAR" {{ isset($_GET['nama_area']) && $_GET['nama_area'] == 'AREA KALBAR' ? 'selected' : '' }}>
                            AREA KALBAR</option>
                    `;
                }
            }
        </script>


        {{-- MEMFILTER DATA --}}

        {{-- <div class="card">
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
                            <script>
                                document.getElementById('unit_kerja').value = "<?php if (isset($_GET['unit_kerja']) && $_GET['unit_kerja']) {
                                    echo $_GET['unit_kerja'];
                                } ?>";
                            </script>
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
                            <label for="filter5">Nama Gedung:</label>
                            <select id="filter5" name="nama_gedung" class="form-control">
                                <option value="">Semua Gedung</option>

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
                <h4 class="card-title">Data Gedung</h4>
                <br>
                @canany(['oms', 'admin'])
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahGedung">
                    <i class="fa fa-user-plus"></i> Tambah Gedung
                </button>
                <a button type="button" class="btn btn-primary" href="/gedung_import"><i class="fa fa-plus"></i> Import
                    Data Gedung</button> </a>
                @endcanany
                {{-- <div class="table-responsive"> --}}
                <table text-align: left; id="myTable"
                    class=" table table-responsive  display table-bordered table-striped" style="font-size: 14px;">
                    <thead>
                        <tr>
                            <th style="white-space: nowrap;">ID Gedung</th>
                            <th style="white-space: nowrap;">Nama Gedung</th>
                            <th style="white-space: nowrap;">Nama Area</th>
                            <th style="white-space: nowrap;">Nama Witel</th>
                            <th>Kelas</th>
                            <th style="white-space: nowrap;">Alamat</th>
                            <th>Koordinat</th>
                            <th>Luas</th>
                            <th style="white-space: nowrap;">Total Petugas</th>
                            {{-- <th>Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gedung as $g)
                            <tr>

                                <td style="font-size: 12px;">{{ $g->Id_gedung }}
                                </td>
                                <td style="white-space: nowrap; font-size: 12px;">
                                    <a href="{{ route('gedung.show', $g->id) }}" target="_blank"
                                        style="color: rgb(20, 19, 19); text-decoration: underline;">{{ $g->nama_gedung }}
                                </td>
                                <td style="white-space: nowrap;">{{ $g->nama_area }}</td>
                                <td style="white-space: nowrap;">{{ $g->nama_witel }}</td>
                                <td style="white-space: nowrap;">kelas</td>
                                <td style="white-space: nowrap;">{{ $g->alamat }}</td>
                                <td style="white-space: nowrap;">{{ $g->koordinat }}</td>
                                <td style="white-space: nowrap;">{{ $g->luasan }}</td>
                                <td style="white-space: nowrap;">{{ $g->total_petugas }}</td>
                                {{-- <td>
                                        <a class="btn btn-primary" href="{{ route('gedung.show', $g->id) }}">Detail</a>
                                    </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- </div> --}}
            </div>
        </div>

        <!-- Modal Tambah Gedung -->
        <div class="modal fade" id="ModalTambahGedung" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Gedung</h5>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form action="{{ route('gedung.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <!--/row-->
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Area</label>
                                                <select required name="nama_area" class="form-control custom-select"
                                                    id="nama_area">
                                                    <option value="">Pilih Area</option>
                                                    <option value="Balikpapan">Balikpapan</option>
                                                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('area')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Witel</label>
                                                <select required name="nama_witel" class="form-control custom-select"
                                                    id="nama_witel">
                                                    <option value="">Pilih Witel</option>
                                                    <!-- Opsi witel akan ditambahkan melalui JavaScript -->
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('witel')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>

                                        <script>
                                            // Mendengarkan perubahan pada dropdown "Area"
                                            document.getElementById('nama_area').addEventListener('change', function() {
                                                var witelDropdown = document.getElementById('nama_witel');
                                                witelDropdown.innerHTML = ''; // Menghapus opsi witel sebelumnya

                                                var selectedArea = this.value;

                                                // Menambahkan opsi witel berdasarkan area yang dipilih
                                                if (selectedArea === 'Balikpapan') {
                                                    addOption(witelDropdown, 'Witel Balikpapan', 'Witel Balikpapan');
                                                } else if (selectedArea === 'Kalimantan Timur') {
                                                    addOption(witelDropdown, 'Witel Samarinda', 'Witel Samarinda');
                                                    addOption(witelDropdown, 'Witel Kaltara', 'Witel Kaltara');
                                                } else if (selectedArea === 'Kalimantan Selatan') {
                                                    addOption(witelDropdown, 'Witel Kalsel', 'Witel Kalsel');
                                                    addOption(witelDropdown, 'Witel Kalteng', 'Witel Kalteng');
                                                } else if (selectedArea === 'Kalimantan Barat') {
                                                    addOption(witelDropdown, 'Witel Kalbar', 'Witel Kalbar');
                                                }
                                            });

                                            // Fungsi untuk menambahkan opsi ke dalam dropdown
                                            function addOption(select, text, value) {
                                                var option = document.createElement('option');
                                                option.text = text;
                                                option.value = value;
                                                select.add(option);
                                            }
                                        </script>

                                        <!--/span-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama Gedung</label>
                                                <input required type="text" required name="nama_gedung"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('nama_gedung')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Alamat</label>
                                                <input required type="text" required name="alamat"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('alamat')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Koordinat</label>
                                                <input required type="text" required name="koordinat"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('koordinat')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Luasan</label>
                                                <input required type="text" required name="luasan"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('luasan')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Total Petugas</label>
                                                <input required type="text" required name="total_petugas"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('total_petugas')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Id Gedung</label>
                                                <input required type="text" required name="Id_gedung"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('Id_gedung')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <!--/span-->

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
        </div>
        <!-- Modal Tambah Personil -->
        <div class="modal fade" id="ModalTambahGedung" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Personil</h5>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form action="{{ route('personil.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama Gedung</label>
                                                <input required type="text" required name="nama_gedung"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('nama_gedung')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Area</label>
                                                <select required name="nama_area" class="form-control custom-select"
                                                    id="nama_area">
                                                    <option value="">Pilih Area</option>
                                                    <option value="Balikpapan">Balikpapan</option>
                                                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('area')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Witel</label>
                                                <select required name="nama_witel" class="form-control custom-select"
                                                    id="nama_witel">
                                                    <option value="">Pilih Witel</option>
                                                    <!-- Opsi witel akan ditambahkan melalui JavaScript -->
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('witel')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>

                                        <script>
                                            // Mendengarkan perubahan pada dropdown "Area"
                                            document.getElementById('nama_area').addEventListener('change', function() {
                                                var witelDropdown = document.getElementById('nama_witel');
                                                witelDropdown.innerHTML = ''; // Menghapus opsi witel sebelumnya

                                                var selectedArea = this.value;

                                                // Menambahkan opsi witel berdasarkan area yang dipilih
                                                if (selectedArea === 'Balikpapan') {
                                                    addOption(witelDropdown, 'Witel Balikpapan', 'Witel Balikpapan');
                                                } else if (selectedArea === 'Kalimantan Timur') {
                                                    addOption(witelDropdown, 'Witel Samarinda', 'Witel Samarinda');
                                                    addOption(witelDropdown, 'Witel Kaltara', 'Witel Kaltara');
                                                } else if (selectedArea === 'Kalimantan Selatan') {
                                                    addOption(witelDropdown, 'Witel Kalsel', 'Witel Kalsel');
                                                    addOption(witelDropdown, 'Witel Kalteng', 'Witel Kalteng');
                                                } else if (selectedArea === 'Kalimantan Barat') {
                                                    addOption(witelDropdown, 'Witel Kalbar', 'Witel Kalbar');
                                                }
                                            });

                                            // Fungsi untuk menambahkan opsi ke dalam dropdown
                                            function addOption(select, text, value) {
                                                var option = document.createElement('option');
                                                option.text = text;
                                                option.value = value;
                                                select.add(option);
                                            }
                                        </script>

                                        <!--/span-->

                                        
                                        <!--/span-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Alamat</label>
                                                <input required type="text" required name="alamat"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('alamat')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Koordinat</label>
                                                <input required type="text" required name="koordinat"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('koordinat')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Luasan</label>
                                                <input required type="text" required name="luasan"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('luasan')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Total Petugas</label>
                                                <input required type="text" required name="total_petugas"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('total_petugas')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Id Gedung</label>
                                                <input required type="text" required name="Id_gedung"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('Id_gedung')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <!--/span-->

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
        </div>
        {{-- <!-- Modal Import -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="modal-import-label"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="/gedung_import" method="get" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-import-label">Import Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="file">Pilih file </label>
                                <input type="file" class="form-control-file" id="file" name="file">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}

    </div>
@endsection
