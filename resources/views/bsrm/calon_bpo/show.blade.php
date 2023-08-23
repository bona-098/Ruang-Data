@extends('layout.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-70">
                    <div class="card  ">
                        <div class="card-body ">
                            <a href="{{ asset('images/calon_bpo/diedit-074152.jpg') }}" target="_blank">
                                <img src="{{ asset('images/calon_bpo/diedit-074152.jpg') }}"
                                    style="width: 100%; max-width: 100%;" alt="gambar"></a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Karyawan : {{ $bpo->nama }}</h4>
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
                <div style="margin-top: 20px;">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">NIK Telpro</th>
                                <td>{{  $bpo->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">NIK Telkom Grup</th>
                                <td>{{ $bpo->nama  }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Karyawan</th>
                                <td>{{ $bpo->nama  }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td>{{ $bpo->nama  }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Kota Lahir</th>
                                <td>{{ $bpo->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Agama</th>
                                <td>{{ $bpo->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>{{ $bpo->nama  }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>{{ $bpo->nama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Unit Kerja</th>
                                <td>{{ $bpo->nama  }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Loker</th>
                                <td>{{ $bpo->nama  }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jabatan</th>
                                <td>{{ $bpo->nama  }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Band Kelas Posisi</th>
                                <td>{{ $bpo->nama  }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- KONTEN MODAL UPDATE KARYAWAN  -->
        <div class="modal fade" id="ModalUpdateKaryawan" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Karyawan</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('karyawan.update', 2) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">NIK Telpro</label>
                                                <input type="number" value={{ $bpo->nama }} name="nik_telpro"
                                                    min="0" class="form-control" placeholder="12345">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">NIK Telkom Grup</label>
                                                <input type="number" value={{ $bpo->nama  }} name="nik_telkom_grup"
                                                    min="0" class="form-control" placeholder="12345">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label for="nama_karyawan" class="control-label">Nama Karyawan</label>
                                                <input type="text" id="nama_karyawan"
                                                    value="{{ $bpo->nama }}"
                                                    class="form-control form-control-danger" name="nama_karyawan">
                                            </div>
                                        </div>
                                      
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="unit_kerja">Unit Kerja</label>
                                                <input type="text" value="{{$bpo->nama }}"
                                                    class="form-control" id="unit_kerja" name="unit_kerja">
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
    </section>
@endsection
