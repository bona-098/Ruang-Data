@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        {{-- Filter Tabel --}}
        <div class="card">
            <div class="card-body">
                <form action="{{ route('project.index') }}" method="GET" id="form_1">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label for="filter2">Kategori</label>
                            <select name="kategori" class="form-control">
                                <option value="">Semua Kategori</option>
                                <option value="Enterprise"
                                    {{ isset($_GET['kategori']) && $_GET['kategori'] == 'Enterprise' ? 'selected' : '' }}>
                                    Enterprise</option>
                                <option value="Government"
                                    {{ isset($_GET['kategori']) && $_GET['kategori'] == 'Government' ? 'selected' : '' }}>
                                    Government</option>
                                <option value="Telkom Group"
                                    {{ isset($_GET['kategori']) && $_GET['kategori'] == 'Telkom Group' ? 'selected' : '' }}>
                                    Telkom Group</option>
                                <option value="Telkom"
                                    {{ isset($_GET['kategori']) && $_GET['kategori'] == 'Telkom' ? 'selected' : '' }}>
                                    Telkom</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filter3">Tahap</label>
                            <select name="tahap" class="form-control">
                                <option value="">Semua Tahap</option>
                                <option value="Co-OnHand"
                                    {{ isset($_GET['tahap']) && $_GET['tahap'] == 'Co-OnHand' ? 'selected' : '' }}>
                                    Co-OnHand</option>
                                <option value="Komersial"
                                    {{ isset($_GET['tahap']) && $_GET['tahap'] == 'Komersial' ? 'selected' : '' }}>
                                    Komersial</option>
                                <option value="OnHand"
                                    {{ isset($_GET['tahap']) && $_GET['tahap'] == 'OnHand' ? 'selected' : '' }}>
                                    OnHand</option>
                            </select>
                        </div>
                        <div class="col-md-2" style="padding-top: 5px;">
                            <label for="filter5"> </label>
                            <button type="submit" class="form-control btn-success"> <i class="fa fa-search"></i>
                                Search</button>
                        </div>
                    </div>
                </form>
                <script>
                    function submitForm1() {
                        document.getElementById('form_1').submit();
                    }

                    function submitForm2() {
                        document.getElementById('form_1').submit();
                    }

                    function submitForm3() {
                        document.getElementById('form_1').submit();
                    }

                    function submitForm4() {
                        document.getElementById('form_1').submit();
                    }
                </script>
            </div>
        </div>

        {{-- Akhir Filter Tabel --}}
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Project</h4>
                <br>
                @canany(['project', 'admin'])
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahProject">
                        <!-- Button trigger modal -->
                        <i class="fa fa-user-plus"></i> Tambah Data
                        <!-- Button trigger modal -->
                    </button>
                    <a button type="button" href="/projek" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Import Data
                        </button> </a>
                @endcanany
                <div class="table-responsive">
                    <table text-align: left; id="myTable" class="table display table-bordered table-striped"
                        style="font-size: 12px;">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Nama Project</th>
                                <th>Witel</th>
                                <th>Progress ML</th>
                                <th>Progress MI</th>
                                <th style="white-space: nowrap;">Nilai Project</th>
                                <th style="white-space: nowrap;">Sudah Akru</th>
                                <th style="white-space: nowrap;">Sisa Belum Akru</th>
                                <th style="white-space: nowrap;">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project as $p)
                                <tr>
                                    <td>{{ $p->customer }}</a></td>
                                    <td style="font-size: 12px;"><a href="{{ route('project.show', $p->id) }}"
                                            target="_blank"
                                            style="color: rgb(20, 19, 19); text-decoration: underline;">{{ $p->nama_project }}
                                    </td>
                                    <td>{{ $p->witel }}</td>
                                    <td>{{ $p->progress_ml ?? 0 }}%</td>
                                    <td>{{ $p->progress_mi ?? 0 }}%</td>
                                    <td style="white-space: nowrap; font-size: 12px;">Rp
                                        {{ number_format(floatval($p->nilai_project), 0, ',', '.') }}</td>
                                    <td style="white-space: nowrap; font-size: 12px;">Rp
                                        {{ number_format(floatval($p->sudah_akru), 0, ',', '.') }}</td>
                                    <td style="white-space: nowrap; font-size: 12px;">Rp
                                        {{ number_format(floatval($p->sisa_belum_akru), 0, ',', '.') }}</td>
                                    <td style="white-space: nowrap; font-size: 12px;">{{ $p->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /# column -->
        </div>
        {{-- Selesai --}}

        <!-- /# row -->

    </div>

    <!-- KONTEN MODAL TAMBAH Customer  -->
    <div class="modal fade" id="ModalTambahProject" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Non Lop</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Customer</label>
                                            <input type="text" name="customer" id="customer" class="form-control"
                                                placeholder="Customer">
                                            <small class="form-control-feedback"> @error('customer')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Witel</label>
                                            <input name="witel" type="text" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('witel')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kategori</label>
                                            <select name="kategori" class="form-control ">
                                                <option value="">Pilih Kategori</option>
                                                <option value="Enterprise">Enterprise</option>
                                                <option value="Governance">Governance</option>
                                                <option value="Telkom">Telkom</option>
                                                <option value="Telkom Group">Telkom Group</option>
                                            </select>
                                            <small class="form-control-feedback"> @error('kategori')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Nama Project</label>
                                            <input name="nama_project" type="text" id="nama_project"
                                                class="form-control">
                                            <small class="form-control-feedback">
                                                @error('nama_project')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Skem</label>
                                            <input name="skema" type="text" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('skema')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nilai Project</label>
                                            <input name="nilai_project" id="nilai_project" min="0" type="number"
                                                class="form-control">
                                            <small class="form-control-feedback">
                                                @error('nilai_project')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sudah Akru</label>
                                            <input name="sudah_akru" id="sudah_akru" min="0" type="number"
                                                class="form-control">
                                            <small class="form-control-feedback">
                                                @error('sudah_akru')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sisa Belum Akru</label>
                                            <input name="sisa_belum_akru" id="sisa_belum_akru" min="0"
                                                type="number" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('sisa_belum_akru')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Progress Minggu Lalu</label>
                                            <input name="progress_ml" type="number" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('progress_ml')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Progress Minggu Ini</label>
                                            <input name="progress_mi" type="number" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('progress_mi')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Target Deal</label>
                                            <input name="target_deal" type="text" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('target_deal')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input name="keterangan" type="text" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('keterangan')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tahap</label>
                                            <select name="tahap" class="form-control">
                                                <option value="Co-OnHand">Potensial</option>
                                                <option value="Komersial">Done</option>
                                                <option value="OnHand">Progress</option>
                                            </select>
                                            <small class="form-control-feedback"> @error('tahap')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bulan">Akru</label>
                                            <select id="bulan" name="akru" class="form-control">
                                                <option value="">Pilih Bulan</option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                                            </select>
                                            <small class="form-control-feedback"> @error('bulan')
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
        {{-- <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                Save</button>
                            <button type="button" class="btn btn-inverse">Cancel</button>
                        </div> --}}
    </div>


    <script>
        var inputA = document.getElementById("nilai_project");
        var inputB = document.getElementById("sudah_akru");
        var hasil = document.getElementById("sisa_belum_akru");

        nilai_project.addEventListener("input", hitungPengurangan);
        sudah_akru.addEventListener("input", hitungPengurangan);

        function hitungPengurangan() {
            var a = Number(nilai_project.value);
            var b = Number(sudah_akru.value);
            var c = a - b;
            if (c < 0) {
                hasil.value = "";
                alert("Hasil pengurangan tidak boleh negatif!");
            } else {
                hasil.value = c;
            }
        }
    </script>

    <!-- KONTEN MODAL TAMBAH Customer  -->

    <!-- KONTEN MODAL UPDATE Customer  -->


    <!-- KONTEN MODAL UPDATE Customer  -->

    {{-- KONTEN MODAL DELETE Customer --}}

    <div class="modal fade" id="ModalDeleteCustomer" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
