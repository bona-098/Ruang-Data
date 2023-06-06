{{-- DONE --}}
@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Detail Data Gedung: </h3>
                <button type="button" class=" btn btn-primary" id="dropdownMenuButton" data-toggle="dropdown"><i
                        class="fa fa-cog"></i>
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalUpdateGedung" href="#">Edit</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalDeleteGedung" href="#">Delete</a>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahPetugas">
                    <i class="fa fa-user-plus"></i> Tambah Daftar Petugas
                </button>
                <div style="margin-top: 20px;">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Id</th>
                                    <td colspan="6">{{ $gedung->id }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Area</th>
                                    <td colspan="6">{{ $gedung->nama_area }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Witel</th>
                                    <td colspan="6">{{ $gedung->nama_witel }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td colspan="6">{{ $gedung->alamat }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Koordinat</th>
                                    <td colspan="6">{{$gedung->koordinat}}</td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><strong>Daftar Petugas Gedung</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Telpon</th>
                                    <th>NIK</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
 
                                @foreach ($personil->where('gedung_id', '1') as $pe)                                    
                                <tr>
                                    <td>{{ $pe->id }}</td>
                                    <td>{{ $pe->nama }}</td>
                                    <td>{{ $pe->telepon }}</td>
                                    <td>{{ $pe->nik }}</td>
                                    <td>{{ $pe->email }}</td>
                                    <div class="dropdown">
                                        <td>
                                            <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-cog"> Aksi</i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" data-toggle="modal"
                                            data-target="#ModalUpdatePetugas" href="#">Edit</a>
                                            <a class="dropdown-item" data-toggle="modal"
                                            data-target="#ModalDeletePetugas" href="#">Delete</a>
                                        </div>
                                    </td>
                                </div>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- KONTEN MODAL UPDATE Gedung  -->
    <div class="modal fade" id="ModalUpdateGedung" tabindex="-1" aria-labelledby="exampleModalLabel" data-backdrop="static"
        data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Gedung</h5>

                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('gedung.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <!--/row-->
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Area</label>
                                            <select required name="area" class="form-control custom-select">
                                                <option value="">Pilih Area</option>
                                                <option value="Balikpapan">Balikpapan</option>
                                                <option value="Kalimatan Timur">Kalimantan Timur</option>
                                                <option value="Kalimatan Selatan">Kalimantan Selatan</option>
                                                <option value="Kalimatan Barat">Kalimantan Barat</option>
                                            </select>
                                            <small class="form-control-feedback">
                                                @error('area')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Witel</label>
                                            <select required name="area" class="form-control custom-select">
                                                <option value="">Pilih Witel</option>
                                                <option value="Witel Balikpapan">Witel Balikpapan</option>
                                                <option value="Witel Samarinda">Witel Samarinda</option>
                                                <option value="Witel Kaltara">Witel Kaltara</option>
                                                <option value="Witel Kalsel">Witel Kalsel</option>
                                                <option value="Witel Kalteng">Witel Kalteng</option>
                                                <option value="Witel Kalber">Witel Kalbar</option>
                                            </select>
                                            <small class="form-control-feedback">
                                                @error('witel')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Gedung</label>
                                            <input required type="text" required name="nama_gedung"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('nama_gedung')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Alamat</label>
                                            <input required type="text" required name="alamat" class="form-control">
                                            <small class="form-control-feedback"> @error('alamat')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Koordinat</label>
                                            <input required type="text" required name="koordinat"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('koordinat')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <!--/span-->

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                <button type="submit" class="btn btn-primary">Simpan</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KONTEN MODAL UPDATE Gedung  -->

    <!-- KONTEN MODAL Tambah Petugas  -->
    <div class="modal fade" id="ModalTambahPetugas" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>

                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('personil.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <!--/row-->
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Petugas</label>
                                            <input required type="text" required name="nama"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('nama')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nomor Telepon</label>
                                            <input required type="text" required name="telepon"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('telepon')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nik</label>
                                            <input required type="text" required name="nik" class="form-control">
                                            <small class="form-control-feedback"> @error('nik')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input required type="text" required name="email" class="form-control">
                                            <small class="form-control-feedback"> @error('email')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">id gedung</label>
                                            <input required type="text" required name="gedung_id" class="form-control">
                                            <small class="form-control-feedback"> @error('gedung_id')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <!--/span-->

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                <button type="submit" class="btn btn-primary">Simpan</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KONTEN MODAL Tambah Petugas -->

    <!-- KONTEN MODAL Update Petugas  -->
    <div class="modal fade" id="ModalUpdatePetugas" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Petugas</h5>

                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('gedung.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <!--/row-->
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Petugas</label>
                                            <input required type="text" required name="nama_petugas"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('nama_petugas')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nomor Telepon</label>
                                            <input required type="text" required name="nomor_telpon"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('nama_telpon')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nik</label>
                                            <input required type="text" required name="nik" class="form-control">
                                            <small class="form-control-feedback"> @error('nik')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input required type="text" required name="email" class="form-control">
                                            <small class="form-control-feedback"> @error('email')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <!--/span-->

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                <button type="submit" class="btn btn-primary">Simpan</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KONTEN MODAL Tambah Petugas -->

    {{-- KONTEN MODAL DELETE Petugas --}}
    <div class="modal fade" id="ModalDeletePetugas" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
    {{-- KONTEN MODAL DELETE Petugas --}}


    {{-- KONTEN MODAL DELETE Gedung --}}
    <div class="modal fade" id="ModalDeleteGedung" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
    {{-- KONTEN MODAL DELETE Gedung --}}
@endsection