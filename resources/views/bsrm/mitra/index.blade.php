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
                        <div class="col-md-5">
                            <div class="form-group">
                                <select class="form-control custom-select">
                                    <option value="eksisting">EKSISTING</option>
                                    <option value="register">BARU (BARU REGISTERED)</option>
                                </select>
                                {{-- <small class="form-control-feedback"> Select your gender </small> --}}
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="" placeholder="Domisili" class="form-control"
                                    id="">
                                {{-- <small class="form-control-feedback"> Select your gender </small> --}}
                            </div>
                        </div>
                        <!--/span-->

                        <!--/span-->
                        <div class="col-md-2">
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-success">Reset</button>
                            </div>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mitra as $m)
                                <tr>
                                    <td>{{ $m->id }}</td>
                                    <td>{{ $m->nama_vendor }}</td>
                                    <td>{{ $m->domisili }}</td>
                                    <td>{{ $m->kategori }}</td>
                                    <td>{{ $m->nilai_assesment }}</td>
                                    <td>{{ $m->status }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-cog">Aksi</i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{ route('mitra.edit', $m->id) }}"><i
                                                        class="fa fa-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="{{ route('mitra.show', $m->id) }}"><i
                                                        class="fa fa-eye"></i> show</a>
                                                <form action="{{ route('mitra.destroy', $m->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                            class="fa fa-trash"></i> Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
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
    <!-- KONTEN MODAL TAMBAH KARYAWAN  -->
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
                                                class="form-control form-control-danger" placeholder="Pitir Parkir">
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
                                            <label class="control-label">kategori</label>
                                            <input type="text" id="kategori" name="kategori" class="form-control">
                                            <small class="form-control-feedback"> </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <!--/row-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nilai Asses</label>
                                            <input type="number" id="nilai_asses" name="nilai_asses" min="0"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="status" class="control-label">Status</label>
                                            <select class="form-control custom-select" id="status"
                                                name="status">
                                                <option value="belum menikah">Belum Menikah</option>
                                                <option value="menikah">Menikah</option>
                                            </select>
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

    <!-- KONTEN MODAL TAMBAH KARYAWAN  -->

    <!-- KONTEN MODAL UPDATE KARYAWAN  -->
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

    <!-- KONTEN MODAL UPDATE KARYAWAN  -->

    {{-- KONTEN MODAL DELETE KARYAWAN --}}

    <div class="modal fade" id="ModalDeleteMitra" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
