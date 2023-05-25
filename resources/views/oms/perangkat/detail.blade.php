{{-- DONE --}}
@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Detail Data Perangkat Id : </h3>
                <button type="button" class=" btn btn-primary" id="dropdownMenuButton"
                    data-toggle="dropdown"><i class="fa fa-cog"></i>
                    action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalUpdatePerangkat" href="#">Edit</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalDeletePerangkat"
                        href="#">Delete</a>
                </div>
                <div style="margin-top: 20px;">
                    <div class="table-responsive">
                        <table text-align: left; id="myTable" class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Id Group</th>
                                    <td>{{ $perangkat->id_group }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Id Area</th>
                                    <td>{{ $perangkat->id_area }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Id Unit</th>
                                    <td>{{ $perangkat->id_unit }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Unit</th>
                                    <td>{{ $perangkat->nama_unit }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Id Witel</th>
                                    <td>{{ $perangkat->id_witel }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Witel</th>
                                    <td>{{ $perangkat->nama_witel }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Id Location</th>
                                    <td>{{ $perangkat->id_lokasi }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Lokasi</th>
                                    <td>{{ $perangkat->nama_lokasi }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Id Gedung</th>
                                    <td>{{ $perangkat->id_gedung }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Gedung</th>
                                    <td>{{ $perangkat->nama_gedung }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Id Kelas</th>
                                    <td>{{ $perangkat->id_kelas }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Id Room</th>
                                    <td>{{ $perangkat->id_room }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Id Lantai</th>
                                    <td>{{ $perangkat->id_lantai }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Lantai</th>
                                    <td>{{ $perangkat->nama_lantai }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jid</th>
                                    <td>{{ $perangkat->jid }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Jenis</th>
                                    <td>{{ $perangkat->nama_jenis }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kid</th>
                                    <td>{{ $perangkat->kid }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kategori</th>
                                    <td>{{ $perangkat->kategori }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Skid</th>
                                    <td>{{ $perangkat->skid }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sub Kategori</th>
                                    <td>{{ $perangkat->sub_kategori }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Perangkat</th>
                                    <td>{{ $perangkat->nama_perangkat }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Is Ceklis</th>
                                    <td>{{ $perangkat->is_ceklis }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Merk</th>
                                    <td>{{ $perangkat->merk }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Satuan</th>
                                    <td>{{ $perangkat->satuan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jumlah</th>
                                    <td>{{ $perangkat->jumlah }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kapasitas</th>
                                    <td>{{ $perangkat->kapasitas }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">No Seri</th>
                                    <td>{{ $perangkat->no_seri }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Type</th>
                                    <td>{{ $perangkat->type }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tahun</th>
                                    <td>{{ $perangkat->tahun }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kondisi</th>
                                    <td>{{ $perangkat->kondisi }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Milik</th>
                                    <td>{{ $perangkat->milik }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan</th>
                                    <td>{{ $perangkat->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Id Perangkat</th>
                                    <td>{{ $perangkat->id_perangkat }}</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Kontrak" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Sales</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Drive Kontrak</label>
                                            <input type="file" value="" name="drive_kontrak"
                                                id="drive_kontrak" class="form-control" placeholder="Masukkan Unit Kerja"
                                                required>
                                            <small class="form-control-feedback"> @error('drive_kontrak')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss>Batal</button>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KONTEN MODAL UPDATE Customer  -->
    <div class="modal fade" id="ModalUpdatePerangkat" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Perangkat</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Id Group</label>
                                            <input name="id_group" value="{{ $perangkat->id_group }}" required type="number" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('id_group')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Id Area</label>
                                            <input required type="number" value="{{ $perangkat->id_area }}" required name="id_area"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('id_area')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Id Unit</label>
                                            <input required type="number" required value="{{ $perangkat->id_unit }}" name="id_unit"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('id_unit')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Unit</label>
                                            <input required type="text" value="{{ $perangkat->nama_unit }}" required name="nama_unit"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('nama_unit')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Id Witel</label>
                                            <input required type="text" value="{{ $perangkat->id_witel }}" required name="id_witel"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('id_witel')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Witel</label>
                                            <input required type="text" value="{{ $perangkat->nama_witel }}" required name="nama_witel"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('id_witel')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Id Lokasi</label>
                                            <input required type="number" value="{{ $perangkat->id_lokasi }}" required name="id_lokasi"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('id_lokasi')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Location</label>
                                            <input required type="text" value="{{ $perangkat->nama_lokasi }}" required name="nama_lokasi"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('nama_lokasi')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Id Gedung</label>
                                            <input required type="number" value="{{ $perangkat->id_gedung }}" required name="id_gedung"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('id_gedung')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Gedung</label>
                                            <input required type="text" value="{{ $perangkat->nama_gedung }}" required name="nama_gedung"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('nama_gedung')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Id Kelas</label>
                                            <input required type="number" value="{{ $perangkat->id_kelas }}" required name="id_kelas"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('id_kelas')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Id Room</label>
                                            <input required type="number" value="{{ $perangkat->id_room }}" required name="id_room"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('id_room')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Id Lantai</label>
                                            <input required type="number" value="{{ $perangkat->id_lantai }}" required name="id_lantai"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('id_lantai')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Lantai</label>
                                            <input required type="text" value="{{ $perangkat->nama_lantai }}" required name="nama_lantai"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('nama_lantai')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Jid</label>
                                            <input required type="text" value="{{ $perangkat->jid }}" required name="jid"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('jid')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama jenis</label>
                                            <input required type="text" value="{{ $perangkat->nama_jenis }}" required name="nama_jenis"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('nama_jenis')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kid</label>
                                            <input required type="text" value="{{ $perangkat->kid }}" required name="kid"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('kid')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kategori</label>
                                            <input required type="text" value="{{ $perangkat->kategori }}" required name="kategori"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('kategori')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Skid</label>
                                            <input required type="text" value="{{ $perangkat->skid }}" required name="skid"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('skid')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Sub Kategori</label>
                                            <input required type="text" value="{{ $perangkat->sub_kategori }}" required name="sub_kategori"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('sub_kategori')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Perangkat</label>
                                            <input required type="text" value="{{ $perangkat->nama_perangkat }}" required name="nama_perangkat"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('nama_perangkat')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Is Ceklis</label>
                                            <input required type="text" value="{{ $perangkat->is_ceklis }}" required name="is_ceklis"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('is_ceklis')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Merk</label>
                                            <input required type="text" value="{{ $perangkat->merk }}" required name="merk"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('merk')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Satuan</label>
                                            <select required value="{{ $perangkat->satuan }}" name="satuan" class="form-control custom-select">
                                                <option value="{{ $perangkat->satuan }}">{{ $perangkat->satuan }}</option>
                                                <option value="unit">Unit</option>
                                                <option value="Titik">Titik</option>
                                            </select>
                                            <small class="form-control-feedback">
                                                @error('satuan')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Jumlah</label>
                                            <input required type="number" value="{{ $perangkat->jumlah }}" required name="jumlah"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('jumlah')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kapasitas</label>
                                            <input required type="number" value="{{ $perangkat->kapasitas }}" required name="kapasitas"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('kapasitas')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">No Seri</label>
                                            <input required type="number" value="{{ $perangkat->no_seri }}" required name="no_seri"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('no_seri')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Type</label>
                                            <input required type="number" value="{{ $perangkat->type }}" required name="type"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('type')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tahun">Pilih Tahun:</label>
                                            <select id="tahun" name="tahun" value="{{ $perangkat->tahun }}">
                                                <option value="">-- Pilih Tahun --</option>
                                                <script>
                                                    var startYear = 1995;
                                                    var endYear = new Date().getFullYear() + 10;
                                                    for (var year = startYear; year <= endYear; year++) {
                                                        document.write('<option value="' + year + '">' + year + '</option>');
                                                    }
                                                </script>
                                            </select>
                                            <small class="form-control-feedback"> @error('tahun')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kondisi</label>
                                            <input required type="number" value="{{ $perangkat->kondisi }}" required name="kondisi"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('kondisi')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Milik</label>
                                            <input required type="number" value="{{ $perangkat->milik }}" required name="milik"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('milik')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Keterangan</label>
                                            <input required type="number" value="{{ $perangkat->keterangan }}" required name="keterangan"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('keterangan')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Id Perangkat</label>
                                            <input required type="text" value="{{ $perangkat->id_perangkat }}" required name="id_perangkat"
                                                class="form-control">
                                            <small class="form-control-feedback"> @error('id_perangkat')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

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
    <!-- KONTEN MODAL UPDATE Customer  -->
    {{-- KONTEN MODAL DELETE Customer --}}
    <div class="modal fade" id="ModalDeletePerangkat" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                </div>
                <div class="modal-body">
                    Tindakan ini akan menghapus data tersebut dan data yang dihapus tidak dapat di kembalikan, apakah anda yakin ingin melanjutkan ?
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
@endsection