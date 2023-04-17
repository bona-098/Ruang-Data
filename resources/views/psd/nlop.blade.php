@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Project NLOP</h4>
                <br>
                <!-- Button trigger modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahKaryawan">
                    <i class="fa fa-user-plus"></i> Tambah Project
                </button>

                {{-- <h6 class="card-subtitle">Data table example</h6> --}}
                <div class="table-responsive ">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Action</th>
                                <th>witel</th>
                                <th>lokasi</th>
                                <th>fm</th>
                                <th>margin</th>
                                <th>mitra</th>
                                <th>keterangan</th>
                                <th>waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projectnlop as $p)
                                <tr>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-cog">Aksi</i>
                                            </button>
                                            {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="{{ route('karyawan.edit', $k->id) }}"><i
                                                        class="fa fa-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="{{ route('karyawan.show', $k->id) }}"><i
                                                        class="fa fa-eye"></i> show</a>
                                                <form action="{{ route('karyawan.destroy', $k->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="dropdown-item" type="submit"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                            class="fa fa-trash"></i> Hapus</button>
                                                </form> --}}
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $p->deskripsi_pekerjaan }}</td>
                                    <td>{{ $p->witel }}</td>
                                    <td>{{ $p->lokasi }}</td>
                                    <td>{{ $p->fm }}</td>
                                    <td>{{ $p->margin }}</td>
                                    <td>{{ $p->mitra }}</td>
                                    <td>{{ $p->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection