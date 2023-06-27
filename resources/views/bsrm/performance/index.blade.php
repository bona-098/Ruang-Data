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
                            <label for="filter1">Kategori:</label>
                            <select id="filter1" class="form-control">
                                <option value="">Pilih Kategori</option>
                                <option value="Financial">Financial</option>
                                <option value="Outlook Q2">Outlook Q2</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="filter3">Tahun:</label>
                            <select id="filter3" class="form-control">
                                <option value="Pilih Tahub">Pilih Tahun</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="filter1">Area:</label>
                            <select id="filter1" class="form-control">
                                <option value="">Pilih Area</option>
                                <option value="Balikpapan">Balikpapan</option>
                                <option value="Kalimantan Timur">kalimantan Timur</option>
                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                <option value="Kalimantan Barat">Kalimantan Barat</option>
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
                                <th>Action</th>
                                <th>Kategori</th>
                                <th>Bulan/Tahun</th>
                                <th>Area</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($performance as $p)
                                <tr>
                                    <td style="vertical-align: middle; padding-top: 10px;">
                                        {{-- <div class=" text-center"> --}}
                                        <button type="button" class=" btn btn-primary " id="dropdownMenuButton"
                                            data-toggle="dropdown"><i class="fa fa-cog"></i>
                                            Action
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#ModalUpdate{{ $p->id }}"
                                                href="{{ route('performance.edit', $p->id) }}"><i
                                                class="fa fa-edit"></i> Update</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#ModalDelete{{ $p->id }}"
                                                    href="#"><i
                                                    class="fa fa-trash"></i> Delete</a>
                                        </div>
                                        {{-- </div> --}}
                                    </td>
                                    <td style="vertical-align: middle; padding-top: 10px;">{{ $p->kategori }}</td>
                                    <td style="vertical-align: middle; padding-top: 10px;">{{ $p->area }}</td>
                                    <td style="vertical-align: middle; padding-top: 10px;">{{ $p->bulan }} /
                                        {{ $p->tahun }} </td>
                                    <td><a href="{{ asset('images/performance/' . $p->foto) }}" target="_blank">
                                            <img src="{{ asset('images/performance/' . $p->foto) }}" alt="gombar"></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- </div> --}}
                </div>
                <!-- /# column -->
            </div>
        </div>
        <!-- KONTEN MODAL Edit Performance  -->
        @foreach ($performance as $p)            
        <div class="modal fade" id="ModalUpdate{{ $p->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <form action="{{ route('performance.update', $p->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Pilih Kategori</label>
                                                <select required name="kategori" id="kategori" class="form-control">
                                                    <option value="">Pilih Kategori</option>
                                                    <option value="Financial">Financial</option>
                                                    <option value="Outlook Q2">Outlook Q2</option>
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('kategori')
                                                        {{ $message }}
                                                    @enderror
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Pilih Area</label>
                                                <select id="area" name="area" class="form-control">
                                                    <option value="">Pilih Area</option>
                                                    <option value="Balikpapan">Balikpapan</option>
                                                    <option value="Kalimantan Timur">kalimantan Timur</option>
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
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="foto">Gambar</div>
                                            <div class="value">
                                                <input type="file" name="foto">
                                                <div class="label--desc">pilih gambar</div>
                                            </div>
                                            {{-- <label for="foto">Gambar</label>
                                            <input type="file" class="form-control-file" id="foto" name="foto"> --}}
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
        </div>
        @endforeach


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
                            <form action="{{ route('performance.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Pilih Kategori</label>
                                                <select required name="kategori" id="kategori" class="form-control">
                                                    <option value="">Pilih Kategori</option>
                                                    <option value="Financial">Financial</option>
                                                    <option value="Outlook Q2">Outlook Q2</option>
                                                </select>
                                                <small class="form-control-feedback">
                                                    @error('kategori')
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
                                    </div>
                                    <!--/row-->
                                    <div class="row">
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
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="foto">Gambar</div>
                                            <div class="value">
                                                <input type="file" name="foto">
                                                <div class="label--desc">pilih gambar</div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="area" class="control-label">Pilih Area</label>
                                            <select id="area" name="area" class="form-control">
                                                <option value="">Pilih Area</option>
                                                <option value="Balikpapan">Balikpapan</option>
                                                <option value="Kalimantan Timur">kalimantan Timur</option>
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


        {{-- KONTEN MODAL DELETE Customer --}}
        @foreach ($performance as $p)            
        <div class="modal fade" id="ModalDelete{{ $p->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">keluar</button>
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
    @endsection