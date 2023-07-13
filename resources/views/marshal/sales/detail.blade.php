@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Detail Data Sales Unit Kerja : {{ $sales->unit_kerja }}</h3>
                <button type="button" class=" btn btn-primary dropdown-toggle" id="dropdownMenuButton"
                    data-toggle="dropdown"><i class="fa fa-cog"></i>
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-toggle="modal" data-target="#Kontrak" href="#">Upload Drive
                        Kontrak</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalUpdateSales" href="#">Edit</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalDeleteSales"
                        href="#">Delete</a>
                </div>
                <div style="margin-top: 20px;">
                    <div class="table-responsive">
                        <table text-align: left; id="myTable" class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Unit Kerja</th>
                                    <td>{{ $sales->unit_kerja }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Status Revenue</th>
                                    <td>{{ $sales->status_revenue }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Customer</th>
                                    <td>{{ $sales->customer }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Segment</th>
                                    <td>{{ $sales->segment }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Project</th>
                                    <td>{{ $sales->nama_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Lokasi Gedung</th>
                                    <td>{{ $sales->lokasi_gedung }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Pekerjaan</th>
                                    <td>{{ $sales->jenis_pekerjaan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Portfolio</th>
                                    <td>{{ $sales->portfolio }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Progress Project</th>
                                    <td>{{ $sales->progress_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Status Project</th>
                                    <td>{{ $sales->status_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Proses Pendekatan Customer</th>
                                    <td>{{ $sales->proses_pendekatan_customer }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Visit</th>
                                    <td>{{ $sales->visit }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">SPH</th>
                                    <td>{{ $sales->sph }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">BAKN</th>
                                    <td>{{ $sales->bakn }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">SPK/PO/PKS</th>
                                    <td>{{ $sales->spk }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Masa Project (Bulan)</th>
                                    <td>{{ $sales->masa_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jumlah Man Power/Unit/Luas</th>
                                    <td>{{ $sales->jumlah_man_power }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal SP/BA/Kontrak/Nokes/Amandemen</th>
                                    <td>{{ $sales->tgl_sp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">No SP/BA/Kontrak/Nokes/Amandemen</th>
                                    <td>{{ $sales->no_sp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Kontrak</th>
                                    <td>{{ $sales->jenis_kontrak }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Mulai Project</th>
                                    <td>{{ $sales->tgl_mulai_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jumlah Man Power/Unit/Luas</th>
                                    <td>{{ $sales->jumlah_man_power }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tanggal Akhir Project</th>
                                    <td>{{ $sales->tgl_akhir_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sisa Kontrak</th>
                                    <td>{{ $sales->sisa_kontrak }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nilai Total Project (Sebelum PPN)</th>
                                    <td>{{ $sales->nilai_total_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nilai Project Per Tahun (Sebelum PPN)</th>
                                    <td>{{ $sales->nilai_project_pertahun }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nilai Project Per Bulan (Sebelum PPN)</th>
                                    <td>{{ $sales->nilai_project_perbulan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Key Contact Client</th>
                                    <td>{{ $sales->nama_key_kontak_client }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jenis Kontrak</th>
                                    <td>{{ $sales->jenis_kontrak }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jabatan Pic Client</th>
                                    <td>{{ $sales->jabatan_pic_client }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">No HP PIC Client</th>
                                    <td>{{ $sales->no_hp_pic_client }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama AM/PIC GSD Handle Project</th>
                                    <td>{{ $sales->nama_pic_gsd }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Drive Kontrak</th>
                                    <td><a
                                            href="{{ asset('drive' . $sales->drive_kontrak) }}">{{ $sales->drive_kontrak }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Amandemen</th>
                                    <td>{{ $sales->amandemen }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan</th>
                                    <td>{{ $sales->keterangan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Kontrak" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Sales</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('sales.update', $sales->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Drive Kontrak</label>
                                            <input type="file" value="{{ $sales->drive_kontrak }}" name="drive_kontrak"
                                                id="drive_kontrak" class="form-control" placeholder="Masukkan Unit Kerja"
                                                >
                                            <small class="form-control-feedback"> @error('drive_kontrak')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KONTEN MODAL UPDATE Sales  -->
    <div class="modal fade" id="ModalUpdateSales" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Sales</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('sales.update', $sales->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Unit Kerja</label>
                                            <input type="text" value="{{ $sales->unit_kerja }}" name="unit_kerja"
                                                id="Unit Kerja" class="form-control" placeholder="Masukkan Unit Kerja"
                                                >
                                            <small class="form-control-feedback"> @error('unit_kerja')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Status Revenue</label>
                                            <select name="status_revenue" value="{{ $sales->status_revenue }}"
                                                class="form-control custom-select">
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
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Customer</label>
                                            <input type="text"  name="customer" id=""
                                                value="{{ $sales->customer }}" class="form-control"
                                                placeholder="Masukkan Customer">
                                            <small class="form-control-feedback"> @error('customer')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Segment</label>
                                            <select name="segment"  class="form-control custom-select">
                                                <option value="Enterprise" {{ $sales->segment == 'Enterprise' ? 'selected' : '' }}>Enterprise</option>
                                                <option value="Government" {{ $sales->segment == 'Government' ? 'selected' : '' }}>Government</option>
                                                <option value="Subsidiaries" {{ $sales->segment == 'Subsidiaries' ? 'selected' : '' }}>Subsidiaries</option>
                                                <option value="Telkom" {{ $sales->segment == 'Telkom' ? 'selected' : '' }}>Telkom</option>
                                            </select>
                                            <small class="form-control-feedback"> @error('segment')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Nama Project</label>
                                            <input name="nama_project" value="{{ $sales->nama_project }}" 
                                                type="text" id="kota_lahir" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('nama_project')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Lokasi Gedung</label>
                                            <input name="lokasi_gedung" value="{{ $sales->lokasi_gedung }}" 
                                                type="text" class="form-control">
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
                                            <input name="jenis_pekerjaan" value="{{ $sales->jenis_pekerjaan }}" 
                                                type="text" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('jenis_pekerjaan')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Portfolio</label>
                                            <input type="text"  value="{{ $sales->portfolio }}"
                                                name="portfolio" class="form-control">
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
                                                <option value="Inisiasi" {{ $sales->progress_project == 'Inisiasi' ? 'selected' : '' }}>Inisiasi</option>
                                                <option value="Sph" {{ $sales->progress_project == 'Sph' ? 'selected' : '' }}>Sph</option>
                                                <option value="BAKN" {{ $sales->progress_project == 'BAKN' ? 'selected' : '' }}>BAKN</option>
                                                <option value="Win" {{ $sales->progress_project == 'Win' ? 'selected' : '' }}>Win</option>
                                                <option value="PKS Sign" {{ $sales->progress_project == 'PKS Sign' ? 'selected' : '' }}>PKS Sign</option>
                                                <option value="Delivery" {{ $sales->progress_project == 'Delivery' ? 'selected' : '' }}>Delivery</option>
                                                <option value="Komersil" {{ $sales->progress_project == 'Komersil' ? 'selected' : '' }}>Komersil</option>
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
                                                <option value="On Hand" {{ $sales->status_project == 'On Hand' ? 'selected' : '' }}>On Hand</option>
                                                <option value="Out" {{ $sales->status_project == 'Out' ? 'selected' : '' }}>Out</option>
                                                <option value="Potensi" {{ $sales->status_project == 'Potensi' ? 'selected' : '' }}>Potensi</option>
                                                <option value="Prospek" {{ $sales->status_project == 'Prospek' ? 'selected' : '' }}>Prospek</option>
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
                                            <select name="proses_pendekatan_customer" class="form-control custom-select" id="pendidikan">
                                                <option value="PL" {{ $sales->proses_pendekatan_customer == 'PL' ? 'selected' : '' }}>PL</option>
                                                <option value="Tender" {{ $sales->proses_pendekatan_customer == 'Tender' ? 'selected' : '' }}>Tender</option>
                                                <option value="Visit" {{ $sales->proses_pendekatan_customer == 'Visit' ? 'selected' : '' }}>Visit</option>
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
                                            <input  name="visit" type="date" value="{{ $sales->visit }}"
                                                class="form-control">
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
                                            <input  name="sph" value="{{ $sales->sph }}" type="date"
                                                class="form-control">
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
                                            <input  name="bakn" value="{{ $sales->bakn }}" type="date"
                                                class="form-control" placeholder="dd/mm/yyyy">
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
                                            <input  name="spk" value="{{ $sales->spk }}" type="date"
                                                class="form-control" placeholder="dd/mm/yyyy">
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
                                            <input  name="masa_project" value="{{ $sales->masa_project }}"
                                                type="number" class="form-control">
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
                                            <input  name="jumlah_man_power"
                                                value="{{ $sales->jumlah_man_power }}" type="number"
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
                                            <input  name="tgl_sp" value="{{ $sales->tgl_sp }}" type="date"
                                                class="form-control" placeholder="dd/mm/yyyy">
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
                                            <input  name="no_sp" value="{{ $sales->no_sp }}" type="text"
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
                                            <select name="jenis_kontrak" class="form-control custom-select" id="pendidikan">
                                                <option value="Area" {{ $sales->jenis_kontrak == 'Area' ? 'selected' : '' }}>Area</option>
                                                <option value="Pusat" {{ $sales->jenis_kontrak == 'Pusat' ? 'selected' : '' }}>Pusat</option>
                                                <option value="Regional" {{ $sales->jenis_kontrak == 'Regional' ? 'selected' : '' }}>Regional</option>
                                                <option value="Tarakan" {{ $sales->jenis_kontrak == 'Tarakan' ? 'selected' : '' }}>Tarakan</option>
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
                                            <input  value="{{ $sales->tgl_mulai_project }}"
                                                name="tgl_mulai_project" type="date" class="form-control"
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
                                            <input  value="{{ $sales->tgl_akhir_project }}"
                                                name="tgl_akhir_project" type="date" class="form-control"
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
                                            <input  value="{{ $sales->sisa_kontrak }}" name="sisa_kontrak"
                                                type="number" class="form-control">
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
                                            <input  name="nilai_total_project"
                                                value="{{ $sales->nilai_total_project }}" type="number"
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
                                            <input  value="{{ $sales->nilai_project_pertahun }}"
                                                name="nilai_project_pertahun" type="text" class="form-control">
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
                                            <input  value="{{ $sales->nilai_project_perbulan }}"
                                                name="nilai_project_perbulan" type="text" class="form-control">
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
                                            <input  value="{{ $sales->nama_key_kontak_client }}"
                                                name="nama_key_kontak_client" type="text" class="form-control">
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
                                            <input  value="{{ $sales->jenis_kontrak }}" name="jenis_kontrak"
                                                type="text" class="form-control">
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
                                            <input  value="{{ $sales->jabatan_pic_client }}"
                                                name="jabatan_pic_client" type="text" class="form-control">
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
                                            <input  value="{{ $sales->no_hp_pic_client }}"
                                                name="no_hp_pic_client" type="text" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('no_hp_pic_client')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama AM/PIC GSD Handle Project</label>
                                            <input  value="{{ $sales->nama_pic_gsd }}" name="nama_pic_gsd"
                                                type="text" class="form-control">
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
                                            <input  value="{{ $sales->drive_kontrak }}" name="drive_kontrak"
                                                type="text" class="form-control">
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
                                            <input  name="amandemen" value="{{ $sales->amandemen }}"
                                                type="text" class="form-control">
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
                                            <input  name="keterangan" value="{{ $sales->keterangan }}"
                                                type="text" class="form-control">
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
    <!-- KONTEN MODAL UPDATE Customer  -->
    {{-- KONTEN MODAL DELETE Customer --}}
    <div class="modal fade" id="ModalDeleteSales" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                </div>
                <div class="modal-body">
                    Tindakan ini akan menghapus data tersebut dan data yang dihapus tidak dapat dikembalikan.
                    Apakah
                    Anda yakin ingin melanjutkan?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form action="{{ route('sales.destroy', $sales->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- KONTEN MODAL DELETE KARYAWAN --}}
@endsection
