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
                                    <td colspan="6">{{ $gedung->Id_gedung}}</td>
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
                                    <th scope="row">Nama Gedung</th>
                                    <td colspan="6">{{ $gedung->nama_gedung }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td colspan="6">{{ $gedung->alamat }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Koordinat</th>
                                    <td colspan="6">{{ $gedung->koordinat }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Luas</th>
                                    <td colspan="6">{{ $gedung->luasan}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Total Petugas</th>
                                    <td colspan="6">{{ $gedung->total_petugas}}</td>
                                </tr>
                                <tr>
                                    <td colspan="6" style="text-align: center;"><strong>Daftar Petugas Gedung</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Area</th>
                                    <th>Witel</th>
                                    <th>Jabatan</th>
                                </tr>

                                @foreach ($personil as $pe)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pe->nama }}</td>
                                        <td>{{ $pe->area }}</td>
                                        <td>{{ $pe->witel }}</td>
                                        <td>{{ $pe->jabatan }}</td>
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
                                            <select required name="nama_area" class="form-control custom-select"
                                                id="nama_area">
                                                <option value="">Pilih Area</option>
                                                <option value="Balikpapan">Balikpapan</option>
                                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                <option value="Kalimantan Barat">Kalimantan Barat</option>
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
                                            <select required name="nama_witel" class="form-control custom-select"
                                                id="nama_witel">
                                                <option value="">Pilih Witel</option>
                                                @if ($gedung->nama_witel)
                                                    <option value="{{ $gedung->nama_witel }}" selected>
                                                        {{ $gedung->nama_witel }}</option>
                                                @endif
                                            </select>
                                            <small class="form-control-feedback">
                                                @error('witel')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>

                                    <script>
                                        // Mendengarkan perubahan pada dropdown "Area"
                                        document.getElementById('nama_area').addEventListener('change', function() {
                                            var witelDropdown = document.getElementById('nama_witel');
                                            witelDropdown.innerHTML = ''; // Menghapus opsi witel sebelumnya

                                            var selectedArea = this.value;

                                            // Menambahkan opsi witel berdasarkan area yang dipilih
                                            if (selectedArea === 'Balikpapan') {
                                                addOption(witelDropdown, 'Witel Balikpapan', 'Witel Balikpapan');
                                            } else if (selectedArea === 'Kalimantan Timur') {
                                                addOption(witelDropdown, 'Witel Samarinda', 'Witel Samarinda');
                                                addOption(witelDropdown, 'Witel Kaltara', 'Witel Kaltara');
                                            } else if (selectedArea === 'Kalimantan Selatan') {
                                                addOption(witelDropdown, 'Witel Kalsel', 'Witel Kalsel');
                                                addOption(witelDropdown, 'Witel Kalteng', 'Witel Kalteng');
                                            } else if (selectedArea === 'Kalimantan Barat') {
                                                addOption(witelDropdown, 'Witel Kalbar', 'Witel Kalbar');
                                            }
                                        });

                                        // Fungsi untuk menambahkan opsi ke dalam dropdown
                                        function addOption(select, text, value) {
                                            var option = document.createElement('option');
                                            option.text = text;
                                            option.value = value;
                                            select.add(option);
                                        }
                                    </script>

                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Gedung</label>
                                            <input required type="text" required name="nama_gedung"
                                                value={{ $gedung->nama_gedung }} class="form-control">
                                            <small class="form-control-feedback"> @error('nama_gedung')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Alamat</label>
                                            <input required type="text" required name="alamat"
                                                value={{ $gedung->alamat }} class="form-control">
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
                                                value={{ $gedung->koordinat }} class="form-control">
                                            <small class="form-control-feedback"> @error('koordinat')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Luasan</label>
                                            <input required type="number" required name="luasan"
                                                value={{ $gedung->koordinat }} class="form-control">
                                            <small class="form-control-feedback"> @error('koordinat')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Total Petugas</label>
                                            <input required type="text" required name="total_petugas"
                                                value={{ $gedung->koordinat }} class="form-control">
                                            <small class="form-control-feedback"> @error('total_petugas')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->

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
                            <input type="hidden" name="gedung_id" value="{{ $gedung->id }}">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Petugas</label>
                                            <input type="text" name="nama" class="form-control" required>
                                            @error('nama')
                                                <small class="form-control-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Area</label>
                                            <input type="text" name="area" class="form-control" required>
                                            @error('telepon')
                                                <small class="form-control-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Witel</label>
                                            <input type="text" name="witel" class="form-control" required>
                                            @error('nik')
                                                <small class="form-control-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Jabatan</label>
                                            <input type="text" name="jabatan" class="form-control" required>
                                            @error('lokasi_kerja')
                                                <small class="form-control-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
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
                        <form action="{{ route('personil.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <!--/row-->
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Petugas</label>
                                            <input required type="text" required name="nama" class="form-control">
                                            <small class="form-control-feedback"> @error('nama')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nomor Telepon</label>
                                            <input required type="text" required name="telepon" class="form-control">
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
                                            <label class="control-label">Lokasi Kerja</label>
                                            <input required type="text" required name="lokasi_kerja"
                                                class="form-control">
                                        </div>
                                    </div>

                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kontrak</label>
                                            <input required type="text" required name="kontrak" class="form-control">
                                        </div>
                                    </div>

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
                    <form action="{{ route('gedung.destroy', $gedung->id) }}" method="POST" id="delete-form">
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
