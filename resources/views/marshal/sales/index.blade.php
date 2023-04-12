@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">

        {{-- Filter Tabel --}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <label for="filter1">Unit Kerja:</label>
                        <select id="filter1" class="form-control">
                            <option value="All">All</option>
                            <option value="Area Balikpapan">Area Balikpapan</option>
                            <option value="Area Kalimantan Timur">Area Kalimantan Timur</option>
                            <option value="Area Kalimantan Selatan">Area Kalimantan Selatan</option>
                            <option value="Area Kalimantan Barat">Area Kalimantan Barat</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="filter2">Status Revenue:</label>
                        <select id="filter2" class="form-control">
                            <option value="All">All</option>
                            <option value="Recurring">Recurring</option>
                            <option value="Scalling">Scalling</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="filter3">Segment:</label>
                        <select id="filter3" class="form-control">
                            <option value="All">All</option>
                            <option value="Enterprise">Enterprise</option>
                            <option value="Government">Government</option>
                            <option value="Subsidiaries">Subsidiaries</option>
                            <option value="Telkom">Telkom</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="filter4">Kategori:</label>
                        <select id="filter4" class="form-control">
                            <option value="All">All</option>
                            <option value="Exma">Project Solution</option>
                            <option value="Telkom">Property Development</option>
                            <option value="Telkom Group">Property Management</option>
                            <option value="TMS">TMS</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="filter5">Progress Project:</label>
                        <select id="filter5" class="form-control">
                            <option value="All">All</option>
                            <option value="Delivery">Delivery</option>
                            <option value="Win">Win</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="filter5">Status Project:</label>
                        <select id="filter5" class="form-control">
                            <option value="All">All</option>
                            <option value="Value 1">On Hand</option>
                            <option value="Value 2">Prospek</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="filter5">Jenis Kontrak:</label>
                        <select id="filter5" class="form-control">
                            <option value="All">All</option>
                            <option value="Area">Area</option>
                            <option value="Pusat">Pusat</option>
                            <option value="Regional">Regional</option>
                            <option value="Tarakan">Tarakan</option>
                            <option value="blanks">blanks</option>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal"><i class="fa fa-plus"></i>  Import Sales</button>
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
                            <tr>
                                @foreach ($sales as $data)
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
                {{-- </div> --}}
            </div>
            <!-- /# column -->
        </div>
        {{-- Selesai --}}

        <!-- /# row -->

    </div>

    {{-- KONTEN MODAL DETAIL --}}

    <div class="modal fade" id="ModalDetailCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog  modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Detail</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table text-align: left; id="myTable" class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">No</th>
                                    <td>{{ $data->id }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Unit Kerja</th>
                                    <td>{{ $data->unit_kerja }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Status Revenue</th>
                                    <td>{{ $data->status_revenue }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Customer</th>
                                    <td>{{ $data->customer }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Segment</th>
                                    <td>{{ $data->segment }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Project</th>
                                    <td >{{ $data->nama_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Lokasi/Gedung</th>
                                    <td>{{ $data->lokasi_gedung }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Pekerjaan</th>
                                    <td>{{ $data->jenis_pekerjaan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">portfolio</th>
                                    <td>{{ $data->portfolio }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Progress Project</th>
                                    <td>{{ $data->progress_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Status Project</th>
                                    <td>{{ $data->status_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Proses Pendekatan Customer</th>
                                    <td>{{ $data->proses_pendekatan_customer }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Visit</th>
                                    <td>{{ $data->visit }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">SPH</th>
                                    <td>{{ $data->sph }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">BAKN</th>
                                    <td>{{ $data->bakn }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">SPK/PO/PKS</th>
                                    <td>{{ $data->spk }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Masa Project (Bulan)</th>
                                    <td>{{ $data->bulan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jumlah Man Power/Unit/Luas</th>
                                    <td>{{ $data->jumlah_man_power }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal SP/BA/Kontrak/Nokes/Amandemen</th>
                                    <td>{{ $data->tgl_sp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nomor SP/BA/Kontrak/Nokes/Amandemen</th>
                                    <td>{{ $data->no_sp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Kontrak</th>
                                    <td>{{ $data->jenis_kontrak }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Mulai Project</th>
                                    <td>{{ $data->tgl_mulai_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Akhir Project</th>
                                    <td>{{ $data->tgl_akhir_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sisa Kontrak</th>
                                    <td>{{ $data->sisa_kontrak }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nilai Total Project (Sebelum PPN)</th>
                                    <td>{{ $data->nilai_total_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nilai Project Per Tahun (Sebelum PPN)</th>
                                    <td>{{ $data->nilai_project_pertahun }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nilai Project Per bulan (Sebelum PPN)</th>
                                    <td>{{ $data->nilai_project_perbulan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Key Contact Client</th>
                                    <td>{{ $data->nama_key_kontak_client }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Kontrak</th>
                                    <td>{{ $data->jenis_kontrak }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jabatan PIC Client</th>
                                    <td>{{ $data->jabatan_pic_client }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">No HP PIC Client</th>
                                    <td>{{ $data->no_hp_pic_client }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama AM/PIC GSD Handle Project2</th>
                                    <td>{{ $data->nama_pic_gsd }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Drive Kontrak</th>
                                    <td>{{ $data->drive_kontrak }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Amandemen</th>
                                    <td>{{ $data->amandemen }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan</th>
                                    <td>{{ $data->keterangan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- KONTEN MODAL DETAIL --}}

    <!-- KONTEN MODAL TAMBAH Customer  -->

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
                                            <input type="text" name="unit_kerja" id="Unit Kerja" class="form-control"
                                                placeholder="Masukkan Unit Kerja" required>
                                            <small class="form-control-feedback"> @error('unit_kerja')
                                                    {{ $message }}
                                                @enderror </small>
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
                                            <input name="jenis_pekerjaan" required type="text" class="form-control">
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
                                            <select name="proses_pendekatan_customer" class="form-control custom-select"
                                                id="pendidikan" name="pendidikan">
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
                                            <input required name="jumlah_man_power" type="number" class="form-control">
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
                                            <input required name="tgl_mulai_project" type="date" class="form-control"
                                                placeholder="dd/mm/yyyy">
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
                                            <input required name="tgl_akhir_project" type="date" class="form-control"
                                                placeholder="dd/mm/yyyy">
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
                                            <input required name="no_hp_pic_client" type="text" class="form-control">
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
                                            <input required name="drive_kontrak" type="text" class="form-control">
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

    <!-- KONTEN MODAL TAMBAH Customer  -->

    <!-- KONTEN MODAL UPDATE Customer  -->

    <div class="modal fade" id="ModalUpdateCustomer" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Sales</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('sales.update', $data->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Unit Kerja</label>
                                            <input type="text" value="{{ $data->unit_kerja }}" name="unit_kerja" id="Unit Kerja" class="form-control"
                                                placeholder="Masukkan Unit Kerja" required>
                                            <small class="form-control-feedback"> @error('unit_kerja')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Status Revenue</label>
                                            <select name="status_revenue" value="{{ $data->status_revenue }}" class="form-control custom-select">
                                                <option value="Recurring">Recurring</option>
                                                <option value="Scalling">Scalling</option>
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
                                            <input type="text" required name="customer" id="" value="{{ $data->customer }}"
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
                                            <select name="segment" value="{{ $data->segment }}" required class="form-control custom-select">
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
                                            <input name="nama_project" value="{{ $data->nama_project }}" required type="text" id="kota_lahir"
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
                                            <input name="lokasi_gedung" value="{{ $data->lokasi_gedung }}" required type="text" class="form-control">
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
                                            <label>Jenis Pekerjaan </label>
                                            <input name="jenis_pekerjaan" value="{{ $data->jenis_pekerjaan }}" required type="text" class="form-control">
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
                                            <input type="text" required value="{{ $data->portfolio }}" name="portfolio" class="form-control">
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
                                            <select name="progress_project" value="{{ $data->progress_project }}" class="form-control custom-select">
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
                                            <select name="status_project" value="{{ $data->status_project }}" class="form-control custom-select">
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
                                            <select name="proses_pendekatan_customer" class="form-control custom-select"
                                                id="pendidikan" value="{{ $data->proses_pendekatan_customer }}" name="pendidikan">
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
                                            <input required name="visit" type="date" value="{{ $data->visit }}" class="form-control">
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
                                            <input required name="sph" value="{{ $data->sph }}" type="date" class="form-control">
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
                                            <input required name="bakn" value="{{ $data->bakn }}" type="date" class="form-control"
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
                                            <input required name="spk" value="{{ $data->spk }}" type="date" class="form-control"
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
                                            <input required name="masa_project" value="{{ $data->bulan }}" type="number" class="form-control">
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
                                            <input required name="jumlah_man_power" value="{{ $data->jumlah_man_power }}" type="number" class="form-control">
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
                                            <input required name="tgl_sp" value="{{ $data->tgl_sp }}" type="date" class="form-control"
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
                                            <input required name="no_sp" value="{{ $data->no_sp }}" type="text" pattern="[a-zA-Z0-9\-@]+"
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
                                                id="pendidikan" value="{{ $data->jenis_kontrak }}" name="pendidikan">
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
                                            <input required value="{{ $data->tgl_mulai_project }}" name="tgl_mulai_project" type="date" class="form-control"
                                                placeholder="dd/mm/yyyy">
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
                                            <input required value="{{ $data->tgl_akhir_project }}" name="tgl_akhir_project" type="date" class="form-control"
                                                placeholder="dd/mm/yyyy">
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
                                            <input required value="{{ $data->sisa_kontrak }}" name="sisa_kontrak" type="number" class="form-control">
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
                                            <input required name="nilai_total_project" value="{{ $data->nilai_total_project }}" type="number"
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
                                            <input required value="{{ $data->nilai_project_pertahun }}" name="nilai_project_pertahun" type="text"
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
                                            <input required value="{{ $data->nilai_project_perbulan }}" name="nilai_project_perbulan" type="text"
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
                                            <input required value="{{ $data->nama_key_kontak_client }}" name="nama_key_kontak_client" type="text"
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
                                            <input required value="{{ $data->jenis_kontrak }}" name="jenis_kontrak" type="text" class="form-control">
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
                                            <input required value="{{ $data->jabatan_pic_client }}" name="jabatan_pic_client" type="text"
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
                                            <input required value="{{ $data->no_hp_pic_client }}" name="no_hp_pic_client" type="text" class="form-control">
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
                                            <input required value="{{ $data->nama_pic_gsd }}" name="nama_pic_gsd" type="text" class="form-control">
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
                                            <input required value="{{ $data->drive_kontrak }}" name="drive_kontrak" type="text" class="form-control">
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
                                            <input required name="amandemen" value="{{ $data->amandemen }}" type="text" class="form-control">
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
                                            <input required name="keterangan" value="{{ $data->keterangan }}" type="text" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('keterangan')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            {{-- <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                Save</button>
                            <button type="button" class="btn btn-inverse">Cancel</button>o
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

    <!-- KONTEN MODAL UPDATE Customer  -->

    {{-- KONTEN MODAL DELETE Customer --}}

    <div class="modal fade" id="ModalDeleteCustomer" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
                    <button type="button" class="btn btn-primary">Delete</button>
                </div>
            </div>
        </div>
    </div>

    {{-- KONTEN MODAL DELETE KARYAWAN --}}


    <!-- Modal -->
<div id="uploadModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true"> 
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        </div>
        <div class="modal-body">
            <form action="/" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row d-flex justify-content-end align-items-end">
                    <div class="col-6">
                    <!-- Form -->
                    <form method='post' action='' enctype="multipart/form-data">
                        Select file : <input type='file' name='file' id='file' class='form-control' ><br>
                    </form>
                    </div>
                    <div class="col-6 text-right mt-auto">
                    <input type='submit' class='btn btn-info' value='Upload' id='btn_upload'>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
          <!-- Preview-->
          <div id='preview'></div>
        </div>
      </div>  
    </div>
  </div>
{{-- 
  $('#editUserForm').submit(function(event) {
    event.preventDefault(); --}}
  
    {{-- $.ajax({
      url: "{{ route('sales.update', $data->id) }}",
      type: "PUT",
      data: $(this).serialize(),
      success: function(response) {
        $('#editUserModal').modal('hide');
        alert(response.message);
      },
      error: function() {
        alert("Error updating user");
      } --}}
<script>
    $(document).ready(function() {
        $(document).on('click', 'edition', function(){
            var sales_id = $(this).val();
            alert(sales_id)
        })
    })
</script>
@endsection