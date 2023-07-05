@extends('layout.layout')
@section('content')
    @php
        use App\Http\Cotrollers\PerformanceController;
    @endphp
    <section class="content">
        <div class="container-fluid">

            {{-- Filter Tabel --}}
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('performance.index') }}" method="GET" id="form_1">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <label for="filter1">Area</label>
                                <select name="area" class="form-control" onchange="submitForm1()">
                                    <option value="">Semua Area</option>
                                    <option value="Regional Only"
                                        {{ isset($_GET['area']) && $_GET['area'] == 'Regional Only' ? 'selected' : '' }}>
                                        Regional Only</option>
                                    <option value="Regional Konsolidasi"
                                        {{ isset($_GET['area']) && $_GET['area'] == 'Regional Konsolidasi' ? 'selected' : '' }}>
                                        Regional Konsolidasi</option>
                                    <option value="Balikpapan"
                                        {{ isset($_GET['area']) && $_GET['area'] == 'Balikpapan' ? 'selected' : '' }}>
                                        Balikpapan</option>
                                    <option value="Kalimantan Timur"
                                        {{ isset($_GET['area']) && $_GET['area'] == 'Kalimantan Timur' ? 'selected' : '' }}>
                                        Kalimantan Timur</option>
                                    <option value="Kalimantan Selatan"
                                        {{ isset($_GET['area']) && $_GET['area'] == 'Kalsel' ? 'selected' : '' }}>
                                        Kalimantan Selatan</option>
                                    <option value="Kalimantan Barat"
                                        {{ isset($_GET['area']) && $_GET['area'] == 'Kalbar' ? 'selected' : '' }}>
                                        Kalimantan Barat</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label for="filter1">Tahun</label>
                                <input type="text" name="tahun" class="form-control"
                                    value="{{ isset($_GET['tahun']) ? $_GET['tahun'] : '' }}" onchange="submitForm2()">
                            </div>

                            <div class="col-md-3">
                                <label for="filter2">Bulan</label>
                                <select name="bulan" class="form-control" onchange="submitForm3()">
                                    <option value="">Semua Bulan</option>
                                    <option value="Januari"
                                        {{ isset($_GET['bulan']) && $_GET['bulan'] == 'Januari' ? 'selected' : '' }}>Januari
                                    </option>
                                    <option value="Februari"
                                        {{ isset($_GET['bulan']) && $_GET['bulan'] == 'Februari' ? 'selected' : '' }}>
                                        Februari</option>
                                    <option value="Maret"
                                        {{ isset($_GET['bulan']) && $_GET['bulan'] == 'Maret' ? 'selected' : '' }}>Maret
                                    </option>
                                    <option value="April"
                                        {{ isset($_GET['bulan']) && $_GET['bulan'] == 'April' ? 'selected' : '' }}>April
                                    </option>
                                    <option value="Mei"
                                        {{ isset($_GET['bulan']) && $_GET['bulan'] == 'Mei' ? 'selected' : '' }}>Mei
                                    </option>
                                    <option value="Juni"
                                        {{ isset($_GET['bulan']) && $_GET['bulan'] == 'Juni' ? 'selected' : '' }}>Juni
                                    </option>
                                    <option value="Juli"
                                        {{ isset($_GET['bulan']) && $_GET['bulan'] == 'Juli' ? 'selected' : '' }}>Juli
                                    </option>
                                    <option value="Agustus"
                                        {{ isset($_GET['bulan']) && $_GET['bulan'] == 'Agustus' ? 'selected' : '' }}>
                                        Agustus</option>
                                    <option value="September"
                                        {{ isset($_GET['bulan']) && $_GET['bulan'] == 'September' ? 'selected' : '' }}>
                                        September</option>
                                    <option value="Oktober"
                                        {{ isset($_GET['bulan']) && $_GET['bulan'] == 'Oktober' ? 'selected' : '' }}>
                                        Oktober</option>
                                    <option value="November"
                                        {{ isset($_GET['bulan']) && $_GET['bulan'] == 'November' ? 'selected' : '' }}>
                                        November</option>
                                    <option value="Desember"
                                        {{ isset($_GET['bulan']) && $_GET['bulan'] == 'Desember' ? 'selected' : '' }}>
                                        Desember</option>
                                </select>
                            </div>


                            {{-- <div class="col-md-2" style="padding-top: 5px;">
                            <label for="filter5"> </label>
                            <button type="submit" class="form-control btn-success"> <i class="fa fa-search"></i>
                                Search</button>
                        </div> --}}
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

                        // function submitForm4() {
                        //     document.getElementById('form_1').submit();
                        // }
                    </script>
                </div>
            </div>
            {{-- Akhir Filter Tabel --}}

            {{-- Filter Tabel --}}
            {{-- <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="filter3">Tahun:</label>
                            <select id="filter3" class="form-control"></select>
                        </div>
                        <div class="col-md-2">
                            <label for="filter1">Area:</label>
                            <select id="filter1" class="form-control">
                                <option value="">Semua Area</option>
                                <option value="regional konsolidasi">Regional Konsolidasi</option>
                                <option value="regional only">Regional Only</option>
                                <option value="balikpapan">Area Balikpapan</option>
                                <option value="kalimantan timur">Area Kalimantan Timur</option>
                                <option value="kalimantan selatan">Area Kalsel Kalteng</option>
                                <option value="kalimantan barat">Area Kalbar</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="bulan">Bulan:</label>
                            <select id="bulan" class="form-control">
                                <option value="all">Semua Bulan</option>
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="mei">Mei</option>
                                <option value="juni">Juni</option>
                                <option value="juli">Juli</option>
                                <option value="agustus">Agustus</option>
                                <option value="september">September</option>
                                <option value="oktober">Oktober</option>
                                <option value="november">November</option>
                                <option value="desember">Desember</option>
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
            </div> --}}
            {{-- Akhir Filter Tabel --}}
            <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahPerformance"
                        style="margin-bottom: 10px">
                        <i class="fa fa-user-plus"></i> Tambah Data
                    </button>
                    <table id="example23" class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Action</th>
                                <th style="text-align: center;">Area</th>
                                <th style="text-align: center;">Bulan dan Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($performance as $p)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle; padding-top: 10px;">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                id="dropdownMenuButton" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i> Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#ModalUpdate{{ $p->id }}" href="#"><i
                                                        class="fa fa-edit"></i> Update</a>
                                                <a class="dropdown-item" data-toggle="modal"
                                                    data-target="#ModalDeletePerformance{{ $p->id }}"
                                                    href="#"><i class="fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center;">{{ $p->area }}</td>
                                    <td style="text-align: center;">{{ $p->bulan }} /{{ $p->tahun }}</td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <a href="{{ route('performance.show', $p->id) }}" target="_blank">
                                            <img src="{{ asset('images/performance/' . $p->foto) }}"
                                                style="width: 100%; max-width: 100%;" alt="gambar">
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                        <!-- KONTEN MODAL Edit Performance  -->
                        @foreach ($performance as $p)
                            <div class="modal fade" id="ModalUpdate{{ $p->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered  modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Performance</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card-body">
                                                <form action="{{ route('performance.update', $p->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-body">
                                                        <div class="row p-t-20">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Pilih Area</label>
                                                                    <select id="area" name="area"
                                                                        class="form-control">
                                                                        <option value="">Pilih Area</option>
                                                                        <option value="Regional Konsolidasi"
                                                                            @if ($p->area == 'Regional Konsolidasi') selected @endif>
                                                                            Regional Konsolidasi</option>
                                                                        <option value="Regional Only"
                                                                            @if ($p->area == 'Regional Only') selected @endif>
                                                                            Regional Only</option>
                                                                        <option value="Balikpapan"
                                                                            @if ($p->area == 'Balikpapan') selected @endif>
                                                                            Area Balikpapan</option>
                                                                        <option value="Kalimantan Timur"
                                                                            @if ($p->area == 'Kalimantan Timur') selected @endif>
                                                                            Area Kalimantan
                                                                            Timur</option>
                                                                        <option value="Kalimantan Selatan"
                                                                            @if ($p->area == 'Kalimantan Selatan') selected @endif>
                                                                            Area Kalsel
                                                                            Kalteng</option>
                                                                        <option value="Kalimantan Barat"
                                                                            @if ($p->area == 'Kalimantan Barat') selected @endif>
                                                                            Area Kalbar
                                                                        </option>
                                                                    </select>
                                                                    @error('area')
                                                                        <small
                                                                            class="form-text text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Tahun</label>
                                                                    <input name="tahun" id="tahun" required
                                                                        type="number" class="form-control"
                                                                        min="2022" max="{{ date('Y') }}"
                                                                        value="{{ $p->tahun }}">
                                                                    @error('tahun')
                                                                        <small
                                                                            class="form-text text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="bulan">Bulan:</label>
                                                                    <select id="bulan" name="bulan"
                                                                        class="form-control">
                                                                        <option value="">Pilih Bulan</option>
                                                                        <option value="Januari"
                                                                            @if ($p->bulan == 'Januari') selected @endif>
                                                                            Januari</option>
                                                                        <option value="Februari"
                                                                            @if ($p->bulan == 'Februari') selected @endif>
                                                                            Februari</option>
                                                                        <option value="Maret"
                                                                            @if ($p->bulan == 'Maret') selected @endif>
                                                                            Maret</option>
                                                                        <option value="April"
                                                                            @if ($p->bulan == 'April') selected @endif>
                                                                            April</option>
                                                                        <option value="Mei"
                                                                            @if ($p->bulan == 'Mei') selected @endif>
                                                                            Mei</option>
                                                                        <option value="Juni"
                                                                            @if ($p->bulan == 'Juni') selected @endif>
                                                                            Juni</option>
                                                                        <option value="Juli"
                                                                            @if ($p->bulan == 'Juli') selected @endif>
                                                                            Juli</option>
                                                                        <option value="Agustus"
                                                                            @if ($p->bulan == 'Agustus') selected @endif>
                                                                            Agustus</option>
                                                                        <option value="September"
                                                                            @if ($p->bulan == 'September') selected @endif>
                                                                            September</option>
                                                                        <option value="Oktober"
                                                                            @if ($p->bulan == 'Oktober') selected @endif>
                                                                            Oktober
                                                                        </option>
                                                                        <option value="November"
                                                                            @if ($p->bulan == 'November') selected @endif>
                                                                            November</option>
                                                                        <option value="Desember"
                                                                            @if ($p->bulan == 'Desember') selected @endif>
                                                                            Desember</option>
                                                                    </select>
                                                                    @error('bulan')
                                                                        <small
                                                                            class="form-text text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="foto">Gambar</label>
                                                                    <input type="file" class="form-control-file"
                                                                        id="foto" name="foto">
                                                                    @error('foto')
                                                                        <small
                                                                            class="form-text text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Target RKAP</label>
                                                                    <input name="target_rkap" value="{{ $p->target_rkap }}" min="0" required type="number"
                                                                        class="form-control" >
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Target RKM</label>
                                                                    <input name="target_rkm" value="{{ $p->target_rkm }}" min="0" required type="number"
                                                                        class="form-control" >
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">ACH</label>
                                                                    <input name="ach" value="{{ $p->ach }}" min="0" required type="number"
                                                                        class="form-control" >
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>




        <!-- KONTEN MODAL TAMBAH Customer  -->
        <div class="modal fade" id="ModalTambahPerformance" tabindex="-1" aria-labelledby="exampleModalLabel"
            data-backdrop="static" data-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Performance</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <form action="{{ route('performance.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Pilih Area</label>
                                                <select id="area" name="area" class="form-control">
                                                    <option value="">Pilih Area</option>
                                                    <option value="Regional Konsolidasi">Regional Konsolidasi</option>
                                                    <option value="Regional Only">Regional Only</option>
                                                    <option value="Balikpapan">Area Balikpapan</option>
                                                    <option value="Kalimantan Timur">Area Kalimantan Timur</option>
                                                    <option value="Kalimantan Selatan">Area Kalsel Kalteng</option>
                                                    <option value="Kalimantan Barat">Area Kalbar</option>
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('area')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Tahun</label>
                                                <input name="tahun" id="tahun" required type="number"
                                                    class="form-control" min="2020" max="{{ date('Y') }}">
                                                <small class="form-control-feedback">
                                                    @error('tahun')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bulan">Bulan:</label>
                                                <select id="bulan" name="bulan" class="form-control">
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
                                        <div class="col-md-6">
                                            <div class="foto">Gambar</div>
                                            <div class="value">
                                                <input type="file" name="foto">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Target RKAP</label>
                                                <input name="target_rkap" min="0" required type="number"
                                                    class="form-control" >
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Target RKM</label>
                                                <input name="target_rkm" min="0" required type="number"
                                                    class="form-control" >
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">ACH</label>
                                                <input name="ach" min="0" required type="number"
                                                    class="form-control" >
                                            </div>
                                        </div>
                                        <!--/span-->
                                        
                                    </div>
                                    <!--/row-->
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
        <!-- KONTEN MODAL TAMBAH Customer  -->

        {{-- KONTEN MODAL DELETE Customer --}}
        @foreach ($performance as $p)
            <div class="modal fade" id="ModalDeletePerformance{{ $p->id }}" data-backdrop="static"
                data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                        </div>
                        <div class="modal-body">
                            Tindakan ini akan menghapus data tersebut dan data yang dihapus tidak dapat di kembalikan,
                            apakah
                            anda
                            yakin ingin melanjutkan ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <form action="{{ route('performance.destroy', $p->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <script>
        // Fungsi untuk menghasilkan pilihan tahun
        function generateYearOptions(startYear, endYear) {
            var options = "";
            for (var year = startYear; year <= endYear; year++) {
                options += "<option value='" + year + "'>" + year + "</option>";
            }
            return options;
        }

        // Mengisi elemen select dengan pilihan tahun
        var filter3Select = document.getElementById("filter3");
        var currentYear = new Date().getFullYear();
        var startYear = 2023;
        var endYear = currentYear + 10; // Misalnya, sampai 10 tahun ke depan
        filter3Select.innerHTML = generateYearOptions(startYear, endYear);
    </script>
@endsection
