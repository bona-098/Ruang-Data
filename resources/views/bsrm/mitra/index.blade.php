@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">

        {{-- MEMFILTER DATA --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Filter Mitra</h4>
                <form action="">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control custom-select" id="filter-type">
                                    <option value="eksisting">EKSISTING</option>
                                    <option value="register">BARU (BARU REGISTERED)</option>
                                </select>
                                {{-- <small class="form-control-feedback"> Select your gender </small> --}}
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="" placeholder="Domisili" class="form-control" id="filter-location">
                                {{-- <small class="form-control-feedback"> Select your gender </small> --}}
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="form-control btn-success" onclick="filterTable()"> <i class="fa fa-filter"></i> Filter</button>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="form-control btn-success" onclick="resetFilter()">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- MEMFILTER DATA --}}
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Mitra</h4>
                <br>
                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahMitra">
                    <i class="fa fa-user-plus"></i> Tambah Mitra
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalImportMitra">
                    <i class="fa fa-plus"></i> Import Mitra
                </button>

                {{-- <h6 class="card-subtitle">Data table example</h6> --}}
                <div class="table-responsive ">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Domisili</th>
                                <th>Kategori</th>
                                <th>Nilai Asses</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mitra as $m)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $m->nama_vendor }}</td>
                                    <td>{{ $m->domisili }}</td>
                                    <td>{{ $m->kategori }}</td>
                                    <td>{{ $m->nilai_asses }}</td>
                                    <td>{{ $m->status }}</td>
                                    <div class="dropdown">
                                        <td>
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-cog"> Aksi</i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahMitra">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button> --}}
                                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#ModalUpdateMitra"><i class="fa fa-edit"></i> Edit</a>
                                                {{-- <a class="dropdown-item" href="{{ route('mitra.show', $m->id) }}"><i
                                                        class="fa fa-eye"></i> show</a> --}}
                                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#ModalDeleteMitra"><i class="fa fa-trash"></i> Delete</a>
                                            </div>
                                        </td>
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
                        <form method="POST" action="{{ route('mitra.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Vendor</label>
                                            <input type="text" id="nama_vendor" class="form-control" name="nama_vendor">
                                            {{-- <small class="form-control-feedback"> Feedback salah </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label class="control-label">domisili</label>
                                            <input type="text" id="domisili" name="domisili"
                                                class="form-control form-control-danger">
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
                                            <label for="status" class="control-label">Kategori</label>
                                            <select class="form-control custom-select" id="status" name="status">
                                                <option value="EKSISTING">EKSISTING</option>
                                                <option value="Baru">Baru (BARU REGISTERED)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nilai Asses</label>
                                            <input type="number" id="nilai_asses" name="nilai_asses" min="0"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <!--/row-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <input type="text" name="status" class="form-control">
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
    <!-- KONTEN MODAL TAMBAH MITRA  -->


     <!-- KONTEN MODAL Import MITRA  -->
     <div class="modal fade" id="ModalImportMitra" tabindex="-1" aria-labelledby="exampleModalLabel" data-backdrop="static"
     data-keyboard="false" aria-hidden="true">
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
                                         {{-- <small class="form-control-feedback"> Feedback salah </small> --}}
                                     </div>
                                 </div>
                                 <!--/span-->
                             </div>
                             <!--/row-->
                             <!--/row-->
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
 <!-- KONTEN MODAL TAMBAH MITRA  -->

    <!-- KONTEN MODAL UPDATE MITRA  -->
    <div class="modal fade" id="ModalUpdateMitra" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                            <input type="text" id="NIK" class="form-control">
                                            {{-- <small class="form-control-feedback"> Feedback salah </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Domisili</label>
                                            <input type="text" id="Domisili"
                                                class="form-control form-control-danger">
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
                                            <input type="number" min="0" class="form-control">
                                        </div>
                                    </div>

                                    <!--/row-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Status</label>
                                            <input type="text" class="form-control">
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

    <!-- KONTEN MODAL UPDATE MITRA  -->

    {{-- KONTEN MODAL DELETE MITRA --}}

    <div class="modal fade" id="ModalDeleteMitra" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                </div>
                <div class="modal-body">
                    Tindakan ini akan menghapus data tersebut dan data yang dihapus tidak dapat di kembalikan, apakah anda
                    yakin ingin melanjutkan ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form method="POST" id="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


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

                if (type === "eksisting" && typeCell.innerHTML !== "EKSISTING") {
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
