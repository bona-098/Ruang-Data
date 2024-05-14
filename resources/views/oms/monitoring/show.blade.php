@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Monitoring Property Managemant</h4>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahMitra">
                    <i class="fa fa-user-plus"></i> Tambah Mitra
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
                                <th>Tanggal Kontrak</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($monitoringpm as $m)
                                <tr>
                                    <td>{{ $m->unit_kerja }}</td>
                                    <td>{{ $m->customer }}</td>
                                    <td>{{ $m->segmen }}</td>
                                    <td>{{ $m->tanggal_kontrak }}</td>
                                    <td><button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#detail">
                                            kontrak
                                        </button></td>
                                </tr>
                            @endforeach --}}
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <div class="modal fade" id="detail" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Mitra</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="namaMitra">Nama Mitra</label>
                                                <input type="text" class="form-control" id="namaMitra" name="nama_vendor"
                                                    placeholder="Masukkan nama mitra" value="">
                                            </div>
                                            <!-- Tambahkan input lainnya sesuai kebutuhan -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Update Mitra -->
                            {{-- <div class="modal fade" id="ModalUpdateMitra{{ $m->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update Mitra</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('mitra.update', $m->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="namaMitra">Nama Mitra</label>
                                                        <input type="text" class="form-control" id="namaMitra"
                                                            name="nama_vendor" placeholder="Masukkan nama mitra"
                                                            value="{{ $m->nama_vendor }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="domisiliMitra">Domisili</label>
                                                        <input type="text" class="form-control" id="domisiliMitra"
                                                            name="domisili" placeholder="Masukkan domisili"
                                                            value="{{ $m->domisili }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="status" class="control-label">Status</label>
                                                        <label for="status" class="control-label">Status</label>
                                                        <select class="form-control custom-select" id="status"
                                                            name="status">
                                                            name="status">
                                                            <option value="Eksisting"
                                                                {{ $m->kategori == 'Eksisting' ? 'selected' : '' }}>
                                                                Eksisting</option>
                                                            <option value="Baru"
                                                                {{ $m->kategori == 'Baru' ? 'selected' : '' }}>Baru (BARU
                                                                REGISTERED)</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nilaiAssesMitra">Nilai Asses</label>
                                                        <input type="number" class="form-control" id="nilaiAssesMitra"
                                                            name="nilai_asses" placeholder="Masukkan nilai asses"
                                                            value="{{ $m->nilai_asses }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <input type="text" class="form-control" id="status"
                                                            name="kategori" placeholder="Masukkan kategori"
                                                            value="{{ $m->kategori }}">
                                                    </div>
                                                    <!-- Tambahkan input lainnya sesuai kebutuhan -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Selesai --}}

        <!-- /# row -->

    </div>
    <!-- KONTEN MODAL TAMBAH MITRA  -->
    <div class="modal fade" id="ModalTambahMitra" tabindex="-1" aria-labelledby="exampleModalLabel" data-backdrop="static"
        data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Mitra</h5>
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
                                            <input type="text" id="unit_kerja" class="form-control" name="unit_kerja">
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
                                            <label class="control-label">Nama Project</label>
                                            <input type="text" id="nama_project" name="nama_project"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nilai Kontrak</label>
                                            <input type="text" id="nilai_kontrak" name="nilai_kontrak"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nilai Perbulan</label>
                                            <input type="text" id="nilai_perbulan" name="nilai_perbulan"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Jumlah HK</label>
                                            <input type="text" id="jumlah_hk" name="jumlah_hk" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Jumlah Security</label>
                                            <input type="text" id="jumlah_security" name="jumlah_security"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Total PKWT</label>
                                            <input type="text" id="total_pkwt" name="total_pkwt"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tanggal Kontrak</label>
                                            <input type="date" id="tanggal_kontrak" name="tanggal_kontrak"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tahun Pengadaan</label>
                                            <input type="text" id="tahun_pengadaan" name="tahun_pengadaan"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">SPH</label>
                                            <input type="text" id="sph" name="sph" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">BOQ</label>
                                            <input type="text" id="boq" name="boq" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">BAKN</label>
                                            <input type="text" id="bakn" name="bakn" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">JIB</label>
                                            <input type="text" id="jib" name="jib" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kontrak</label>
                                            <input type="text" id="kontrak" name="kontrak" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">ND Pengajuan</label>
                                            <input type="text" id="nd_pengajuan" name="nd_pengajuan"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">ND Persetujuan</label>
                                            <input type="text" id="nd_persetujuan" name="nd_persetujuan"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">PKWT</label>
                                            <input type="text" id="pkwt" name="pkwt" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">CRM</label>
                                            <input type="text" id="crm" name="crm" class="form-control">
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

    <!-- KONTEN MODAL TAMBAH MITRA  -->


    <!-- KONTEN MODAL Import MITRA  -->
    {{-- <div class="modal fade" id="ModalImportMitra" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Mitra</h5>
                    <br>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form method="POST" action="{{ route('mitra.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Import File</label>
                                            <input type="file" class="form-control" name="file">
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
    </div> --}}
    <!-- KONTEN MODAL TAMBAH MITRA  -->
    {{-- @foreach ($mitra as $m) --}}


    {{-- @endforeach --}}


    <!-- Modal Delete Mitra -->
    {{-- @foreach ($mitra as $m)
        @if (isset($m))
            <div class="modal fade" id="ModalDeleteMitra{{ $m->id }}" tabindex="-1"
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
                            <form method="POST" action="{{ route('mitra.destroy', $m->id) }}" id="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach --}}



    {{-- KONTEN MODAL DELETE MITRA --}}
    {{-- Javascript Filter Mitra --}}
    <script>
        function filterTable() {
            var type = document.getElementById("filter-type").value;
            var location = document.getElementById("filter-location").value;

            // Filter the table based on the selected values
            var table = document.getElementById("myTable");
            var rows = table.getElementsByTagName("tr");
            for (var i = 0; i < rows.length; i++) {
                var typeCell = rows[i].getElementsByTagName("td")[0];
                var locationCell = rows[i].getElementsByTagName("td")[1];

                if (type === "eksisting" && typeCell.innerHTML !== "eksisting") {
                    rows[i].style.display = "none";
                } else if (type === "register" && typeCell.innerHTML !== "BARU (BARU REGISTERED)") {
                    rows[i].style.display = "none";
                } else if (location !== "" && locationCell.innerHTML.toLowerCase() !== location.toLowerCase()) {
                    rows[i].style.display = "none";
                } else {
                    rows[i].style.display = "";
                }
            }
        }

        function resetFilter() {
            document.getElementById("filter-type").selectedIndex = 0;
            document.getElementById("filter-location").value = "";

            // Show all rows in the table
            var table = document.getElementById("myTable");
            var rows = table.getElementsByTagName("tr");
            for (var i = 0; i < rows.length; i++) {
                rows[i].style.display = "";
            }
        }
    </script>
    {{-- Javascript Filter Mitra --}}
@endsection
