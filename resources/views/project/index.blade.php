@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">

        {{-- Filter Tabel --}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <label for="filter1">Kode AMPM:</label>
                        <select id="filter1" class="form-control">
                            <option value="All">All</option>
                            <option value="Non Lop">Non Lop</option>
                            <option value="Lop">Lop</option>

                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="filter2">Witel:</label>
                        <select id="filter2" class="form-control">
                            <option value="All">All</option>
                            <option value="Balikpapan">Balikpapan</option>
                            <option value="Samarinda">Samarinda</option>
                            <option value="Kalsel">Kalsel</option>
                            <option value="Kalbar">Kalbar</option>
                            <option value="Treg">Treg</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="filter3">Kategori:</label>
                        <select id="filter3" class="form-control">
                            <option value="All">All</option>
                            <option value="Enterprise">Exma</option>
                            <option value="Government">Telkom</option>
                            <option value="Subsidiaries">Telkom Group</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="filter4">Tahap:</label>
                        <select id="filter4" class="form-control">
                            <option value="All">All</option>
                            <option value="Komersial">Komersial</option>
                            <option value="On Hand">On Hand</option>
                            <option value="Potensial">Potensial</option>
                            <option value="Prospek">Prospek</option>
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
            </div>
        </div>
        {{-- Akhir Filter Tabel --}}
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Project</h4>
                <br>
                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahCustomer">
                    <i class="fa fa-user-plus"></i> Tambah Data 
                </button>
                <a button type="button" href="/" class="btn btn-primary">
                    <i class="fa fa-plus"></i> Import Data
                    </button> </a>
                {{-- <h6 class="card-subtitle">Data table example</h6> --}}

                {{-- <div class="table-responsive"> --}}
                <table text-align: left; id="myTable" class="table display table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Customer</th>
                            <th style="white-space: nowrap;">Kode AMPM</th>
                            <th>Witel</th>
                            <th style="white-space: nowrap;">Nama Project</th>
                            <th>kategori</th>
                            <th>Skem</th>
                            <th style="white-space: nowrap;">Nilai Project</th>
                            <th style="white-space: nowrap;">Sudah Akru</th>
                            <th style="white-space: nowrap;">Sisa Belum Akru</th>
                            <th style="white-space: nowrap;">Progres ML</th>
                            <th style="white-space: nowrap;">Progres MI</th>
                            <th style="white-space: nowrap;">Start Date</th>
                            <th style="white-space: nowrap;">End Date</th>
                            <th>Keterangan</th>
                            <th style="white-space: nowrap;">Due Date</th>
                            <th>Tahap</th>
                            <th>Akru</th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>
                                <div class=" text-center">
                                    <a href="/project_detail" class="btn btn-primary">Detail</a>
                                </div>
                            </td>
                            <td>AMC</td>
                            <td>nonlop</td>
                            <td>Balikpapan</td>
                            <td>Fitting Out PTD Balikpapan</td>
                            <td>Telkom</td>
                            <td>DP 15%, Progres 50%-30%, Progres 80%-30%, Progres 100%-25%</td>
                            <td>4,760,968,300</td>
                            <td>4,760,968,300</td>
                            <td></td>
                            <td>100%</td>
                            <td>100%</td>
                            <td>M-3 Agustus 2021</td>
                            <td>M-3 Agustus 2021</td>
                            <td></td>
                            <td></td>
                            <td style="white-space: nowrap;">CO - ONHAND</td>
                            <td>JUNI</td>
                        </tr>



                    </tbody>
                </table>
                {{-- </div> --}}
            </div>
            <!-- /# column -->
        </div>
        {{-- Selesai --}}

        <!-- /# row -->

    </div>

    {{-- KONTEN MODAL DETAIL --}}

    <div class="modal fade" id="ModalDetailCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog  modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Detail</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table text-align: left; id="myTable" class="table table-bordered table-striped">
                            {{-- <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kolom 1</th>
                                </tr>
                            </thead> --}}
                            <tbody>
                                <tr>
                                    <th scope="row">No</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">Customer</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kode AMPM</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Witel</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Project</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kategori</th>
                                    <td>Perjanjian Sewa Menyewa Lahan Untuk Pemasangan Dan Penempatan Menara Telekomunikasi
                                        Bersama Dan Fasilitas Penunjangnya Tanah Kosong Untuk H3I
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Skem</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nilai Project</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sudah Akru</th>
                                    <td>BUSINESS SUPPORT & RISK MANAGEMENT REGIONAL VI ( Balikpapan )</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sisa Belum Akru</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Progres ML</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Progres MI</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Target Deal</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Due Date</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tahap</th>
                                    <td>Data 4</td>
                                </tr>
                                <tr>
                                    <th scope="row">Akru</th>
                                    <td>Data 4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- KONTEN MODAL DETAIL --}}

    <!-- KONTEN MODAL TAMBAH Customer  -->
    <div class="modal fade" id="ModalTambahCustomer" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Non Lop</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('sales.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Customer</label>
                                            <input type="text" value="Fajriansyah" name="customer" id="Unit Kerja" class="form-control"
                                                placeholder="Masukkan Unit Kerja" required>
                                            <small class="form-control-feedback"> @error('customer')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kode AMPM</label>
                                            <select required name="Kode AMPM" class="form-control" >
                                                <option value="">Pilih Kode AMPM</option>
                                                <option value="Non Lop">Non Lop</option>
                                                <option value="Lop">Lop</option>
                                            </select>
                                            <small class="form-control-feedback">
                                                @error('Kode AMPM')
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
                                            <label class="control-label">Witel</label>
                                            <select required name="witel" class="form-control">
                                                <option value="">Pilih Witel</option>
                                                <option value="Balikpapan">Balikpapan</option>
                                                <option value="Samarinda">Samarinda</option>
                                                <option value="Kalsel">Kalsel</option>
                                                <option value="Kalbar">Kalbar</option>
                                                <option value="Treg">Treg</option>
                                            </select>
                                            <small class="form-control-feedback"> @error('witel')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kategori</label>
                                            <select required name="kategori" class="form-control ">
                                                <option value="">Pilih Kategori</option>
                                                <option value="Enterprise">Exma</option>
                                                <option value="Government">Telkom</option>
                                                <option value="Subsidiaries">Telkom Group</option>
                                            </select>
                                            <small class="form-control-feedback"> @error('segment')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Nama Project</label>
                                            <input name="nama_project" value="Pengembangan Sistem Informasi Dokumen dan Barang di Pegadaian" required type="text" id="kota_lahir"
                                                class="form-control">
                                            <small class="form-control-feedback">
                                                @error('nama_project')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->

                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Skem</label>
                                            <input name="skem" value="scammmm" required type="text" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('skem')
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
                                            <input required name="nilai_project" id="nilai_project" min="0" type="number" class="form-control">
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
                                            <input required name="sudah_akru" id="sudah_akru" min="0" type="number" class="form-control">
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
                                            <input required name="sisa_belum_akru" id="sisa_belum_akru" min="0" readonly type="number" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('sisa_belum_akru')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Progres Minggu Lalu</label>
                                            <input required name="progres_ml" value="21" type="number" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('progres_ml')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Progres Minggu Ini</label>
                                            <input required name="progres_mi" value="12" type="number" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('progres_mi')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Target Deal</label>
                                            <input required name="target_deal" value="targetin" type="text"
                                                class="form-control">
                                            <small class="form-control-feedback">
                                                @error('target_deal')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>keterangan</label>
                                            <input required name="keterangan" value="keterangan nna" type="text" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('keterangan')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Due Date</label>
                                            <input required name="due_date" type="date"
                                                class="form-control">
                                            <small class="form-control-feedback">
                                                @error('due_date')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tahap</label>
                                            <select name="tahap" class="form-control">
                                                <option value="Co-OnHand ">Co-OnHand</option>
                                                <option value="Komersial">Komersial</option>
                                                <option value="OnHand">OnHand</option>
                                            </select>
                                            <small class="form-control-feedback"> @error('tahap')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Akru</label>
                                            <input required name="akru" type="date"
                                                class="form-control">
                                            <small class="form-control-feedback">
                                                @error('akru')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!--/row-->
                            </div>
                            {{-- <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                Save</button>
                            <button type="button" class="btn btn-inverse">Cancel</button>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
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