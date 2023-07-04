@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        {{-- Filter Tabel --}}
        {{-- <div class="card">
            <div class="card-body">
                <div class="row">

                    <div class="col-sm-6">
                        <label for="filter3">Kategori:</label>
                        <select id="filter3" class="form-control">
                            <option value="All">All</option>
                            <option value="Enterprise">Exma</option>
                            <option value="Government">Telkom</option>
                            <option value="Subsidiaries">Telkom Group</option>
                        </select>
                    </div>

                    <div class="col-sm-6">
                        <label for="filter4">Tahap:</label>
                        <select id="filter4" class="form-control">
                            <option value="All">All</option>
                            <option value="Komersial">Sudah Akru</option>
                            <option value="On Hand">Belum Akru</option>
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
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Project</h4>
                <br>
                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahCustomer">
                    <i class="fa fa-user-plus"></i> Tambah Data
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ImportData"><i
                    class="fa fa-plus"></i> Import Sales</button> --}}
                {{-- <h6 class="card-subtitle">Data table example</h6> --}}
                <table text-align: left; id="myTable" class="table table-responsive display table-bordered table-striped">
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
                            <th style="white-space: nowrap;">progress ML</th>
                            <th style="white-space: nowrap;">progress MI</th>
                            <th style="white-space: nowrap;">Start Date</th>
                            <th style="white-space: nowrap;">End Date</th>
                            <th>Keterangan</th>
                            <th>Tahap</th>
                            <th>Akru</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($project as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class=" text-center">
                                        <a href="{{ route('project.show',$p->customer) }}" class="btn btn-primary">Detail</a>
                                    </div>
                                </td>
                                <td>{{ $p->customer }}</td>
                                <td>{{ $p->id_crm }}</td>
                                <td>{{ $p->witel }}</td>
                                <td>{{ $p->nama_project }}</td>
                                <td>{{ $p->kategori }}</td>
                                <td>{{ $p->skema }}</td>
                                <td>{{ $p->nilai_project }}</td>
                                <td>{{ $p->sudah_akru }}</td>
                                <td>{{ $p->sisa_belum_akru }}</td>
                                <td>{{ $p->progress_ml }}</td>
                                <td>{{ $p->progress_mi }}</td>
                                <td>{{ $p->start_date }}</td>
                                <td>{{ $p->end_date }}</td>
                                <td>{{ $p->keterangan }}</td>
                                <td>{{ $p->tahap }}</td>
                                <td>{{ $p->akru }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
@endsection