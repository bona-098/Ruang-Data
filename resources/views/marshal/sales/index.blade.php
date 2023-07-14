@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('sales.index') }}" method="GET" id="form_1">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label for="filter2">Unit Kerja:</label>
                            <select name="unit_kerja" class="form-control">
                                <option value="">Semua Unit Kerja</option>
                                <option value="Area Balikpapan"
                                    {{ isset($_GET['unit_kerja']) && $_GET['unit_kerja'] == 'Area Balikpapan' ? 'selected' : '' }}>
                                    Area Balikpapan</option>
                                <option value="Kaltim"
                                    {{ isset($_GET['unit_kerja']) && $_GET['unit_kerja'] == 'Kaltim' ? 'selected' : '' }}>
                                    Kaltim</option>
                                <option value="Kalsel"
                                    {{ isset($_GET['unit_kerja']) && $_GET['unit_kerja'] == 'Kalsel' ? 'selected' : '' }}>
                                    Kalsel</option>
                                <option value="Kalbar"
                                    {{ isset($_GET['unit_kerja']) && $_GET['unit_kerja'] == 'Kalbar' ? 'selected' : '' }}>
                                    Kalbar</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filter1">Status Revenue</label>
                            <select name="status_revenue" class="form-control">
                                <option value="">Semua Status Revenue</option>
                                <option value="Recurring"
                                    {{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Recurring' ? 'selected' : '' }}>
                                    Recurring</option>
                                <option value="Scalling"
                                    {{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Scalling' ? 'selected' : '' }}>
                                    Scalling</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filter2">Segment</label>
                            <select name="segment" class="form-control">
                                <option value="">Semua Segment</option>
                                <option value="Subsidiaries"
                                    {{ isset($_GET['segment']) && $_GET['segment'] == 'Subsidiaries' ? 'selected' : '' }}>
                                    Subsidiaries</option>
                                <option value="Government"
                                    {{ isset($_GET['segment']) && $_GET['segment'] == 'Government' ? 'selected' : '' }}>
                                    Government</option>
                                <option value="Telkom"
                                    {{ isset($_GET['segment']) && $_GET['segment'] == 'Telkom' ? 'selected' : '' }}>
                                    Telkom</option>
                                <option value="Enterprise"
                                    {{ isset($_GET['segment']) && $_GET['segment'] == 'Enterprise' ? 'selected' : '' }}>
                                    Enterprise</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filter3">Status Project</label>
                            <select name="status_project" class="form-control">
                                <option value="">Semua Status</option>
                                <option value="Potensi"
                                    {{ isset($_GET['status_project']) && $_GET['status_project'] == 'Potensi' ? 'selected' : '' }}>
                                    Potensi</option>
                                <option value="Prospek"
                                    {{ isset($_GET['status_project']) && $_GET['status_project'] == 'Prospek' ? 'selected' : '' }}>
                                    Prospek</option>
                                <option value="On hand"
                                    {{ isset($_GET['status_project']) && $_GET['status_project'] == 'On hand' ? 'selected' : '' }}>
                                    On hand</option>
                                <option value="Out"
                                    {{ isset($_GET['status_project']) && $_GET['status_project'] == 'Out' ? 'selected' : '' }}>
                                    Out</option>
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
        
   
    {{-- Akhir Filter Tabel --}}
    {{-- Data Tabel mulai baru --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Sales</h4>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahCustomer">
                <i class="fa fa-user-plus"></i> Tambah Sales
            </button>
            <a button type="button" href="/salees" class="btn btn-primary">
                <i class="fa fa-plus"></i> Import Sales</button> </a>
            <a button type="button" href="{{ route('sales.export') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i> Export</button> </a>
            <table text-align: left; id="myTable" class="table table-responsive  display table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Action</th>
                        <th style="white-space: nowrap;">Unit Kerja</th>
                        {{-- <th style="white-space: nowrap;">Status Revenue</th> --}}
                        <th style="white-space: nowrap;">Customer</th>
                        {{-- <th>Segment</th> --}}
                        <th style="white-space: nowrap;">Nama Project</th>
                        <th style="white-space: nowrap;">Nilai Total Project (Sebelum PPN)</th>
                        <th style="white-space: nowrap;">Nilai Project Per Tahun (Sebelum PPN)</th>
                        {{-- <th>Portfolio</th> --}}
                        <th style="white-space: nowrap;">Nilai Project Per Bulan (Sebelum PPN)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('sales.show', $data->id) }}">Detail</a>
                            </td>
                            <td style="white-space: nowrap;">{{ $data->unit_kerja }}</td>
                            {{-- <td>{{ $data->status_revenue }}</td> --}}
                            <td>{{ $data->customer }}</td>
                            {{-- <td>{{ $data->segment }}</td> --}}
                            <td>{{ $data->nama_project }}</td>
                            <td>Rp {{ number_format(floatval( $data->nilai_total_project), 0, ',', '.') }}</td>
                            <td>Rp {{ number_format(floatval( $data->nilai_project_pertahun), 0, ',', '.') }}</td>
                            <td>Rp {{ number_format(floatval($data->nilai_project_perbulan), 0, ',', '.') }}</td>
                            {{-- <td>{{ $data->progress_project }}</td>
                            <td>{{ $data->status_project }}</td> --}}
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
                                            <input type="text"  name="customer" id=""
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
                                            <select name="segment"  class="form-control custom-select">
                                                <option value="Subsidiaries">Subsidiaries</option>
                                                <option value="Government">Government</option>
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
                                            <input name="nama_project"  type="text" id="kota_lahir"
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
                                            <input name="lokasi_gedung"  type="text" class="form-control">
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
                                            <input name="jenis_pekerjaan"  type="text" class="form-control">
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
                                            <select name="portfolio" class="form-control custom-select">
                                                <option value="PROPERTY DEVELOPMENT">PROPERTY DEVELOPMENT</option>
                                                <option value="PROJECT SOLUTION">PROJECT SOLUTION</option>
                                                <option value="PROPERTY MANAGEMENT">PROPERTY MANAGEMENT</option>
                                                <option value="TRANSPORT MANAGEMENT SERVICES">TRANSPORT MANAGEMENT SERVICES
                                                </option>
                                                {{-- <option value="Win">Win</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Progress Project</label>
                                            <select name="progress_project" class="form-control custom-select">
                                                <option value="Inisiasi">Inisiasi</option>
                                                <option value="Sph">SPH</option>
                                                <option value="BAKN">BAKN</option>
                                                <option value="Win">Win</option>
                                                <option value="PKS Sign">PKS Sign</option>
                                                <option value="Delivery">Delivery</option>
                                                <option value="Komersil">Komersil</option>
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
                                            <input  name="visit" type="date" class="form-control">
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
                                            <input  name="sph" type="date" class="form-control">
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
                                            <input  name="bakn" type="date" class="form-control"
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
                                            <input  name="spk" type="date" class="form-control"
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
                                            <input  name="masa_project" type="number" class="form-control">
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
                                            <input  name="jumlah_man_power" type="text" class="form-control">
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
                                            <input  name="tgl_sp" type="date" class="form-control"
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
                                            <input  name="no_sp" type="text" pattern="[a-zA-Z0-9\-@]+"
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
                                                <option value="REGIONAL">REGIONAL</option>
                                                <option value="PUSAT">PUSAT</option>
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
                                            <input  name="tgl_mulai_project" type="date" class="form-control"
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
                                            <input  name="tgl_akhir_project" type="date" class="form-control"
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
                                            <input  name="sisa_kontrak" type="number" class="form-control">
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
                                            <input  name="nilai_total_project" type="number"
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
                                            <input  name="nilai_project_pertahun" type="text"
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
                                            <input  name="nilai_project_perbulan" type="text"
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
                                            <input  name="nama_key_kontak_client" type="text"
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
                                            <input  name="jenis_kontrak" type="text" class="form-control">
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
                                            <input  name="jabatan_pic_client" type="text"
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
                                            <input  name="no_hp_pic_client" type="text" class="form-control">
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
                                            <input  name="nama_pic_gsd" type="text" class="form-control">
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
                                            <input  name="amandemen" type="text" class="form-control">
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
                                            <input  name="keterangan" type="text" class="form-control">
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
    <!-- Modal Import -->
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="modal-import-label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/sales-import" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-import-label">Import Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="file">Pilih file Excel</label>
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
