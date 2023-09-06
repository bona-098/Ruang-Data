@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Import Projek</h4>
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
                <form action="/projek" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Import</button>
                        <a button class="btn btn-primary" href="/projek">Reset</button></a>
                    </div>
                </form>
                <div class="table-responsive ">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped" style="font-size: 14px;">
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">customer</th>
                                <th scope="col">id_crm</th>
                                <th scope="col">witel</th>
                                <th scope="col">nama_project</th>
                                <th scope="col">kategori</th>
                                <th scope="col">skema</th>
                                <th scope="col">nilai_project</th>
                                <th scope="col">sudah_akru</th>
                                <th scope="col">sisa_belum_akru</th>
                                <th scope="col">progress_ml</th>
                                <th scope="col">progress_mi</th>
                                <th scope="col">target_deal</th>
                                <th scope="col">keterangan</th>
                                <th scope="col">start_date</th>
                                <th scope="col">end_date</th>
                                <th scope="col">tahap</th>
                                <th scope="col">akru</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 0;
                                @endphp --}}
                            @forelse ($project as $p)
                                <tr>
                                    {{-- <th scope="row">{{ ++$no }}</th> --}}
                                    <td>{{ $p->customer }}</td>
                                    <td>{{ $p->id_crm }}</td>
                                    <td>{{ $p->witel}}</td>
                                    <td>{{ $p->nama_project }}</td>
                                    <td>{{ $p->kategori }}</td>
                                    <td>{{ $p->skema }}</td>
                                    <td>{{ $p->nilai_project }}</td>
                                    <td>{{ $p->sudah_akru}}</td>
                                    <td>{{ $p->sisa_belum_akru }}</td>
                                    <td>{{ $p->progress_ml}}</td>
                                    <td>{{ $p->progress_mi}}</td>
                                    <td>{{ $p->target_deal }}</td>
                                    <td>{{ $p->keterangan }}</td>
                                    <td>{{ $p->start_date }}</td>
                                    <td>{{ $p->end_date}}</td>
                                    <td>{{ $p->tahap }}</td>
                                    <td>{{ $p->akru }}</td>
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
