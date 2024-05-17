<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/id.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Monitoring Property Managemant</h4>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahCustomer">
                    <i class="fa fa-user-plus"></i> Tambah Customer
                </button>
                {{-- <a button type="button" class="btn btn-primary" href="/import-mitra">
                        <i class="fa fa-plus"></i> Import Mitra
                        </button> </a> --}}
                {{-- <h6 class="card-subtitle">Data table example</h6> --}}
                <div class="table-responsive ">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped"
                        style="font-size: 14px;">
                        <thead>
                            <tr>
                                <th>Unit Kerja</th>
                                <th>Customer</th>
                                <th>Segmen</th>
                                <th>Nama Proyek</th>
                                <th>Periode Kontrak</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($monitoringpm as $m)
                                <tr>
                                    <td>{{ $m->unit_kerja }}</td>
                                    <td>{{ $m->customer }}</td>
                                    <td>{{ $m->segmen }}</td>
                                    <td>{{ $m->nama_project }}</td>
                                    <td>{{ $m->tanggal_kontrak }}</td>
                                    <td>
                                        <button type="button"
                                            class="btn {{ isset($m->kontrak) ? 'btn-success' : 'btn-danger' }}"
                                            data-toggle="modal" data-target="#detail-{{ $m->id }}">
                                            {{ $m->sph == null
                                                ? 'SPH'
                                                : ($m->boq == null
                                                    ? 'BOQ'
                                                    : ($m->bakn == null
                                                        ? 'BAKN'
                                                        : ($m->jib == null
                                                            ? 'JIB'
                                                            : ($m->kontrak == null
                                                                ? 'Kontrak'
                                                                : ($m->nd_pengajuan == null
                                                                    ? 'ND Pengajuan'
                                                                    : ($m->nd_persetujuan == null
                                                                        ? 'ND Persetujuan'
                                                                        : ($m->pkwt == null
                                                                            ? 'PKWT'
                                                                            : ($m->crm_np == null || $m->crm_nd == null || $m->crm_cc == null
                                                                                ? 'CRM'
                                                                                : 'Kontrak')))))))) }}

                                        </button>

                                        <div class="modal fade" id="detail-{{ $m->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update Customer</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body ">
                                                        <div class="grid text-center">
                                                            <button
                                                                class="btn {{ $m->sph == null ? 'btn-danger' : 'btn-success' }}"
                                                                data-file-path="{{ $m->sph ? asset('pdfs/monitoring/' . $m->sph) : '#' }}"
                                                                onclick="downloadFile(this)" data-bs-toggle="popover"
                                                                title="Popover title">
                                                                SPH
                                                            </button>
                                                            >
                                                            <button
                                                                class="btn {{ $m->boq == null ? 'btn-danger' : 'btn-success' }}"
                                                                data-file-path="{{ $m->boq ? asset('pdfs/monitoring/' . $m->boq) : '#' }}"
                                                                onclick="downloadFile(this)" data-bs-toggle="popover"
                                                                title="Popover title">BOQ</button>
                                                            >
                                                            <button
                                                                class="btn {{ $m->bakn == null ? 'btn-danger' : 'btn-success' }}"
                                                                data-file-path="{{ $m->bakn ? asset('pdfs/monitoring/' . $m->bakn) : '#' }}"
                                                                onclick="downloadFile(this)" data-bs-toggle="popover"
                                                                title="Popover title">BAKN</button>
                                                            >
                                                            <button
                                                                class="btn {{ $m->jib == null ? 'btn-danger' : 'btn-success' }}"
                                                                data-file-path="{{ $m->jib ? asset('pdfs/monitoring/' . $m->jib) : '#' }}"
                                                                onclick="downloadFile(this)" data-bs-toggle="popover"
                                                                title="Popover title">JIB</button>
                                                            >
                                                            <button
                                                                class="btn {{ $m->kontrak == null ? 'btn-danger' : 'btn-success' }}"
                                                                data-file-path="{{ $m->kontrak ? asset('pdfs/monitoring/' . $m->kontrak) : '#' }}"
                                                                onclick="downloadFile(this)" data-bs-toggle="popover"
                                                                title="Popover title">KONTRAK</button>
                                                            >
                                                            <button
                                                                class="btn {{ $m->nd_pengajuan == null ? 'btn-danger' : 'btn-success' }}"
                                                                data-file-path="{{ $m->nd_pengajuan ? asset('pdfs/monitoring/' . $m->nd_pengajuan) : '#' }}"
                                                                onclick="downloadFile(this)" data-bs-toggle="popover"
                                                                title="Popover title">NODIN
                                                                PENGAJUAN</button>
                                                            >
                                                            <button
                                                                class="btn {{ $m->nd_pengajuan == null ? 'btn-danger' : 'btn-success' }}"
                                                                data-file-path="{{ $m->nd_persetujuan ? asset('pdfs/monitoring/' . $m->nd_persetujuan) : '#' }}"
                                                                onclick="downloadFile(this)" data-bs-toggle="popover"
                                                                title="Popover title">NODIN
                                                                PERSETUJUAN</button>
                                                            >
                                                            <button
                                                                class="btn {{ $m->pkwt == null ? 'btn-danger' : 'btn-success' }}"
                                                                data-file-path="{{ $m->pkwt ? asset('pdfs/monitoring/' . $m->pkwt) : '#' }}"
                                                                onclick="downloadFile(this)" data-bs-toggle="popover"
                                                                title="Popover title">PKWT</button>
                                                            >
                                                            <button
                                                                class="btn {{ $m->crm_np == null || $m->crm_nd == null || $m->crm_cc == null ? 'btn-danger' : 'btn-success' }}"
                                                                data-bs-toggle="popover" title="Popover title">CRM</button>

                                                            >
                                                            <button
                                                                class="btn {{ $m->sph == null || $m->boq == null || $m->bakn == null || $m->jib == null || $m->kontrak == null || $m->nd_pengajuan == null || $m->pkwt == null || $m->crm_np == null || $m->crm_nd == null || $m->crm_cc == null ? 'btn-danger' : 'btn-success' }}"
                                                                data-bs-toggle="popover" title="Popover title">DONE</button>
                                                        </div>

                                                        <hr>

                                                        <form method="POST"
                                                            action="{{ route('monitoringpm.update', $m->id) }}"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-body">

                                                                <div class="row p-t-20">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Unit Kerja</label>
                                                                            <input type="text" id="unit_kerja"
                                                                                value="{{ $m->unit_kerja }}"
                                                                                class="form-control" name="unit_kerja">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Customer</label>
                                                                            <input type="text" id="customer"
                                                                                value="{{ $m->customer }}"
                                                                                name="customer" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-t-20">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Segmen</label>
                                                                            <input type="text" id="segmen"
                                                                                value="{{ $m->segmen }}"
                                                                                name="segmen" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Nama
                                                                                Project</label>
                                                                            <input type="text" id="nama_project"
                                                                                value="{{ $m->nama_project }}"
                                                                                name="nama_project" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-t-20">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Nilai
                                                                                Kontrak</label>
                                                                            <input type-currency=”IDR” id="nilai_kontrak"
                                                                                value="{{ $m->nilai_kontrak }}"
                                                                                name="nilai_kontrak" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Nilai
                                                                                Perbulan</label>
                                                                            <input type="text" id="nilai_perbulan"
                                                                                value="{{ $m->nilai_perbulan }}"
                                                                                name="nilai_perbulan"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-t-20">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Jumlah HK</label>
                                                                            <input type="text"
                                                                                id="jumlah_hk_update_{{ $m->id }}"
                                                                                value="{{ $m->jumlah_hk }}"
                                                                                name="jumlah_hk" class="form-control"
                                                                                oninput="hitungTotalPKWTUpdate({{ $m->id }})">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Jumlah
                                                                                Security</label>
                                                                            <input type="text"
                                                                                id="jumlah_security_update_{{ $m->id }}"
                                                                                value="{{ $m->jumlah_security }}"
                                                                                name="jumlah_security"
                                                                                class="form-control"
                                                                                oninput="hitungTotalPKWTUpdate({{ $m->id }})">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Jumlah
                                                                                Driver</label>
                                                                            <input type="text"
                                                                                id="jumlah_driver_update_{{ $m->id }}"
                                                                                value="{{ $m->jumlah_driver }}"
                                                                                name="jumlah_driver" class="form-control"
                                                                                oninput="hitungTotalPKWTUpdate({{ $m->id }})">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Jumlah
                                                                                Admin</label>
                                                                            <input type="text"
                                                                                id="jumlah_admin_update_{{ $m->id }}"
                                                                                value="{{ $m->jumlah_admin }}"
                                                                                name="jumlah_admin" class="form-control"
                                                                                oninput="hitungTotalPKWTUpdate({{ $m->id }})">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Jumlah
                                                                                Teknisi</label>
                                                                            <input type="text"
                                                                                id="jumlah_teknisi_update_{{ $m->id }}"
                                                                                value="{{ $m->jumlah_teknisi }}"
                                                                                name="jumlah_teknisi" class="form-control"
                                                                                oninput="hitungTotalPKWTUpdate({{ $m->id }})">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Total PKWT</label>
                                                                            <input type="text"
                                                                                id="total_pkwt_update_{{ $m->id }}"
                                                                                name="total_pkwt_update"
                                                                                class="form-control" readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row p-t-20">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Tanggal Awal
                                                                                Kontrak</label>
                                                                            <input type="date"
                                                                                id="awal_kontrak_update_{{ $m->id }}"
                                                                                value="{{ $m->awal_kontrak }}"
                                                                                class="form-control" name="awal_kontrak"
                                                                                onchange="calculateContractDurationUpdate({{ $m->id }})"
                                                                                value="{{ date('Y-m-d') }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Tanggal Akhir
                                                                                Kontrak</label>
                                                                            <input type="date"
                                                                                id="akhir_kontrak_update_{{ $m->id }}"
                                                                                value="{{ $m->akhir_kontrak }}"
                                                                                class="form-control" name="akhir_kontrak"
                                                                                onchange="calculateContractDurationUpdate({{ $m->id }})">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Sisa Waktu
                                                                                (bulan)
                                                                            </label>
                                                                            <input type="text"
                                                                                id="sisa_waktu_update_{{ $m->id }}"
                                                                                class="form-control" name="sisa_waktu"
                                                                                readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row p-t-20">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">SPH</label>
                                                                            <input type="file" class="form-control"
                                                                                name="sph" id="inputGroupFile02">
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">BOQ</label>
                                                                            <input type="file" id="boq"
                                                                                name="boq" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">BAKN</label>
                                                                            <input type="file" id="bakn"
                                                                                name="bakn" class="form-control">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">JIB</label>
                                                                            <input type="file" id="jib"
                                                                                name="jib" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Kontrak</label>
                                                                            <input type="file" id="kontrak"
                                                                                name="kontrak" class="form-control">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">ND
                                                                                Pengajuan</label>
                                                                            <input type="file" id="nd_pengajuan"
                                                                                name="nd_pengajuan" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">ND
                                                                                Persetujuan</label>
                                                                            <input type="file" id="nd_persetujuan"
                                                                                name="nd_persetujuan"
                                                                                class="form-control">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">PKWT</label>
                                                                            <input type="file" id="pkwt"
                                                                                name="pkwt" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">CRM / NO
                                                                                PID</label>
                                                                            <input type="text" id="crm_np"
                                                                                name="crm_np" class="form-control">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">CRM / NO
                                                                                DRK</label>
                                                                            <input type="text" id="crm_nd"
                                                                                name="crm_nd" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">CRM / COST
                                                                                CENTER</label>
                                                                            <input type="text" id="crm_cc"
                                                                                name="crm_cc" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Tutup</button>
                                                                <a href="{{ route('monitoringpm.destroy', $m->id) }}"
                                                                    class="btn btn-danger"
                                                                    data-confirm-delete="true">Delete</a>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Selesai --}}

        <!-- /# row -->

    </div>
    <!-- KONTEN MODAL TAMBAH Customer  -->
    <div class="modal fade" id="ModalTambahCustomer" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <br>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form method="POST" action="{{ route('monitoringpm.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">

                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Unit Kerja</label>
                                            <input type="text" id="unit_kerja" class="form-control"
                                                name="unit_kerja">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Customer</label>
                                            <input type="text" id="customer" name="customer" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Segmen</label>
                                            <input type="text" id="segmen" name="segmen" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama
                                                Project</label>
                                            <input type="text" id="nama_project" name="nama_project"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nilai
                                                Kontrak</label>
                                            <input type-currency=”IDR” id="nilai_kontrak" name="nilai_kontrak"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nilai
                                                Perbulan</label>
                                            <input type="text" id="nilai_perbulan" name="nilai_perbulan"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Jumlah HK</label>
                                            <input type="text" id="jumlah_hk" name="jumlah_hk" class="form-control"
                                                oninput="hitungTotalPKWT()">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Jumlah
                                                Security</label>
                                            <input type="text" id="jumlah_security" name="jumlah_security"
                                                class="form-control" oninput="hitungTotalPKWT()">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Jumlah
                                                Driver</label>
                                            <input type="text" id="jumlah_driver" name="jumlah_driver"
                                                class="form-control" oninput="hitungTotalPKWT()">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Jumlah
                                                Admin</label>
                                            <input type="text" id="jumlah_admin" name="jumlah_admin"
                                                class="form-control" oninput="hitungTotalPKWT()">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Jumlah
                                                Teknisi</label>
                                            <input type="text" id="jumlah_teknisi" name="jumlah_teknisi"
                                                class="form-control" oninput="hitungTotalPKWT()">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Total PKWT</label>
                                            <input type="text" id="total_pkwt" name="total_pkwt" readonly
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Awal Kontrak</label>
                                            <input type="date" id="awal_kontrak" class="form-control"
                                                name="awal_kontrak" value="{{ date('Y-m-d') }}"
                                                onchange="calculateContractDuration()">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Akhir Kontrak</label>
                                            <input type="date" id="akhir_kontrak" class="form-control"
                                                name="akhir_kontrak" value="{{ date('Y-m-d') }}"
                                                onchange="calculateContractDuration()">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Sisa Kontrak</label>
                                            <input type="text" id="sisa_kontrak" class="form-control" readonly
                                                name="sisa_kontrak">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">SPH</label>
                                            <input type="file" class="form-control" name="sph"
                                                id="inputGroupFile02">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">BOQ</label>
                                            <input type="file" id="boq" name="boq" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">BAKN</label>
                                            <input type="file" id="bakn" name="bakn" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">JIB</label>
                                            <input type="file" id="jib" name="jib" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kontrak</label>
                                            <input type="file" id="kontrak" name="kontrak" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">ND
                                                Pengajuan</label>
                                            <input type="file" id="nd_pengajuan" name="nd_pengajuan"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">ND
                                                Persetujuan</label>
                                            <input type="file" id="nd_persetujuan" name="nd_persetujuan"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">PKWT</label>
                                            <input type="file" id="pkwt" name="pkwt" readonly
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">CRM / NO
                                                PID</label>
                                            <input type="text" id="crm_np" name="crm_np" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">CRM / NO
                                                DRK</label>
                                            <input type="text" id="crm_nd" name="crm_nd" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">CRM / COST
                                                CENTER</label>
                                            <input type="text" id="crm_cc" name="crm_cc" class="form-control">
                                        </div>
                                    </div>
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
@endsection
@push('javascript')
    <script>
        function calculateContractDurationUpdate(id) {
            var startDate = moment(document.getElementById('awal_kontrak_update_' + id).value, 'YYYY-MM-DD');
            var endDate = moment(document.getElementById('akhir_kontrak_update_' + id).value, 'YYYY-MM-DD');

            if (startDate.isValid() && endDate.isValid()) {
                var duration = moment.duration(endDate.diff(startDate));
                var months = duration.asMonths().toFixed(0); // Total bulan dibulatkan

                var result = months + ' bulan';

                document.getElementById('sisa_waktu_update_' + id).value = result.trim();
            }
        }
    </script>

    <script>
        function hitungTotalPKWTUpdate(id) {
            var jumlahHK_update = parseInt(document.getElementById('jumlah_hk_update_' + id).value) || 0;
            var jumlahSecurity_update = parseInt(document.getElementById('jumlah_security_update_' + id).value) || 0;
            var jumlahDriver_update = parseInt(document.getElementById('jumlah_driver_update_' + id).value) || 0;
            var jumlahAdmin_update = parseInt(document.getElementById('jumlah_admin_update_' + id).value) || 0;
            var jumlahTeknisi_update = parseInt(document.getElementById('jumlah_teknisi_update_' + id).value) || 0;

            var totalPKWT = jumlahHK_update + jumlahSecurity_update + jumlahDriver_update + jumlahAdmin_update +
                jumlahTeknisi_update;

            document.getElementById('total_pkwt_update_' + id).value = totalPKWT;
        }
    </script>

    <script>
        function hitungTotalPKWT() {
            var jumlahHK = parseInt(document.getElementById('jumlah_hk').value) || 0;
            var jumlahSecurity = parseInt(document.getElementById('jumlah_security').value) || 0;
            var jumlahDriver = parseInt(document.getElementById('jumlah_driver').value) || 0;
            var jumlahAdmin = parseInt(document.getElementById('jumlah_admin').value) || 0;
            var jumlahTeknisi = parseInt(document.getElementById('jumlah_teknisi').value) || 0;

            var totalPKWT = jumlahHK + jumlahSecurity + jumlahDriver + jumlahAdmin + jumlahTeknisi;

            document.getElementById('total_pkwt').value = totalPKWT;
        }
    </script>


    <!-- Script untuk menangani unduhan file -->
    <script>
        function downloadFile(button) {
            var filePath = button.getAttribute("data-file-path");
            if (filePath && filePath !== '#') {
                var link = document.createElement("a");
                link.href = filePath;
                link.download = getFileNameFromPath(filePath);
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            } else {
                alert("File tidak tersedia untuk diunduh.");
            }
        }

        // Fungsi untuk mendapatkan nama file dari jalur file
        function getFileNameFromPath(filePath) {
            return filePath.split("/").pop(); // Mengambil bagian terakhir setelah pemisah "/"
        }
    </script>

    <script>
        function calculateContractDuration() {
            var startDate = moment(document.getElementById('awal_kontrak').value, 'YYYY-MM-DD');
            var endDate = moment(document.getElementById('akhir_kontrak').value, 'YYYY-MM-DD');

            if (startDate.isValid() && endDate.isValid()) {
                var duration = moment.duration(endDate.diff(startDate));
                var months = duration.asMonths().toFixed(0); // Total bulan dibulatkan

                var result = months + ' bulan';

                document.getElementById('sisa_kontrak').value = result.trim();
            }
        }
    </script>
@endpush
