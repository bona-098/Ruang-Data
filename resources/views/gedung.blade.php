@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Import Data Gedung</h4>
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
                <form action="/gedung_import" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Import</button>
                        <a button class="btn btn-primary" href="/gedung_import">Reset</button></a>
                    </div>
                </form>
                <div class="table-responsive ">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped" style="font-size: 14px;">
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">ID Gedung</th>
                                <th scope="col">Nama Gedung</th>
                                <th scope="col">Nama Area</th>
                                <th scope="col">Nama Witel</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Koordinat</th>
                                <th scope="col">Total Petugas</th>
                                <th scope="col">Luasan</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 0;
                                @endphp --}}
                            @forelse ($gedung as $s)
                                <tr>
                                    {{-- <th scope="row">{{ ++$no }}</th> --}}
                                    <td>{{ $s->Id_gedung }}</td>
                                    <td>{{ $s->nama_gedung }}</td>
                                    <td>{{ $s->nama_area}}</td>
                                    <td>{{ $s->nama_witel }}</td>
                                    <td>{{ $s->kelas }}</td>
                                    <td>{{ $s->alamat }}</td>
                                    <td>{{ $s->koordinat }}</td>
                                    <td>{{ $s->total_petugas }}</td>
                                    <td>{{ $s->luasan }}</td>
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
