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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahGedung">
                    <i class="fa fa-user-plus"></i> Tambah Gedung
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal"><i
                        class="fa fa-plus"></i> Import Data Gedung</button>
                <table text-align: left; id="myTable"
                    class=" table table-responsive display table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th style="white-space: nowrap;">Nama Area</th>
                            <th style="white-space: nowrap;">Nama Witel</th>
                            <th style="white-space: nowrap;">Alamat</th>
                            <th style="white-space: nowrap;">Nama Gedung</th>
                            <th>Koordinat</th>
                            <th style="white-space: nowrap;">Total Petugas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gedung as $g)
                        <tr>
                            <td>1</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('gedung.show', $g->id) }}">Detail</a>
                            </td>
                            <td style="white-space: nowrap;">{{ $g->nama_area }}</td>
                            <td style="white-space: nowrap;">{{ $g->nama_witel }}</td>
                            <td style="white-space: nowrap;">{{ $g->alamat }}</td>
                            <td style="white-space: nowrap;">{{ $g->koordinat }}</td>
                            <td style="white-space: nowrap;">{{ $g->total_petugas }}</td>
                            <td>4</td>
                        </tr>       
                        @endforeach
                    </tbody>
                </table>
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
                                                <select required name="nama_area" class="form-control custom-select">
                                                    <option value="">Pilih Area</option>
                                                    <option value="Balikpapan">Balikpapan</option>
                                                    <option value="Kalimatan Timur">Kalimantan Timur</option>
                                                    <option value="Kalimatan Selatan">Kalimantan Selatan</option>
                                                    <option value="Kalimatan Barat">Kalimantan Barat</option>
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
                                                <select required name="nama_witel" class="form-control custom-select">
                                                    <option value="">Pilih Witel</option>
                                                    <option value="Witel Balikpapan">Witel Balikpapan</option>
                                                    <option value="Witel Samarinda">Witel Samarinda</option>
                                                    <option value="Witel Kaltara">Witel Kaltara</option>
                                                    <option value="Witel Kalsel">Witel Kalsel</option>
                                                    <option value="Witel Kalteng">Witel Kalteng</option>
                                                    <option value="Witel Kalber">Witel Kalbar</option>
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('witel')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
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
                                                <label class="control-label">total petugas</label>
                                                <input required type="text" required name="total_petugas"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('total_petugas')
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
        <!-- Modal Import -->
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="modal-import-label"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="/" method="post" enctype="multipart/form-data">
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
        </div>

    </div>
@endsection