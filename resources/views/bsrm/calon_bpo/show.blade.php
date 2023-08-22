@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Karyawan : {{ $karyawan->nama_karyawan }}</h4>
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
                                <td>{{ $karyawan->nik }}</td>
                            </tr>
                            <tr>
                                <th scope="row">NIK Telkom Grup</th>
                                <td>{{ $karyawan->no_hp }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Karyawan</th>
                                <td>{{ $karyawan->nama_karyawan }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td>{{ $karyawan->tgl_lahir }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Kota Lahir</th>
                                <td>{{ $karyawan->kota_lahir }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Agama</th>
                                <td>{{ $karyawan->agama }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>{{ $karyawan->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>{{ $karyawan->jalan }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Unit Kerja</th>
                                <td>{{ $karyawan->unit_kerja }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Loker</th>
                                <td>{{ $karyawan->loker }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Jabatan</th>
                                <td>{{ $karyawan->jabatan }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Band Kelas Posisi</th>
                                <td>{{ $karyawan->band_kelas_posisi }}</td>
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
                        <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">NIK Telpro</label>
                                                <input type="number" value={{ $karyawan->nik }} name="nik_telpro"
                                                    min="0" class="form-control" placeholder="12345">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">NIK Telkom Grup</label>
                                                <input type="number" value={{ $karyawan->no_hp }} name="nik_telkom_grup"
                                                    min="0" class="form-control" placeholder="12345">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label for="nama_karyawan" class="control-label">Nama Karyawan</label>
                                                <input type="text" id="nama_karyawan"
                                                    value="{{ $karyawan->nama_karyawan }}"
                                                    class="form-control form-control-danger" name="nama_karyawan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                                                <select class="form-control custom-select" id="jenis_kelamin"
                                                    name="jenis_kelamin">
                                                    <option value="laki-laki"
                                                        {{ $karyawan->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>
                                                        Laki-laki</option>
                                                    <option value="perempuan"
                                                        {{ $karyawan->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>
                                                        Perempuan</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tgl_lahir" class="control-label">Tanggal Lahir</label>
                                                <input type="date" value={{ $karyawan->tgl_lahir }} id="tgl_lahir"
                                                    name="tgl_lahir" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kota_lahir" class="control-label">Kota Lahir</label>
                                                <input type="text" id="kota_lahir"
                                                    value="{{ $karyawan->kota_lahir }}" name="kota_lahir"
                                                    class="form-control">
                                                <small class="form-control-feedback"> </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="agama" class="control-label">Agama</label>
                                                <select class="form-control custom-select" id="agama" name="agama">
                                                    <option value="islam"
                                                        {{ $karyawan->agama == 'islam' ? 'selected' : '' }}>Islam</option>
                                                    <option value="katolik"
                                                        {{ $karyawan->agama == 'katolik' ? 'selected' : '' }}>Kristen
                                                        Katolik</option>
                                                    <option value="kristen protestan"
                                                        {{ $karyawan->agama == 'kristen protestan' ? 'selected' : '' }}>
                                                        Kristen Protestan</option>
                                                    <option value="hindu"
                                                        {{ $karyawan->agama == 'hindu' ? 'selected' : '' }}>Hindu</option>
                                                    <option value="budha"
                                                        {{ $karyawan->agama == 'budha' ? 'selected' : '' }}>Budha</option>
                                                    <option value="kong hucuh"
                                                        {{ $karyawan->agama == 'kong hucuh' ? 'selected' : '' }}>Kong hucuh
                                                    </option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="unit_kerja">Unit Kerja</label>
                                                <input type="text" value="{{ $karyawan->unit_kerja }}"
                                                    class="form-control" id="unit_kerja" name="unit_kerja">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label for="jalan">Alamat</label>
                                                <input type="text" value="{{ $karyawan->jalan }}"
                                                    class="form-control" name="alamat">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="loker">Loker</label>
                                                <input type="text" value="{{ $karyawan->loker }}"
                                                    class="form-control" id="loker" name="loker">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" value="{{ $karyawan->jabatan }}"
                                                    class="form-control" id="jabatan" name="jabatan">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Kelas Band Posisi</label>
                                                <select class="form-control custom-select" name="band_kelas_posisi">
                                                    <option value="">Pilih Kelas Band Posisi</option>
                                                    <option value="I"
                                                        {{ $karyawan->band_kelas_posisi == 'I' ? 'selected' : '' }}>I
                                                    </option>
                                                    <option value="II"
                                                        {{ $karyawan->band_kelas_posisi == 'II' ? 'selected' : '' }}>II
                                                    </option>
                                                    <option value="III"
                                                        {{ $karyawan->band_kelas_posisi == 'III' ? 'selected' : '' }}>III
                                                    </option>
                                                    <option value="IV"
                                                        {{ $karyawan->band_kelas_posisi == 'IV' ? 'selected' : '' }}>IV
                                                    </option>
                                                    <option value="V"
                                                        {{ $karyawan->band_kelas_posisi == 'V' ? 'selected' : '' }}>V
                                                    </option>
                                                    <option value="VI"
                                                        {{ $karyawan->band_kelas_posisi == 'VI' ? 'selected' : '' }}>VI
                                                    </option>
                                                    <option value="VII"
                                                        {{ $karyawan->band_kelas_posisi == 'VII' ? 'selected' : '' }}>VII
                                                    </option>
                                                </select>

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
