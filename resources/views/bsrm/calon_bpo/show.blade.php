@extends('layout.layout')
@section('content')
   
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Calon Bpo : {{ $bpo->nama }}</h4>
                    <button type="button" class=" btn btn-primary " id="dropdownMenuButton" data-toggle="dropdown"><i
                            class="fa fa-cog"></i>
                        Action
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" data-toggle="modal" data-target="#ModalUpdateKaryawan"
                            href="#">Update</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#ModalDeleteKaryawan"
                            href="#">Delete</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body text-center"> <!-- Menambahkan kelas "text-center" -->
                            <a href="{{ asset('images/calon_bpo/' . $bpo->cv) }}" target="_blank">
                                <img src="{{ asset('images/calon_bpo/' . $bpo->cv) }}" class="mx-auto d-block img-fluid"
                                    alt="gambar" style="max-width: 100%;">
                            </a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

        <!-- KONTEN MODAL UPDATE KARYAWAN  -->
        <div class="modal fade" id="ModalUpdateKaryawan" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Karyawan</h5>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('calon_bpo.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Nama Calon Bpo</label>
                                                <input type="text" id="nama"
                                                    class="form-control form-control-danger" name="nama">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Pendidikan</label>
                                                <input type="text" class="form-control" name="pendidikan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Jurusan</label>
                                                <input type="text" class="form-control" name="jurusan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Umur</label>
                                                <input type="number" min="0" name="umur" class="form-control">
                                                <small class="form-control-feedback"> </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Domisili</label>
                                                <input type="text" class="form-control" name="domisili">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nomor HP</label>
                                                <input type="number" name="nomor_hp" class="form-control">
                                                <small class="form-control-feedback"> </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">CV</label>
                                                <input type="file" name="cv" class="form-control">
                                                <small class="form-control-feedback"> </small>
                                            </div>
                                        </div>
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
        <!-- KONTEN MODAL UPDATE KARYAWAN  -->

        {{-- KONTEN MODAL DELETE KARYAWAN --}}

        <div class="modal fade" id="ModalDeleteKaryawan" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                    </div>
                    <div class="modal-body">
                        Tindakan ini akan menghapus data tersebut dan data yang dihapus tidak dapat di kembalikan, apakah
                        anda
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
        {{-- KONTEN MODAL DELETE KARYAWAN --}}
        </div>
    
@endsection
