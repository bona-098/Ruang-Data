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
                    <div class="row">
                        <div class="col-md-2">
                            <label for="filter3">Tahun:</label>
                            <select id="filter3" class="form-control"></select>
                        </div>
                        <div class="col-md-2">
                            <label for="filter1">Area:</label>
                            <select id="filter1" class="form-control">
                                <option value="">Pilih Area</option>
                                <option value="Balikpapan">Regional Konsolidasi</option>
                                <option value="Balikpapan">Regional Only</option>
                                <option value="Balikpapan">Area Balikpapan</option>
                                <option value="Kalimantan Timur">Area Kalimantan Timur</option>
                                <option value="Kalimantan Selatan">Area Kalsel Kalteng</option>
                                <option value="Kalimantan Barat">Area Kalbar</option>
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
            </div>
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
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
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
                                                                        <option value="Balikpapan"
                                                                            @if ($p->area == 'Balikpapan') selected @endif>
                                                                            Regional Konsolidasi</option>
                                                                        <option value="Balikpapan"
                                                                            @if ($p->area == 'Balikpapan') selected @endif>
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
                                                                        min="1900" max="{{ date('Y') }}"
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
                                                                        <option value="januari"
                                                                            @if ($p->bulan == 'januari') selected @endif>
                                                                            Januari</option>
                                                                        <option value="februari"
                                                                            @if ($p->bulan == 'februari') selected @endif>
                                                                            Februari</option>
                                                                        <option value="maret"
                                                                            @if ($p->bulan == 'maret') selected @endif>
                                                                            Maret</option>
                                                                        <option value="april"
                                                                            @if ($p->bulan == 'april') selected @endif>
                                                                            April</option>
                                                                        <option value="mei"
                                                                            @if ($p->bulan == 'mei') selected @endif>
                                                                            Mei</option>
                                                                        <option value="juni"
                                                                            @if ($p->bulan == 'juni') selected @endif>
                                                                            Juni</option>
                                                                        <option value="juli"
                                                                            @if ($p->bulan == 'juli') selected @endif>
                                                                            Juli</option>
                                                                        <option value="agustus"
                                                                            @if ($p->bulan == 'agustus') selected @endif>
                                                                            Agustus</option>
                                                                        <option value="september"
                                                                            @if ($p->bulan == 'september') selected @endif>
                                                                            September</option>
                                                                        <option value="oktober"
                                                                            @if ($p->bulan == 'oktober') selected @endif>
                                                                            Oktober
                                                                        </option>
                                                                        <option value="november"
                                                                            @if ($p->bulan == 'november') selected @endif>
                                                                            November</option>
                                                                        <option value="desember"
                                                                            @if ($p->bulan == 'desember') selected @endif>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Performance</h5>
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
                                                    <option value="Balikpapan">Regional Konsolidasi</option>
                                                    <option value="Balikpapan">Regional Only</option>
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
                                                    class="form-control" min="1900" max="{{ date('Y') }}">
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
                                            {{-- <label for="foto">Gambar</label>
                                        <input type="file" class="form-control-file" id="foto" name="foto"> --}}
                                        </div>
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
