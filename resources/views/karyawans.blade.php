@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Import Karyawan</h4>
                <br>
                {{-- @canany(['bsrm', 'admin'])
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahMitra">
                    <i class="fa fa-user-plus"></i> Tambah Mitra
                </button>
                <a button type="button" class="btn btn-primary" href="/import-mitra">
                    <i class="fa fa-plus"></i> Import Mitra
                    </button> </a>
                @endcanany --}}
                {{-- <h6 class="card-subtitle">Data table example</h6> --}}
                <form action="/karyawans" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Import</button>
                        <a button class="btn btn-primary" href="/import-karyawan">Reset</button></a>
                    </div>
                </form>
                <div class="table-responsive ">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped" style="font-size: 14px;">
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">NIK Telpro</th>
                                <th scope="col">NIK Telkom Group</th>
                                <th scope="col">Nama Karyawan</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Kota Lahir</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Jalan</th>
                                <th scope="col">Unit Kerja</th>
                                <th scope="col">Loker</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Band kelas Posisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 0;
                                @endphp --}}
                            @forelse ($karyawan as $user)
                                <tr>
                                    {{-- <th scope="row">{{ ++$no }}</th> --}}
                                    <td>{{ $user->nik }}</td>
                                    <td>{{ $user->no_hp }}</td>
                                    <td>{{ $user->nama_karyawan }}</td>
                                    <td>{{ $user->jenis_kelamin }}</td>
                                    <td>{{ $user->tgl_lahir }}</td>
                                    <td>{{ $user->kota_lahir }}</td>
                                    <td>{{ $user->agama }}</td>
                                    <td>{{ $user->jalan }}</td>
                                    <td>{{ $user->unit_kerja }}</td>
                                    <td>{{ $user->loker }}</td>
                                    <td>{{ $user->jabatan }}</td>
                                    <td>{{ $user->band_kelas_posisi }}</td>
                                </tr>
                            @empty
                                <td colspan="4" class="table-active text-center">Tidak Ada Data</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Selesai --}}

        <!-- /# row -->

    </div>
 
@endsection
