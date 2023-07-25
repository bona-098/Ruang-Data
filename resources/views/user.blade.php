@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">

        {{-- MEMFILTER DATA --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">History Login</h4>
                <div class="table-responsive ">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Subject</th>
                                <th>URL</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <td>1</td>
                            <td>SUbej</td>
                            <td>www.youtube.com</td>
                            <td>Xprovincere</td>
                        </tbody>
                    </table>
                </div>      
            </div>
        </div>
        {{-- MEMFILTER DATA --}}
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pengguna</h4>
                <br>
                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahMitra">
                    <i class="fa fa-user-plus"></i> Tambah Pengguna
                </button>

                {{-- <h6 class="card-subtitle">Data table example</h6> --}}
                <div class="table-responsive ">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $u)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>{{ $u->role }}</td>
                                    <td>{{ $u->password }}</td>
                                    <div class="dropdown">
                                        <td>
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-cog"> Aksi</i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{ route('pengguna.edit', $u->id) }}"><i
                                                        class="fa fa-edit"></i> Edit</a>
                                                <form action="{{ route('pengguna.destroy', $u->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                            class="fa fa-trash"></i> Hapus</button>
                                                </form>
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
                    @can(['admin'])
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                    <br>
                    @endcan
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form method="POST" action="{{ route('pengguna.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" id="name" class="form-control" name="name">
                                            {{-- <small class="form-control-feedback"> Feedback salah </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input type="email" id="email" name="email"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Password</label>
                                            <input type="password" id="password" name="password"
                                                class="form-control form-control-danger">
                                            {{-- <small class="form-control-feedback"> This field has error. </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                    {{-- <div class="row p-t-20"> --}}
                                        <div class="form-group">
                                            <label for="status" class="control-label">Role</label>
                                            <select class="form-control custom-select" id="role" name="role">
                                                <option value="super-admin">Super Admin</option>
                                                <option value="bsrm">Bsrm</option>
                                                <option value="project">Project</option>
                                                <option value="marshall">Marshall</option>
                                            </select>
                                        </div>
                                    {{-- </div> --}}
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