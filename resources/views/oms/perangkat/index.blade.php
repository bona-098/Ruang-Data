{{-- DONE --}}
@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="" method="GET" id="form_1">
                    @csrf
                    <div class="row">
                        <div class="col-md-2">
                            <label for="filter1">Nama Unit :</label>
                            <select name="unit_kerja" class="form-control">
                                <option value="">Semua Unit </option>
                                <option value="Area Balikpapan"
                                    value="{{ isset($_GET['unit_kerja']) && $_GET['unit_kerja'] == 'Area Balikpapan' }}">
                                    Area Balikpapan</option>
                                <option value="Area Kaltim"
                                    value="{{ isset($_GET['unit_kerja']) && $_GET['unit_kerja'] == 'Area Kaltim' }}">Area
                                    Kalimantan Timur</option>
                                <option value="Area Kalsel"
                                    value="{{ isset($_GET['unit_kerja']) && $_GET['unit_kerja'] == 'Area Kalsel' }}">Area
                                    Kalimantan Selatan</option>
                                <option value="Area Kalbar"
                                    value="{{ isset($_GET['unit_kerja']) && $_GET['unit_kerja'] == 'Area Kalbar' }}">Area
                                    Kalimantan Barat</option>
                            </select>
                            {{-- <script>
                                document.getElementById('unit_kerja').value = "<?php if (isset($_GET['unit_kerja']) && $_GET['unit_kerja']) {
                                    echo $_GET['unit_kerja'];
                                } ?>";
                            </script> --}}
                        </div>
                        <div class="col-md-2">
                            <label for="filter2">Nama Witel:</label>
                            <select id="filter2" name="status_revenue" class="form-control">
                                <option value=" ">Semua Witel</option>
                                <option value="Recurring"
                                    value="{{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Recurring' }}">
                                    Recurring</option>
                                <option value="Scalling"
                                    value="{{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Scalling' }}">
                                    Scalling</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="filter3">Nama Lokasi:</label>
                            <select id="filter3" name="segment" class="form-control">
                                <option value="">Semua Lokasi</option>
                                <option value="Enterprise"
                                    value="{{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Scalling' }}">
                                    Enterprise</option>
                                <option value="Government"
                                    value="{{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Scalling' }}">
                                    Government</option>
                                <option value="Subsidiaries"
                                    value="{{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Scalling' }}">
                                    Subsidiaries</option>
                                <option value="Telkom"
                                    value="{{ isset($_GET['status_revenue']) && $_GET['status_revenue'] == 'Scalling' }}">
                                    Telkom</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="filter5">Nama Gedung:</label>
                            <select id="filter5" name="status_project" class="form-control">
                                <option value="">Semua Gedung</option>
                                <option value="On Hand"
                                    value="{{ isset($_GET['status_project']) && $_GET['status_project'] == 'On Hand' }}">On
                                    Hand</option>
                                <option value="Prospek"
                                    value="{{ isset($_GET['status_project']) && $_GET['status_project'] == 'Prospek' }}">
                                    Prospek</option>
                            </select>
                        </div>
                        <div class="col-md-2" style="padding-top: 5px;">
                            <label for="filter5"> </label>
                            <button type="submit" class=" form-control btn-success"> <i class="fa fa-filter"></i>
                                Filter</button>
                        </div>
                        <div class="col-md-2" style="padding-top: 5px;">
                            <label for="filter5"> </label>
                            <button type="button" class=" form-control btn-success">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- Akhir Filter Tabel --}}
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Perangkat</h4>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahPerangkat">
                    <i class="fa fa-user-plus"></i> Tambah Perangkat
                </button>
                <a button type="button" class="btn btn-primary" href="/import-perangkat"><i
                    class="fa fa-plus"></i> Import Data Perangkat</button> </a>
                <table text-align: left; id="myTable"
                    class=" table table-responsive display table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th style="white-space: nowrap;">Nama Unit</th>
                            <th style="white-space: nowrap;">Nama Witel</th>
                            <th style="white-space: nowrap;">Nama Lokasi</th>
                            <th>Nama Gedung</th>
                            <th>Nama Jenis</th>
                            <th>Kategori</th>
                            <th style="white-space: nowrap;">Sub Kategori</th>
                            <th style="white-space: nowrap;">Nama Perangkat</th>
                            <th>Merk</th>
                            <th style="white-space: nowrap;">Milik</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($perangkat->count() > 0)
                            @foreach ($perangkat as $pr)
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('perangkat.show', $pr->id) }}">Detail</a>
                                    </td>
                                    <td>{{ $pr->nama_unit }}</td>
                                    <td>{{ $pr->nama_witel }}</td>
                                    <td>{{ $pr->nama_lokasi }}</td>
                                    <td>{{ $pr->nama_gedung }}</td>
                                    <td style="white-space: nowrap;">{{ $pr->nama_jenis }}</td>
                                    <td>{{ $pr->kategori }}</td>
                                    <td>{{ $pr->sub_kategori }}</td>
                                    <td>{{ $pr->nama_perangkat }}</td>
                                    <td>{{ $pr->merk }}</td>
                                    <td>{{ $pr->milik }}</td>
                                </tr>
                            @endforeach
                        @else
                            <p>Tidak ada data perangkat yang tersedia.</p>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade" id="ModalTambahPerangkat" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Perangkat</h5>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form action="{{ route('perangkat.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Id Group</label>
                                                <input name="id_group" required type="number" class="form-control">
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
                                                <input required type="number" required name="id_area"
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
                                                <input required type="number" required name="id_unit"
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
                                                <input required type="text" required name="nama_unit"
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
                                                <input required type="text" required name="id_witel"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('id_witel')
                                                        {{ $message }}
                                                    @enderror </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama Witel</label>
                                                <input required type="text" required name="nama_witel"
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
                                                <input required type="number" required name="id_lokasi"
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
                                                <input required type="text" required name="nama_lokasi"
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
                                                <input required type="number" required name="id_gedung"
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
                                                <label class="control-label">Id Kelas</label>
                                                <input required type="number" required name="id_kelas"
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
                                                <input required type="number" required name="id_room"
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
                                                <input required type="number" required name="id_lantai"
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
                                                <input required type="text" required name="nama_lantai"
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
                                                <input required type="text" required name="jid"
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
                                                <input required type="text" required name="nama_jenis"
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
                                                <input required type="text" required name="kid"
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
                                                <input required type="text" required name="kategori"
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
                                                <input required type="text" required name="skid"
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
                                                <input required type="text" required name="sub_kategori"
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
                                                <input required type="text" required name="nama_perangkat"
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
                                                <input required type="text" required name="is_ceklis"
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
                                                <input required type="text" required name="merk"
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
                                                <select required name="satuan" class="form-control custom-select">
                                                    <option value="">Pilih Unit</option>
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
                                                <input required type="number" required name="jumlah"
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
                                                <input required type="number" required name="kapasitas"
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
                                                <input required type="number" required name="no_seri"
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
                                                <input required type="number" required name="type"
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
                                                <select id="tahun" name="tahun">
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
                                                <input required type="number" required name="kondisi"
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
                                                <input required type="number" required name="milik"
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
                                                <input required type="number" required name="keterangan"
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
                                                <input required type="text" required name="id_perangkat"
                                                    class="form-control">
                                                <small class="form-control-feedback"> @error('id_perangkat')
                                                        {{ $message }}
                                                    @enderror </small>
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
    </div>

    <!-- Modal Import -->
    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="modal-import-label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-import-label">Import Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="file">Pilih file </label>
                            <input type="file" class="form-control-file" id="file" name="file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
@endsection
