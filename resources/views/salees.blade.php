@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Import Data Sales</h4>
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
                <form action="/salees" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Import</button>
                        <a button class="btn btn-primary" href="/salees">Reset</button></a>
                    </div>
                </form>
                <div class="table-responsive ">
                    <table text-align: left; id="myTable" class="table table-bordered table-striped" style="font-size: 14px;">
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">Unit_kerja</th>
                                <th scope="col">Status Revenue</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Segment</th>
                                <th scope="col">Nama Project</th>
                                <th scope="col">lokasi_gedung</th>
                                <th scope="col">jenis_pekerjaan</th>
                                <th scope="col">portfolio</th>
                                <th scope="col">progress_project</th>
                                <th scope="col">status_project</th>
                                <th scope="col">proses_pendekatan_customer</th>
                                <th scope="col">visit</th>
                                <th scope="col">sph</th>
                                <th scope="col">bakn</th>
                                <th scope="col">spk</th>
                                <th scope="col">masa_project</th>
                                <th scope="col">jumlah_man_power</th>
                                <th scope="col">tgl_sp</th>
                                <th scope="col">no_sp</th>
                                <th scope="col">jenis_kontrak</th>
                                <th scope="col">tgl_mulai_project</th>
                                <th scope="col">tgl_akhir_project</th>
                                <th scope="col">sisa_kontrak</th>
                                <th scope="col">nilai_total_project</th>
                                <th scope="col">nilai_project_pertahun</th>
                                <th scope="col">nilai_project_perbulan</th>
                                <th scope="col">nama_key_kontak_client</th>
                                <th scope="col">jabatan_pic_client</th>
                                <th scope="col">no_hp_pic_client</th>
                                <th scope="col">nama_pic_gsd</th>
                                <th scope="col">sisa_kontrak</th>
                                <th scope="col">nilai_total_project</th>
                                <th scope="col">nilai_project_pertahun</th>
                                <th scope="col">nilai_project_perbulan</th>
                                <th scope="col">nama_key_kontak_client</th>
                                <th scope="col">jabatan_pic_client</th>
                                <th scope="col">>no_hp_pic_client</th>
                                <th scope="col">nama_pic_gsd</th>
                                <th scope="col">drive_kontrak</th>
                                <th scope="col">amandemen</th>
                                <th scope="col">keterangan</th>
                        
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $no = 0;
                                @endphp --}}
                            @forelse ($sales as $s)
                                <tr>
                                    {{-- <th scope="row">{{ ++$no }}</th> --}}
                                    <td>{{ $s->unit_kerja }}</td>
                                    <td>{{ $s->status_revenue }}</td>
                                    <td>{{ $s->customer }}</td>
                                    <td>{{ $s->segment }}</td>
                                    <td>{{ $s->nama_project }}</td>
                                    <td>{{ $s->lokasi_gedung }}</td>
                                    <td>{{ $s->jenis_pekerjaan }}</td>
                                    <td>{{ $s->portfolio }}</td>
                                    <td>{{ $s->progress_project }}</td>
                                    <td>{{ $s->status_project }}</td>
                                    <td>{{ $s->proses_pendekatan_customer }}</td>
                                    <td>{{ $s->visit}}</td>
                                    <td>{{ $s->sph }}</td>
                                    <td>{{ $s->bakn }}</td>
                                    <td>{{ $s->spk }}</td>
                                    <td>{{ $s->masa_project }}</td>
                                    <td>{{ $s->jumlah_man_power }}</td>
                                    <td>{{ $s->tgl_sp}}</td>
                                    <td>{{ $s->no_sp }}</td>
                                    <td>{{ $s->jenis_kontrak }}</td>
                                    <td>{{ $s->tgl_mulai_project }}</td>
                                    <td>{{ $s->tgl_akhir_project }}</td>
                                    <td>{{ $s->sisa_kontrak}}</td>
                                    <td>{{ $s->nilai_total_project }}</td>
                                    <td>{{ $s->nilai_project_pertahun }}</td>
                                    <td>{{ $s->nilai_project_perbulan }}</td>
                                    <td>{{ $s->nama_key_kontak_client }}</td>
                                    <td>{{ $s->jabatan_pic_client }}</td>
                                    <td>{{ $s->no_hp_pic_client}}</td>
                                    <td>{{ $s->nama_pic_gsd}}</td>
                                    <td>{{ $s->drive_kontrak }}</td>
                                    <td>{{ $s->	amandemen }}</td>
                                    <td>{{ $s->keterangan}}</td>
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
