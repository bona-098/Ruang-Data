@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="" method="GET" id="form_1">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                            <label for="filter1">Unit Kerja:</label>
                            <select name="unit_kerja" class="form-control">
                                <option value="">Pilih</option>
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
                        <div class="col-md-2">
                            <label for="filter2">Status Revenue:</label>
                            <select id="filter2" name="status_revenue" class="form-control">
                                <option value=" ">All</option>
                                <option value="Recurring"
                                    value="{{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Recurring' }}">
                                    Recurring</option>
                                <option value="Scalling"
                                    value="{{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Scalling' }}">
                                    Scalling</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="filter3">Segment:</label>
                            <select id="filter3" name="segment" class="form-control">
                                <option value="">All</option>
                                <option value="Enterprise"
                                    value="{{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Scalling' }}">
                                    Enterprise</option>
                                <option value="Government"
                                    value="{{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Scalling' }}">
                                    Government</option>
                                <option value="Subsidiaries"
                                    value="{{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Scalling' }}">
                                    Subsidiaries</option>
                                <option value="Telkom"
                                    value="{{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Scalling' }}">
                                    Telkom</option>
                            </select>
                        </div>
                        {{-- <div class="col-md-2">
                            <label for="filter4">Portfolio:</label>
                            <select id="filter4" name="portfollio" class="form-control">
                                <option value="All">All</option>
                                <option value="Exma" value="{{ isset($_GET['portfollio']) && $_GET['portfollio'] == 'Exma' }}">Project Solution</option>
                                <option value="Telkom" value="{{ isset($_GET['portfollio']) && $_GET['portfollio'] == 'Telkom' }}">Property Development</option>
                                <option value="Telkom Group" value="{{ isset($_GET['portfollio']) && $_GET['portfollio'] == 'Telkom Group' }}">Property Management</option>
                                <option value="TMS" value="{{ isset($_GET['portfollio']) && $_GET['portfollio'] == 'TMS' }}">TMS</option>
                            </select>
                        </div> --}}
                        {{-- <div class="col-md-2">
                            <label for="filter5">Progress Project:</label>
                            <select id="filter5" name="progress_project" class="form-control">
                                <option value="All">All</option>
                                <option value="Delivery" value="{{ isset($_GET['progress_project']) && $_GET['progress_project'] == 'Delivery' }}">Delivery</option>
                                <option value="Win" value="{{ isset($_GET['progress_project']) && $_GET['progress_project'] == 'Win' }}">Win</option>
                            </select>
                        </div> --}}
                        <div class="col-md-2">
                            <label for="filter5">Status Project:</label>
                            <select id="filter5" name="status_project" class="form-control">
                                <option value="">All</option>
                                <option value="On Hand"
                                    value="{{ isset($_GET['status_project']) && $_GET['status_project'] == 'On Hand' }}">On
                                    Hand</option>
                                <option value="Prospek"
                                    value="{{ isset($_GET['status_project']) && $_GET['status_project'] == 'Prospek' }}">
                                    Prospek</option>
                            </select>
                        </div>
                        {{-- <div class="col-md-2">
                            <label for="filter5">Jenis Kontrak:</label>
                            <select id="filter5" name="jenis_kontrak" class="form-control">
                                <option value="All">All</option>
                                <option value="Area" value="{{ isset($_GET['jenis_kontrak']) && $_GET['jenis_kontrak'] == 'Area' }}">Area</option>
                                <option value="Pusat" value="{{ isset($_GET['jenis_kontrak']) && $_GET['jenis_kontrak'] == 'Pusat' }}">Pusat</option>
                                <option value="Regional" value="{{ isset($_GET['jenis_kontrak']) && $_GET['jenis_kontrak'] == 'Regional' }}">Regional</option>
                                <option value="Tarakan" value="{{ isset($_GET['jenis_kontrak']) && $_GET['jenis_kontrak'] == 'Tarakan' }}">Tarakan</option>
                                <option value="blanks" value="{{ isset($_GET['jenis_kontrak']) && $_GET['jenis_kontrak'] == 'blanks' }}">blanks</option>
                            </select>
                        </div> --}}
                        <div class="col-md-2" style="padding-top: 5px;">
                            <label for="filter5"> </label>
                            <button type="submit" class=" form-control btn-success"> <i class="fa fa-filter"></i>
                                Filter</button>
                        </div>
                        <div class="col-md-2" style="padding-top: 5px;">
                            <label for="filter5"> </label>
                            <a button type="button" href="{{ route('resetFilter') }}"
                                class=" form-control btn-success">Reset</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- Akhir Filter Tabel --}}
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Sales</h4>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahCustomer">
                    <i class="fa fa-user-plus"></i> Tambah Sales
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal"><i
                        class="fa fa-plus"></i> Import Sales</button>
                <table text-align: left; id="myTable" class="table display table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Unit Kerja</th>
                            <th>Status Revenue</th>
                            <th>Customer</th>
                            <th>Segment</th>
                            <th>Nama Project</th>
                            <th>Lokasi/Gedung</th>
                            <th>Jenis Pekerjaan</th>
                            <th>Portfolio</th>
                            <th>Progress Project</th>
                            <th>Status Project</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sales as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('sales.show', $data->id) }}">Detail</a>
                                </td>
                                <td>{{ $data->unit_kerja }}</td>
                                <td>{{ $data->status_revenue }}</td>
                                <td>{{ $data->customer }}</td>
                                <td>{{ $data->segment }}</td>
                                <td>{{ $data->nama_project }}</td>
                                <td>{{ $data->lokasi_gedung }}</td>
                                <td>{{ $data->jenis_pekerjaan }}</td>
                                <td>{{ $data->portfolio }}</td>
                                <td>{{ $data->progress_project }}</td>
                                <td>{{ $data->status_project }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade" id="ModalTambahCustomer" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Sales</h5>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form action="{{ route('sales.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Unit Kerja</label>
                                                <select name="unit_kerja" class="form-control custom-select">
                                                    <option value="Area Balikpapan">Area Balikpapan</option>
                                                    <option value="Area Kaltim">Area Kaltim</option>
                                                    <option value="Area Kalsel">Area Kalsel</option>
                                                    <option value="Area Kalbar">Area Kalbar</option>                                                    
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('status_revenue')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Status Revenue</label>
                                                <select name="status_revenue" class="form-control custom-select">
                                                    <option value="Recurring">Recurring</option>
                                                    <option value="">Scalling</option>
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('status_revenue')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Customer</label>
                                                <input type="text" required name="customer" id=""
                                                    class="form-control" placeholder="Masukkan Customer">
                                                <small class="form-control-feedback"> @error('customer')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Segment</label>
                                                <select name="segment" required class="form-control custom-select">
                                                    <option value="Subsidiaries">Subsidiaries</option>
                                                    <option value="Enterprise">Enterprise</option>
                                                    <option value="Telkom">Telkom</option>
                                                    <option value="Enterprise">Enterprise</option>
                                                </select>
                                                <small class="form-control-feedback"> @error('segment')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Nama Project</label>
                                                <input name="nama_project" required type="text" id="kota_lahir"
                                                    class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('nama_project')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label>Lokasi Gedung</label>
                                                <input name="lokasi_gedung" required type="text" class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('lokasi_gedung')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jenis Pekerjaan</label>
                                                <input name="jenis_pekerjaan" required type="text"
                                                    class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('jenis_pekerjaan')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Portfolio</label>
                                                <input type="text" required name="portfolio" class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('portfolio')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Progress Project</label>
                                                <select name="progress_project" class="form-control custom-select">
                                                    <option value="Delivery">Delivery</option>
                                                    <option value="BAKN">BAKN</option>
                                                    <option value="Komersil">Komersil</option>
                                                    <option value="PKS Sign">PKS Sign</option>
                                                    <option value="Win">Win</option>
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('progress_project')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Status Project</label>
                                                <select name="status_project" class="form-control custom-select">
                                                    <option value="On Hand">On Hand</option>
                                                    <option value="Out">Out</option>
                                                    <option value="Potensi">Potensi</option>
                                                    <option value="Prospek">Prospek</option>
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('status_project')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Proses Pendekatan Customer</label>
                                                <select name="proses_pendekatan_customer"
                                                    class="form-control custom-select" id="pendidikan" name="pendidikan">
                                                    <option value="PL">PL</option>
                                                    <option value="Tender">Tender</option>
                                                    <option value="Visit">Visit</option>
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('proses_pendekatan_customer')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Visit</label>
                                                <input required name="visit" type="date" class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('visit')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>SPH</label>
                                                <input required name="sph" type="date" class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('sph')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">BAKN</label>
                                                <input required name="bakn" type="date" class="form-control"
                                                    placeholder="dd/mm/yyyy">
                                                <small class="form-control-feedback">
                                                    @error('bakn')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">SPK/PO/PKS</label>
                                                <input required name="spk" type="date" class="form-control"
                                                    placeholder="dd/mm/yyyy">
                                                <small class="form-control-feedback">
                                                    @error('spk')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Masa Project (Bulan)</label>
                                                <input required name="masa_project" type="number" class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('masa_project')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jumlah Man Power/Unit/Luas</label>
                                                <input required name="jumlah_man_power" type="number"
                                                    class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('jumlah_man_power')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Tanggal SP/BA/Kontrak/Nokes/Amandemen</label>
                                                <input required name="tgl_sp" type="date" class="form-control"
                                                    placeholder="dd/mm/yyyy">
                                                <small class="form-control-feedback">
                                                    @error('tgl_sp')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No SP/BA/Kontrak/Nokes/Amandemen</label>
                                                <input required name="no_sp" type="text" pattern="[a-zA-Z0-9\-@]+"
                                                    class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('no_sp')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Jenis Kontrak</label>
                                                <select name="jenis_kontrak" class="form-control custom-select"
                                                    id="pendidikan" name="pendidikan">
                                                    <option value="SMA">Area</option>
                                                    <option value="SMK">Pusat</option>
                                                    <option value="D3">Regional</option>
                                                    <option value="S1">Tarakan</option>
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('jenis_kontrak')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Tanggal Mulai Project</label>
                                                <input required name="tgl_mulai_project" type="date"
                                                    class="form-control" placeholder="dd/mm/yyyy">
                                                <small class="form-control-feedback">
                                                    @error('tgl_mulai_project')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Tanggal Akhir Project</label>
                                                <input required name="tgl_akhir_project" type="date"
                                                    class="form-control" placeholder="dd/mm/yyyy">
                                                <small class="form-control-feedback">
                                                    @error('tgl_akhir_project')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Sisa Kontrak</label>
                                                <input required name="sisa_kontrak" type="number" class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('sisa_kontrak')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nilai Total Project (Sebelum PPN)</label>
                                                <input required name="nilai_total_project" type="number"
                                                    class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('nilai_total_project')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nilai Project Per Tahun (Sebelum PPN)</label>
                                                <input required name="nilai_project_pertahun" type="text"
                                                    class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('nilai_project_pertahun')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nilai Project Per Bulan (Sebelum PPN)</label>
                                                <input required name="nilai_project_perbulan" type="text"
                                                    class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('nilai_project_perbulan')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Key Contact Client</label>
                                                <input required name="nama_key_kontak_client" type="text"
                                                    class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('nama_key_kontak_client')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jenis Kontrak</label>
                                                <input required name="jenis_kontrak" type="text" class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('jenis_kontrak')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jabatan Pic Client</label>
                                                <input required name="jabatan_pic_client" type="text"
                                                    class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('jabatan_pic_client')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No HP PIC Client</label>
                                                <input required name="no_hp_pic_client" type="text"
                                                    class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('no_hp_pic_client')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama AM/PIC GSD Handle Project</label>
                                                <input required name="nama_pic_gsd" type="text" class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('nama_pic_gsd')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Drive Kontrak</label>
                                                <input name="drive_kontrak" type="file">
                                                <small class="form-control-feedback">
                                                    @error('drive_kontrak')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Amandemen</label>
                                                <input required name="amandemen" type="text" class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('amandemen')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input required name="keterangan" type="text" class="form-control">
                                                <small class="form-control-feedback">
                                                    @error('keterangan')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    </div>
@endsection
