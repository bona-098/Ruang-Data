@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Calon BPO</h4>
                <br>
                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                @canany(['bsrm', 'admin'])
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahKaryawan">
                        <i class="fa fa-user-plus"></i> Tambah Calon Bpo
                    </button>
                    <a button type="button" class="btn btn-primary" href="/import-karyawan">
                        <i class="fa fa-user-plus"></i> Import Calon Bpo
                        </button></a>
                @endcanany {{-- <h6 class="card-subtitle">Data table example</h6> --}}
                <div class=" table-responsive">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped"
                        style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th style="white-space: nowrap;">Nama Karyawan</th>
                                <th style="white-space: nowrap;">Pendidikan</th>
                                <th style="white-space: nowrap;">Jurusan</th>
                                <th>Umur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($calonbpo as $o)
                                <tr>
                                    <td style="white-space: nowrap;"><a href="{{ route('calon_bpo.show', $o->id) }}" style="color: black;">{{ $o->nama }}</a></td>
                                    <td style="white-space: nowrap;">{{ $o->pendidikan }}</td>
                                    <td style="white-space: nowrap;">{{ $o->jurusan }}</td>
                                    <td style="white-space: nowrap;">{{ $o->umur }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Selesai --}}


        <!-- KONTEN MODAL TAMBAH KARYAWAN  -->
        <div class="modal fade" id="ModalTambahKaryawan" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Calon BPO</h5>
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
        <!-- KONTEN MODAL TAMBAH KARYAWAN  -->

        <!-- Modal Delete Mitra -->

        <div class="modal fade" id="ModalDeleteKaryawan" tabindex="-1" aria-labelledby="staticBackdropLabel"
            aria-hidden="true">
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
                        <form method="POST" action="{{ route('calon_bpo.destroy', 1) }}" id="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
