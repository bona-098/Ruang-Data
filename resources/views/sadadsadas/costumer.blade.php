@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Customer</h4>
                <br>
                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahCustomer">
                    <i class="fa fa-user-plus"></i> Tambah Customer
                </button>
                {{-- <h6 class="card-subtitle">Data table example</h6> --}}
                <div class="table-responsive" style="overflow-x: auto;">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped">
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
                                <th>Portofolio</th>
                                <th>Progress Project</th>
                                <th>Status Project</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>@foreach ($customer as $data)
                                
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class=" text-center">
                                        <button class=" btn-success dropdown-toggle" 
                                            id="dropdownMenuButton" data-toggle="dropdown" 
                                            ><i class="fa fa-cog"></i>
                                            action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#ModalDetailCustomer"
                                                href="#">Detail</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#ModalUpdateCustomer"
                                                href="#">Update</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#ModalDeleteCustomer"
                                                href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $data->unit_kerja }}</td>
                                <td>{{ $data->status_revenue }}</td>
                                <td>{{ $data->customer }}</td>
                                <td>{{ $data->segment }}</td>
                                <td>{{ $data->nama_project }}</td>
                                <td>{{ $data->lokasi_gedung }}</td>
                                <td>{{ $data->jenis_pekerjaan }}</td>
                                <td>{{ $data->portofolio }}</td>
                                <td>{{ $data->progress_project }}</td>
                                <td>{{ $data->status_project }}</td>
                            </tr>@endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /# column -->
        </div>
        {{-- Selesai --}}

        <!-- /# row -->

    </div>

    {{-- KONTEN MODAL DETAIL --}}

    <div class="modal fade" id="ModalDetailCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Detail</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive ">
                        <table style="text-align: left;" class="table table-bordered ">
                            {{-- <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kolom 1</th>
                                </tr>
                            </thead> --}}
                            <tbody>
                                <tr>
                                    <th scope="row">No</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Unit Kerja</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Status Revenue</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Customer</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Segment</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Project</th>
                                    <td>Perjanjian Sewa Menyewa Lahan Untuk Pemasangan Dan Penempatan Menara Telekomunikasi Bersama Dan Fasilitas Penunjangnya Tanah Kosong Untuk H3I
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Lokasi/Gedung</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Pekerjaan</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Portofolio</th>
                                    <td>BUSINESS SUPPORT & RISK MANAGEMENT REGIONAL VI ( Balikpapan )</td>
                                </tr>
                                <tr>
                                    <th scope="row">Progress Project</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Status Project</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Proses Pendekatan Customer</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Visit</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">SPH</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">BAKN</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">SPK/PO/PKS</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Masa Project (Bulan)</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jumlah Man Power/Unit/Luas</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal SP/BA/Kontrak/Nokes/Amandemen</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nomor SP/BA/Kontrak/Nokes/Amandemen</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Kontrak</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Mulai Project</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Akhir Project</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sisa Kontrak</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nilai Total Project (Sebelum PPN)</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nilai Project Per Tahun (Sebelum PPN)</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nilai Project Per bulan (Sebelum PPN)</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Key Contact Client</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jabatan PIC Client</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">No HP PIC Client</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama AM/PIC GSD Handle Project2</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Drive Kontrak</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Amandemen</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan</th>
                                    <td>Pembayaran dilakukan per 5 tahun. Tahun Pertama : 10.152.000.000 Tahun Kedua : 8.290.800.000</td>
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
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Customer</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('exma.store') }}" method="POST" enctype="multipart/form-data">
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
                                            <input type="text" required name="customer" id="" class="form-control"
                                                placeholder="Masukkan Customer">
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
                                            <label>Jenis Pekerjaan </label>
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
                                            <label>Portofolio</label>
                                            <input type="text" required name="portofolio" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('portofolio')
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
                                            <input  required name="visit" type="date" class="form-control">
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
                                            <input required name="nilai_total_project" type="number" class="form-control">
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
                                            <input required name="nilai_project_pertahun" type="text" class="form-control">
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
                                            <input required name="nilai_project_perbulan" type="text" class="form-control">
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
                                            <input required name="nama_key_kontak_client" type="text" class="form-control">
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
                                            <input required name="jabatan_pic_client" type="text" class="form-control">
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
                    <h5 class="modal-title" id="exampleModalLabel">Update Mitra</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="#">
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" id="NIK" class="form-control"
                                                placeholder="masukkan nama">
                                            {{-- <small class="form-control-feedback"> Feedback salah </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Domisili</label>
                                            <input type="text" id="Domisili" class="form-control form-control-danger"
                                                placeholder="Pitir Parkir">
                                            {{-- <small class="form-control-feedback"> This field has error. </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <!--/row-->
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kategori</label>
                                            <input type="text" id="kategori" class="form-control">
                                            <small class="form-control-feedback"> </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <!--/row-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nilai Asses</label>
                                            <input type="number" min="0" class="form-control"
                                                placeholder="masukkan nilai asses">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/row-->
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
@endsection
